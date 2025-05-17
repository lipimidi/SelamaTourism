<?php


if (isset($_POST['getlist_people_guide'])) {

    // DataTables parameters from POST request
    $start = isset($_POST['start']) ? (int) $_POST['start'] : 0;   // Paging start
    $length = isset($_POST['length']) ? (int) $_POST['length'] : 10;  // Number of rows per page
    $search = isset($_POST['search']) ? $_POST['search'] : ''; // Global search value
    $order = isset($_POST['order'][0]['column']) ? (int) $_POST['order'][0]['column'] : 0; // Sorting column index
    $order_direction = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'desc'; // Sorting direction
    $table_name = "guide_details";
    $user_id = isset($_POST['user_id']) ? (int) $_POST['user_id'] : null; // Ensure you get the user_id

    // Column names for sorting
    $columns = ['booking_id', 'name', 'ic', 'phone', 'address', 'email', 'status', 'id']; // Modify according to your table structure

    // Escape search string to prevent SQL injection
    // $search = $conn->real_escape_string($search);

    // Build the SQL query
    $search_condition = "WHERE 1=1"; // Default condition to simplify appending conditions

    // If there's a search value, add search conditions for the relevant fields
    if ($search) {
        $search_condition .= " AND (booking_id LIKE '%$search%' 
                                 OR name LIKE '%$search%' 
                                 OR ic LIKE '%$search%' 
                                 OR phone LIKE '%$search%' 
                                 OR email LIKE '%$search%' 
                                  OR address LIKE '%$search%')";
    }

    // Ensure that the user_id condition is added at the end
    // if ($user_id) {
    //     $search_condition .= " AND user_id = '$user_id'";
    // }


    // Build the order by clause
    $order_by = "ORDER BY " . $columns[$order] . " " . $order_direction;

    // Paginate the result
    $sql = "SELECT * FROM $table_name $search_condition $order_by LIMIT $start, $length";
    $result = $conn->query($sql);

    // Fetch the data and build the output array
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $row['status2'] = getHikingStatuses($row['status']);
        $data[] = $row;
    }

    // Get the total number of records after filtering (for pagination)
    $sql_filtered_total = "SELECT COUNT(*) AS total FROM $table_name $search_condition";
    $result_filtered_total = $conn->query($sql_filtered_total);
    $row_filtered_total = $result_filtered_total->fetch_assoc();
    $filtered_records = $row_filtered_total['total'];

    // Get the total number of records without filtering (for pagination)
    $sql_total = "SELECT COUNT(*) AS total FROM $table_name";
    $result_total = $conn->query($sql_total);
    $row_total = $result_total->fetch_assoc();
    $total_records = $row_total['total'];

    // Output the data in DataTables format
    echo json_encode([
        'draw' => isset($_POST['draw']) ? (int) $_POST['draw'] : 1,  // Draw counter for DataTables
        'recordsTotal' => $total_records, // Total records in the database (unfiltered)
        'recordsFiltered' => $filtered_records, // Total records after search filter
        'data' => $data,// Data rows to be displayed
        'POST' => $search,

    ]);

    exit();
}







if (isset($_POST['people_change_status'])) {


    $id = $_POST['id'];
    $guide_id = $_POST['guide_id'];
    $status = $_POST['status'];


    $sql = "UPDATE guide_details SET status = '$status'  WHERE id ='$id' ";

    // $statusArray = [
//guide
    //     'not yet',//0
    //     'assigned',//1
    //     'ongoing',//2
    //     'finished',//3
    //     'cancelled',//4
    //     'delayed',//5
    //     'emergency',//6
    // ];

    //     $statusArray = [
//hiking
    //     'not yet',  //0
    //     'ongoing', //1
    //     'finished',//2
    //     'cancelled',//3
    //     'delayed',//4
    //     'emergency',//5
    // ];


    if ($status == '5') {
        $sql2 = "UPDATE guide SET status = '6'  WHERE id ='$guide_id' ";
        mysqli_query($conn, $sql2);


        
        $result = publishToBeamsInterests(
            [(string) $guide_id],    // or ['2'] for testing
            'Emergency',
            'This is not a drill',
            "$rootPath/guide/$guide_id",

        );

    }
  
 



    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
        echo "done";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // header("Location: " . $basePath2 . "/book". "/" . $id );
    die();


}


