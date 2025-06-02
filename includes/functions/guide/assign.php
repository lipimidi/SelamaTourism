<?php

if (isset($_POST['fetch_events_guide'])) {

    // echo json_encode($_POST['start']);

    $start_utc = $_POST['start'];
    $end_utc = $_POST['end'];
    $user_id = isset($_POST['user_id']) ? (int) $_POST['user_id'] : null; // Ensure you get the user_id
    $role = isset($_POST['role']) ? (int) $_POST['role'] : null; // Ensure you get the role

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
            $sql = "SELECT COALESCE(COUNT(gd.id), 0) AS total_booked
                        FROM guides g
                        INNER JOIN guide_details gd ON g.id = gd.guide_id
                        WHERE g.date = '$date_string' 
                        AND g.timeslot_id = '$timeslot_id' 
                   
                        ";

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
                // If role is '2', check if guide matches user_id
                if ($role == '2' && $guide_name == $user_id) {
                    // Create the event for FullCalendar for role 2 and matching guide
                    $events[] = [
                        'title' => "$total_booked people",
                        'start' => "$date_string $start_time",
                        'end' => "$date_string $end_time",
                        'session' => $timeslot_id,
                        'session2' => $timeslots[$timeslot_id - 1]["start_time"] . " - " . $timeslots[$timeslot_id - 1]["end_time"],
                        // 'color' => $color, // Uncomment and define the color if needed
                        'event_date' => $date_string,
                        'className' => $className,
                        'remaining_slots' => $remaining_slots,
                        'user_id' => $guide_name,
                        'guide_id' => $guide_id,
                    ];
                }
                // If role is '1', proceed without checking user_id
                elseif ($role == '1') {
                    // Create the event for FullCalendar for role 1 without checking guide against user_id
                    $events[] = [
                        'title' => "$total_booked people  ",
                        'start' => "$date_string $start_time",
                        'end' => "$date_string $end_time",
                        'session' => $timeslot_id,
                        'session2' => $timeslots[$timeslot_id - 1]["start_time"] . " - " . $timeslots[$timeslot_id - 1]["end_time"],
                        // 'color' => $color, // Uncomment and define the color if needed
                        'event_date' => $date_string,
                        'className' => $className,
                        'remaining_slots' => $remaining_slots,
                        'user_id' => $guide_name,
                        'guide_id' => $guide_id,
                    ];
                } else {

                }



            }

        }

        // Move to the next day
        $current_date = strtotime("+1 day", $current_date);
    }

    echo json_encode($events);
    die();

}

if (isset($_POST['assignguide'])) {

    // Collect form data
    $date = $_POST['date'];
    $session = $_POST['session'];
    $user_id = $_POST['guide'];
    $status = '1'; // New status for the guide (you can modify this as needed)

    // Check if the guide is already assigned to the same date and session
    $check_sql = "SELECT * FROM guides WHERE  `date` = '$date' AND `timeslot_id` = '$session'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // If the guide is already assigned, perform an update
        $update_sql = "UPDATE guides SET `status` = '$status' , `user_id` = '$user_id' WHERE   `date` = '$date' AND `timeslot_id` = '$session'";

        if (mysqli_query($conn, $update_sql)) {
            // echo "Guide assignment updated successfully.";





        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // If the guide is not assigned, perform an insert
        $insert_sql = "INSERT INTO guides (`user_id`, `date`, `timeslot_id`, `status`) VALUES ('$user_id', '$date', '$session', '$status')";

        if (mysqli_query($conn, $insert_sql)) {
            // echo "Guide assigned successfully.";

            $guide_id = mysqli_insert_id($conn);

            $result = publishToBeamsInterests(
                ["guide-$guide_id"],    // or ['2'] for testing
                'Guide Assigned',
                'Guide Has Been Assigned',
                "$rootPath/guide/$guide_id",

            );

        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Redirect after the operation
    header("Location: " . $basePath2 . "/guide/assign");
    exit();
}
