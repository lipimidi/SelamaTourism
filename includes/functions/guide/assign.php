<?php

if (isset($_POST['fetch_events_guide'])) {

    // echo json_encode($_POST['start']);

    $start_utc = $_POST['start'];
    $end_utc = $_POST['end'];

    // Convert UTC datetime to local date (YYYY-MM-DD)
    $start_date = date('Y-m-d', strtotime($start_utc));
    $end_date = date('Y-m-d', strtotime($end_utc));


    $events = [];

    // Get available time slots from `booking_timeslots` table
    $timeslots = [];
    $sql = "SELECT id, start_time, end_time FROM booking_timeslots";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $timeslots[] = $row;
    }

    // Generate events for each date in the range
    $current_date = strtotime($start_date);
    $end_date = strtotime($end_date);

    while ($current_date <= $end_date) {
        $date_string = date('Y-m-d', $current_date);

        foreach ($timeslots as $timeslot) {
            $timeslot_id = $timeslot['id'];
            $start_time = $timeslot['start_time'];
            $end_time = $timeslot['end_time'];

            // Get the total booked people for this date and timeslot
            $sql = "SELECT COALESCE(SUM(people_booked), 0) AS total_booked 
                    FROM bookings 
                    WHERE booking_date = '$date_string' AND timeslot_id = '$timeslot_id' AND status ='2'  ";

            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $total_booked = $row['total_booked'];

            // Calculate available slots (max 40)
            $remaining_slots = max(0, 40 - $total_booked);
            // $color = ($remaining_slots <= 0) ? '#ff0000' : '#28a745'; // Red if full, green if available
            $className = ($remaining_slots <= 0) ? 'bg-gradient-danger' : 'bg-gradient-success'; // Red if full, green if available

            if ($remaining_slots < 40) {


                $sql_guide = "SELECT * 
                                FROM guides 
                                WHERE guides.date = '$date_string' 
                                AND guides.timeslot_id = '$timeslot_id'
                                ";

                $result_guide = $conn->query($sql_guide);
                $guide = $result_guide->fetch_assoc();
                $guide_name = $guide['user_id'] ?? ' ';
                $guide_id = $guide['id'] ?? ' ';


                if (isset($guide['user_id'])) {
                    $className = 'bg-gradient-info';  // Apply the info class if both match
                }

                // Create the event for FullCalendar
                $events[] = [
                    'title' => "$total_booked people booked",
                    'start' => "$date_string $start_time",
                    'end' => "$date_string $end_time",
                    'session' => $timeslot_id,
                    'session2' => $timeslots[$timeslot_id - 1]["start_time"] . " - " . $timeslots[$timeslot_id - 1]["end_time"],
                    // 'color' => $color,
                    'event_date' => $date_string,
                    'className' => $className,
                    'remaining_slots' => $remaining_slots,
                    'guide' => $guide_name,
                    'guide_id' => $guide_id,
                ];
            }

        }

        // Move to the next day
        $current_date = strtotime("+1 day", $current_date);
    }

    echo json_encode($events);
    die();

}


if ( isset($_POST['assignguide'])) {
 

    $date = $_POST['date'];
     $session = $_POST['session'];
    $user_id = $_POST['guide'];


    $sql = "INSERT INTO guides (`user_id`, `date`, `timeslot_id` ) VALUES ( '$user_id', '$date', '$session' )";
 
    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location: " . $basePath2 . "/guide/assign");
    exit();

    
    // echo "<script>console.log(" . json_encode($_POST) . ");</script>";
    // echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";
 

    // echo $_SESSION['session'];

}