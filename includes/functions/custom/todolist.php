<?php
if (isset($_POST['todolist'])) {
    // Check if there's already a row for this page today

    $titles = [];


    $sql = "SELECT * FROM bookings WHERE status = '1' ";
    $result = $conn->query($sql);

    // If there's no existing row for today, proceed with the bookings query
    if ($result->num_rows >= 0) {

        $titles[] = "Approve Bookings"; // Add the title to the array




    }

    $sql = "SELECT * FROM guides WHERE status = '1' ";
    $result = $conn->query($sql);

    // If there's no existing row for today, proceed with the bookings query
    if ($result->num_rows >= 0) {

        $titles[] = "Assign Tour Guides"; // Add the title to the array




    }

    echo json_encode($titles);


    die();
}

if (isset($_POST['dashboard'])) {
    // Check if there's already a row for this page today
     $cards = [];


    $sql = "SELECT COUNT(*) as total FROM bookings";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc(); // or fetch_row()[0] if you prefer
        $cards["bookings"] = $row['total']; // Store the count in the array
    }


    $sql = "SELECT COUNT(*) as total FROM guides";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc(); // or fetch_row()[0] if you prefer
        $cards["guides"] = $row['total']; // Store the count in the array
    }


    $sql = "SELECT COUNT(*) as total FROM users WHERE role ='3' ";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc(); // or fetch_row()[0] if you prefer
        $cards["users"] = $row['total']; // Store the count in the array
    }


    $sql = "SELECT COUNT(*) as total FROM page_views ";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc(); // or fetch_row()[0] if you prefer
        $cards["page"] = $row['total']; // Store the count in the array
    }

    echo json_encode($cards);


    die();
}