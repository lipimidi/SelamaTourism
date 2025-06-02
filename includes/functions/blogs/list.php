<?php

if (isset($_POST['blogs_getlist'])) {

    // DataTables parameters from POST request
    $start = isset($_POST['start']) ? (int) $_POST['start'] : 0;   // Paging start
    $length = isset($_POST['length']) ? (int) $_POST['length'] : 10;  // Number of rows per page
    $search = isset($_POST['search']) ? $_POST['search'] : ''; // Global search value
    $order = isset($_POST['order'][0]['column']) ? (int) $_POST['order'][0]['column'] : 0; // Sorting column index
    $order_direction = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'desc'; // Sorting direction
    $table_name = "blog";  // Change table name to 'blog'
    
    // Column names for sorting (adapt these columns to the blog table)
    $columns = ['id', 'title', 'content', 'created_at', 'updated_at'];  // Modify according to blog table structure
    $columns_str = implode(', ', $columns);

    // Escape search string to prevent SQL injection (optional: using prepared statements would be better)
    // $search = $conn->real_escape_string($search);  // Ensure this is done for production

    // Build the SQL query with filtering and searching
    $search_condition = " WHERE 1=1 ";
    if ($search) {
        $search_condition .= " AND (
                                blog.id LIKE '%$search%' 
                                OR blog.title LIKE '%$search%' 
                                OR blog.content LIKE '%$search%' 
                            )";
    }

    // Build the order by clause
    $order_by = " ORDER BY " . $columns[$order] . " " . $order_direction;

    // Paginate the result
    $sql = "SELECT blog.id, blog.title, blog.content, blog.created_at, blog.updated_at
            FROM $table_name AS blog
            $search_condition 
            $order_by LIMIT $start, $length";

    // Execute the query
    $result = $conn->query($sql);

    // Fetch the data and build the output array
    $data = [];
    while ($row = $result->fetch_assoc()) {

   $date = new DateTime($row['updated_at']);  // Replace 'datetime' with the correct column name
        $row['updated_at'] = $date->format('d/m/Y g:i A');  // Format: 23/07/2025 8:30PM

        $date = new DateTime($row['created_at']);  // Replace 'datetime' with the correct column name
        $row['created_at'] = $date->format('d/m/Y g:i A');  // Format: 23/07/2025 8:30PM


        $row['title']= html_entity_decode($row['title']);
        $row['title']= trim($plainText = strip_tags($row['title']));

        $data[] = $row;
        
    }

    // Get the total number of records after filtering (for pagination)
    $sql_filtered_total = "SELECT COUNT(*) AS total 
                           FROM $table_name AS blog
                           $search_condition";
    $result_filtered_total = $conn->query($sql_filtered_total);
    $row_filtered_total = $result_filtered_total->fetch_assoc();
    $filtered_records = $row_filtered_total['total'];

    // Get the total number of records without filtering (for pagination)
    $sql_total = "SELECT COUNT(*) AS total 
                  FROM $table_name AS blog";
    $result_total = $conn->query($sql_total);
    $row_total = $result_total->fetch_assoc();
    $total_records = $row_total['total'];

    // Output the data in DataTables format
    echo json_encode([
        'draw' => isset($_POST['draw']) ? (int) $_POST['draw'] : 1,  // Draw counter for DataTables
        'recordsTotal' => $total_records, // Total records in the database (unfiltered)
        'recordsFiltered' => $filtered_records, // Total records after search filter
        'data' => $data, // Data rows to be displayed
        'POST' => $search,
    ]);

    exit();
}
