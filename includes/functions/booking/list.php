<?php
if (isset($_POST['getlist_user'])) {
  
    // DataTables parameters from POST request
    $start = isset($_POST['start']) ? (int) $_POST['start'] : 0;   // Paging start
    $length = isset($_POST['length']) ? (int) $_POST['length'] : 10;  // Number of rows per page
    $search = isset($_POST['search']['value']) ? $_POST['search']['value'] : ''; // Global search value
    $order = isset($_POST['order'][0]['column']) ? (int) $_POST['order'][0]['column'] : 0; // Sorting column index
    $order_direction = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'desc'; // Sorting direction
    $table_name = "bookings";

    // Column names for sorting
    $columns = ['id', 'booking_date', 'timeslot_id', 'people_booked', 'created_at']; // Modify according to your table structure

    // Escape search string to prevent SQL injection
    $search = $conn->real_escape_string($search);

    // Build the SQL query
    $search_condition = "";
    if ($search) {
        $search_condition = "WHERE id LIKE '%$search%' 
                             OR booking_date LIKE '%$search%' 
                             OR timeslot_id LIKE '%$search%' 
                             OR people_booked LIKE '%$search%' 
                             OR created_at LIKE '%$search%'";
    }

    // Build the order by clause
    $order_by = "ORDER BY " . $columns[$order] . " " . $order_direction;

    // Paginate the result
    $sql = "SELECT * FROM $table_name $search_condition $order_by LIMIT $start, $length";
    $result = $conn->query($sql);

    // Fetch the data and build the output array
    $data = [];
    while ($row = $result->fetch_assoc()) {
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
        'data' => $data // Data rows to be displayed
    ]);

    exit();
}


if (isset($_POST['getlist_admin'])) {
  
    // DataTables parameters from POST request
    $start = isset($_POST['start']) ? (int) $_POST['start'] : 0;   // Paging start
    $length = isset($_POST['length']) ? (int) $_POST['length'] : 10;  // Number of rows per page
    $search = isset($_POST['search']) ? $_POST['search'] : ''; // Global search value
    $order = isset($_POST['order'][0]['column']) ? (int) $_POST['order'][0]['column'] : 0; // Sorting column index
    $order_direction = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'desc'; // Sorting direction
    $table_name = "bookings";

    // Column names for sorting
    $columns = ['id', 'booking_date', 'timeslot_id', 'people_booked', 'created_at']; // Modify according to your table structure

    // Escape search string to prevent SQL injection
    // $search = $conn->real_escape_string($search);

    // Build the SQL query
    $search_condition = "";
    if ($search) {
        $search_condition = "WHERE id LIKE '%$search%' 
                             OR booking_date LIKE '%$search%' 
                             OR timeslot_id LIKE '%$search%' 
                             OR people_booked LIKE '%$search%' 
                             OR created_at LIKE '%$search%'";
    }

    // Build the order by clause
    $order_by = "ORDER BY " . $columns[$order] . " " . $order_direction;

    // Paginate the result
    $sql = "SELECT * FROM $table_name $search_condition $order_by LIMIT $start, $length";
    $result = $conn->query($sql);

    // Fetch the data and build the output array
    $data = [];
    while ($row = $result->fetch_assoc()) {
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
        'data' => $data ,// Data rows to be displayed
        'POST' => $search,

    ]);

    exit();
}
 