if (isset($_POST['people_change_status_2'])) {


    $booking_id = $_POST['booking_id'];
    $status = $_POST['status'];


    $sql = "UPDATE guide_details SET status = '$status'  WHERE booking_id ='$id' ";



 



    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
        echo "done";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // header("Location: " . $basePath2 . "/book". "/" . $id );

    die();
}






if (isset($_POST['SaveGuideStatus'])) {


    $id = $_POST['guide_id'];
    $status = $_POST['status_num_guide'];
    $date = $_POST['date'];
    $timeslot_id = $_POST['timeslot_id'];

    // echo $status;

    $sql = "UPDATE guides SET status = '$status'  WHERE id ='$id' ";

    // // Define the status array
    // $statusArray = [
    //     '',
    //     '',
    //     'not yet',
    //     'ongoing',
    //     'finished',
    //     'cancelled',
    //     'delayed',
    //     '',
    //     'emergency',
    // ];




    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
        // echo "done";


        if ($status == '4') {
            $sql2 = "UPDATE booking SET status = '$status'  WHERE booking_date ='$date' AND  timeslot_id ='$session_id' AND ( status != '5' AND status != '7' AND status != '8')  ";
            mysqli_query($conn, $sql2);

        }


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: " . $basePath2 . "/guide" . "/" . $id);


}




if (isset($_POST['getlist_guide_user'])) {

    // DataTables parameters from POST request
    $start = isset($_POST['start']) ? (int) $_POST['start'] : 0;   // Paging start
    $length = isset($_POST['length']) ? (int) $_POST['length'] : 10;  // Number of rows per page
    $search = isset($_POST['search']) ? $_POST['search'] : ''; // Global search value
    $order = isset($_POST['order'][0]['column']) ? (int) $_POST['order'][0]['column'] : 0; // Sorting column index
    $order_direction = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'desc'; // Sorting direction
    $table_name = "guides";
    $user_id = isset($_POST['user_id']) ? (int) $_POST['user_id'] : null; // Ensure you get the user_id

    // Column names for sorting
    $columns = ['id', 'date', 'timeslot_id', 'user_id', 'created_at']; // Modify according to your table structure

    // Escape search string to prevent SQL injection
    // $search = $conn->real_escape_string($search);

    // Build the SQL query
    $search_condition = "WHERE 1=1"; // Default condition to simplify appending conditions

    // If there's a search value, add search conditions for the relevant fields
    if ($search) {
        $search_condition .= " AND (id LIKE '%$search%' 
                                 OR name LIKE '%$search%' 
                                 OR ic LIKE '%$search%' 
                                 OR phone LIKE '%$search%' 
                                 OR email LIKE '%$search%' 
                                  OR address LIKE '%$search%')";
    }

    // Ensure that the user_id condition is added at the end
    // if ($user_id) {
    //     $search_condition .= " AND user_id = '$user_id'";
    // }


    // Build the order by clause
    $order_by = "ORDER BY " . $columns[$order] . " " . $order_direction;

    // Paginate the result
    $sql = "SELECT * FROM $table_name $search_condition $order_by LIMIT $start, $length";
    $result = $conn->query($sql);

    // Fetch the data and build the output array
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $row['status2'] = getHikingStatuses($row['status']);
        $data[] = $row;
    }

    // Get the total number of records after filtering (for pagination)
    $sql_filtered_total = "SELECT COUNT(*) AS total FROM $table_name $search_condition";
    $result_filtered_total = $conn->query($sql_filtered_total);
    $row_filtered_total = $result_filtered_total->fetch_assoc();
    $filtered_records = $row_filtered_total['total'];

    // Get the total number of records without filtering (for pagination)
    $sql_total = "SELECT COUNT(*) AS total FROM $table_name";
    $result_total = $conn->query($sql_total);
    $row_total = $result_total->fetch_assoc();
    $total_records = $row_total['total'];

    // Output the data in DataTables format
    echo json_encode([
        'draw' => isset($_POST['draw']) ? (int) $_POST['draw'] : 1,  // Draw counter for DataTables
        'recordsTotal' => $total_records, // Total records in the database (unfiltered)
        'recordsFiltered' => $filtered_records, // Total records after search filter
        'data' => $data,// Data rows to be displayed
        'POST' => $search,

    ]);

    exit();
}