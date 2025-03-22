If you prefer not to use PDO (for example, using MySQLi instead), we can modify the code accordingly. Below is an example that uses MySQLi to interact with the database, along with FullCalendar for slot booking.

### Step 1: Database Design (Same as before)

You still need two tables:

- **`booking_slots`**: Stores information about each time slot and its availability.
- **`bookings`**: Stores actual bookings made by users.

The structure for both tables remains the same as mentioned earlier.

### Step 2: PHP Backend Code with MySQLi

In this version, we will use **MySQLi** to interact with the database.

#### **Booking Slot Functions with MySQLi**

```php
<?php
// MySQLi connection
$mysqli = new mysqli("localhost", "username", "password", "your_database");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Function to get available slots for a specific day
function getAvailableSlots($date) {
    global $mysqli;
    $query = "SELECT time_slot, total_capacity - booked_capacity AS available_slots 
              FROM booking_slots 
              WHERE date = '$date' 
              AND (total_capacity - booked_capacity) > 0"; // Only slots with availability

    $result = $mysqli->query($query);
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    return [];
}

// Function to book a slot
function bookSlot($userName, $date, $timeSlot) {
    global $mysqli;

    // Check if the slot is available
    $query = "SELECT booked_capacity, total_capacity FROM booking_slots WHERE date = '$date' AND time_slot = '$timeSlot'";
    $result = $mysqli->query($query);
    $slot = $result->fetch_assoc();

    if ($slot && $slot['booked_capacity'] < $slot['total_capacity']) {
        // Slot available, make the booking
        $query = "INSERT INTO bookings (user_name, booking_date, booking_time) VALUES ('$userName', '$date', '$timeSlot')";
        if ($mysqli->query($query)) {
            // Update booked capacity of the slot
            $updateQuery = "UPDATE booking_slots SET booked_capacity = booked_capacity + 1 WHERE date = '$date' AND time_slot = '$timeSlot'";
            $mysqli->query($updateQuery);
            return true;
        }
    } else {
        // Slot is full
        return false;
    }
}
?>
```

### Step 3: FullCalendar Integration with MySQLi

This will be the JavaScript part where we use FullCalendar and integrate it with the PHP functions above.

#### **FullCalendar JavaScript with Modal Integration**

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FullCalendar Booking</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FullCalendar CSS -->
  <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction/main.min.css" rel="stylesheet" />

  <style>
    /* Custom CSS if needed */
  </style>
</head>
<body>

  <div class="container mt-5">
    <div id="calendar"></div>
  </div>

  <!-- Bootstrap Modal for Booking -->
  <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventModalLabel">Book Slot</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6 id="selectedDate">Selected Date: </h6>
          <h6 id="availableSlots">Available Slots: </h6>
          <form id="bookingForm">
            <div class="mb-3">
              <label for="userName" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="userName" placeholder="Enter your name" required>
            </div>
            <button type="submit" class="btn btn-primary">Book Slot</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- FullCalendar JS -->
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction/main.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid', 'interaction'],
        defaultView: 'dayGridMonth',

        // Get available slots via AJAX
        events: function(info, successCallback, failureCallback) {
          fetch('get_slots.php?date=' + info.startStr)
            .then(response => response.json())
            .then(data => {
              var events = data.map(slot => {
                return {
                  title: slot.available_slots + ' / 40 slots left', // Show available slots
                  start: slot.date + 'T' + slot.time_slot,
                  description: slot.available_slots, // Pass available slots as description
                  allDay: false
                };
              });
              successCallback(events);
            })
            .catch(err => failureCallback(err));
        },

        dateClick: function(info) {
          // Open modal on date click
          var modal = new bootstrap.Modal(document.getElementById('eventModal'));
          var selectedDate = document.getElementById('selectedDate');
          var availableSlots = document.getElementById('availableSlots');

          selectedDate.innerText = 'Selected Date: ' + info.dateStr;
          availableSlots.innerText = 'Available Slots: ' + info.event.extendedProps.description; // Use available slots

          modal.show();

          // Handle booking form submission
          var form = document.getElementById("bookingForm");
          form.onsubmit = function(event) {
            event.preventDefault();

            var userName = document.getElementById("userName").value;
            var eventDate = info.event.startStr;
            var timeSlot = info.event.start.toISOString().split('T')[1].slice(0, 5); // Extract time from event start time

            fetch('book_slot.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
              },
              body: JSON.stringify({
                user_name: userName,
                booking_date: eventDate,
                booking_time: timeSlot
              })
            })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                alert('Booking Successful!');
                modal.hide();  // Close modal
                calendar.refetchEvents(); // Refresh calendar
              } else {
                alert('No slots available.');
              }
            });
          };
        }
      });

      calendar.render();
    });
  </script>

</body>
</html>
```

### Explanation:

1. **FullCalendar**:
    
    - The calendar shows the available slots with the format `37 / 40 slots left` for each time slot.
    - When a user clicks on a date, a Bootstrap modal opens that displays the available slots.
2. **PHP Logic**:
    
    - The backend PHP functions (`getAvailableSlots` and `bookSlot`) interact with the MySQLi database to fetch available slots and handle booking.
    - The booking form is submitted through `book_slot.php` which updates the database when a booking is made.
3. **AJAX Communication**:
    
    - The events for the calendar are fetched through `get_slots.php`, which returns available slots in JSON format.
    - The user can submit a booking form, and the backend handles the booking and updates the slot capacity.

### Additional Notes:

- Make sure to handle proper validation and sanitization of inputs, especially when dealing with user input.
- You can extend the `get_slots.php` and `book_slot.php` files to include proper error handling and ensure security (e.g., prevent SQL injection, handle session management).

This approach doesn't rely on PDO and instead uses MySQLi for database interaction while still providing the same functionality for slot bookings and displaying available slots.