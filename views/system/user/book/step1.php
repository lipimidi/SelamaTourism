<!--
=========================================================
* Argon Dashboard 2 PRO - v2.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/argon-dashboard-pro 
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php"); ?>


<body class="g-sidenav-show   bg-gray-200">

  <!-- End Google Tag Manager (noscript) -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidenav.php"); ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar.php"); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="mt-5 text-white">Secure your spot now</h3>
          <h5 class="text-white font-weight-normal">Customize your experience today!</h5>

          <div class="multisteps-form mb-5">
            <!--progress bar-->
            <div class="row mt-5">
              <div class="col-12 col-lg-8 mx-auto my-5">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                    <span>Date</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Address">
                    <span>People</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                    <span>Insurance</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                    <span>Finish</span>
                  </button>
                </div>
              </div>
            </div>
            <!--form panels-->
            <div class="row mb-lg-7">
              <div class="col">
                <div class="card card-calendar">
                  <div class="card-body p-3">
                    <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                  </div>
                </div>
                <div class="button-row d-flex mt-4">
                  <a class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                    href="<?php echo $rootPath; ?>/book/people">Next</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- //modal -->
      <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="eventModalLabel">Booking</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h6 id="selectedDate">Selected Date: </h6>
              <form id="eventForm" method="POST">
                <input type="text" class="form-control" id="eventDate" name="date" hidden>

                <div class="mb-3">
                  <label for="eventSession" class="form-label">Session</label>
                  <input type="number" class="form-control" id="eventSession" name="session" hidden>
                  <input type="text" class="form-control" id="eventSession2" name="session2" readonly>

                </div>

                <div class="mb-3">
                  <label for="eventPeople" class="form-label">People</label>
                  <input type="number" class="form-control" id="eventPeople" name="people_count"
                    value="<?php echo isset($_SESSION['booking']['people_count']) ? $_SESSION['booking']['people_count'] : '1'; ?>"
                    placeholder="Enter how many people">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmdate">Confirm</button>
              </form>
            </div>
          </div>
        </div>
      </div>





      <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

    </div>
  </main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/togglenav.php"); ?>

  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Define the function to get event time format based on screen size
      function getEventTimeFormat() {
        // Check if the screen width is tablet size or smaller
        if (window.innerWidth <= 375) {
          return {
            hour: 'numeric',
            hour12: true,  // 12-hour format
            meridiem: 'narrow',
          };
        }
        else if (window.innerWidth <= 768) {
          return {
            hour: 'numeric',
            hour12: true,  // 12-hour format
          };
        } else {
          return {
            hour: 'numeric',
            minute: '2-digit',
            hour12: true,  // Use 12-hour format (AM/PM)
          };
        }
      }

      // Initialize the FullCalendar object
      var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
        initialView: "dayGridMonth",
        headerToolbar: {
          start: 'title', // will normally be on the left. if RTL, will be on the right
          center: '',
          end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
        },

        eventTimeFormat: getEventTimeFormat(),

        selectable: true,
        height: 'auto',  // Adjust the height automatically
        contentHeight: 'auto', // Make content height auto

        events: function (fetchInfo, successCallback, failureCallback) {
          console.log("Sending request to fetch events..."); // Debug log

          $.ajax({
            url: "<?php echo $rootPath; ?>/book/events",
            type: "POST",
            dataType: "json",
            data: {
              fetch_events: true,
              start: fetchInfo.startStr,
              end: fetchInfo.endStr,
            }, // Secure POST request
            success: function (response) {
              console.log("Response received:", response); // Debug log
              successCallback(response);
            },
            error: function (xhr, status, error) {
              console.error("Error fetching events:", status, error);
              failureCallback([]);
            }
          });
        },

        eventClick: function (info) {
          // Show the modal with the selected date
          var modal = new bootstrap.Modal(document.getElementById('eventModal'));
          var selectedDate = document.getElementById('eventDate');
          var selectedDate2 = document.getElementById('selectedDate');
          var selectedSession = document.getElementById('eventSession');
          var selectedSession2 = document.getElementById('eventSession2');
          selectedSession2.value = info.event.extendedProps.session2;

          var selectedPeople = document.getElementById('eventPeople');
          selectedPeople.max = info.event.extendedProps.remaining_slots;

          // Get the session value
          selectedSession.value = info.event.extendedProps.session;
          selectedDate.value = info.event.extendedProps.event_date;
          console.log(info.event.extendedProps);

          // Format the event start date to dd-mm-yyyy using native JavaScript
          var startDate = info.event.start;
          var day = String(startDate.getDate()).padStart(2, '0'); // Add leading zero if necessary
          var month = String(startDate.getMonth() + 1).padStart(2, '0'); // Get month and pad with zero
          var year = startDate.getFullYear();

          var formattedDate = day + '-' + month + '-' + year; // Format as dd-mm-yyyy

          // Set the selected date
          selectedDate2.innerText = 'Selected Date: ' + formattedDate;

          // Open the modal
          modal.show();
        },

        views: {
          month: {
            titleFormat: {
              month: "long",
              year: "numeric"
            }
          },
        },
      });

      // Render the calendar
      calendar.render();
    });
  </script>


  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script_book.php"); ?>

</body>

</html>