<?php

if ( isset($_POST['fetch_events'])) {

    echo json_encode($_POST['start']);
    
    // try {
    //     $events = [];
    //     $timeslots = [
    //         ['start_time' => '08:00:00', 'end_time' => '12:00:00', 'label' => 'Morning (8 AM - 12 PM)'],
    //         ['start_time' => '14:00:00', 'end_time' => '18:00:00', 'label' => 'Afternoon (2 PM - 6 PM)']
    //     ];

    //     foreach ($timeslots as $timeslot) {
    //         // Query the total people booked for each timeslot for the current day
    //         $sql = "SELECT SUM(people_booked) AS total_booked
    //                 FROM bookings 
    //                 WHERE booking_date = CURRENT_DATE AND timeslot_id = (SELECT id FROM booking_timeslots WHERE start_time = ? AND end_time = ?)";

    //         $stmt = $conn->prepare($sql);
    //         $stmt->bind_param("ss", $timeslot['start_time'], $timeslot['end_time']);
    //         $stmt->execute();
    //         $stmt->bind_result($total_booked);
    //         $stmt->fetch();
    //         $stmt->close();

    //         // Calculate remaining slots (Maximum 40)
    //         $remaining_slots = 40 - $total_booked;

    //         // Check for available slots (if remaining slots are more than 0)
    //         $color = ($remaining_slots <= 0) ? '#ff0000' : '#28a745'; // Red if no slots available, green if slots are available

    //         // Generate event for FullCalendar
    //         $events[] = [
    //             'title' => $timeslot['label'] . " (" . $remaining_slots . "/40)",
    //             'start' => date('Y-m-d') . ' ' . $timeslot['start_time'],  // Combine current date with start time
    //             'end' => date('Y-m-d') . ' ' . $timeslot['end_time'],    // Combine current date with end time
    //             'color' => $color,
    //             'timeslot_id' => $timeslot['id'], // Store the timeslot ID for booking
    //             'remaining_slots' => $remaining_slots
    //         ];
    //     }

    //     // Return events data as JSON
    //     echo json_encode($events);
    // } catch (Exception $e) {
    //     echo json_encode(["error" => $e->getMessage()]);
    // }
    die();

}