<?php
if (isset($_POST['blogs_add_new'])) {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $filename = basename($_FILES['imagemain']["name"]);

    // Sanitize inputs to prevent XSS (optional, but recommended)
    $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');

    // Directly build the SQL query (DO NOT use this approach in production!)
    $sql = "INSERT INTO blog (title, content,main_pic) VALUES ('$title', '$content','$filename')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {

        $blog_id = mysqli_insert_id($conn);

        $result = uploadFile('imagemain', 'assets/uploads/blogs/' . $blog_id . '/');

        echo "Content saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // header("Location: " . $basePath2 . "/blogs" . "/list");
    exit();



}
