<?php
if (isset($_POST['blogs_edit'])) {
    $id = $_POST['id'] ?? '';
    $title = htmlspecialchars($_POST['title'] ?? '', ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'] ?? '', ENT_QUOTES, 'UTF-8');

    // Prepare the image path (based on ID or use blog_id if needed)
    $uploadDir = 'assets/uploads/blogs/' . $id . '/';
    $newFileUploaded = isset($_FILES['imagemain']) && $_FILES['imagemain']['error'] === UPLOAD_ERR_OK;
    $removeImage = isset($_POST['remove_image']) && $_POST['remove_image'] === '1';

    // Get current image filename from DB (if needed)
    $currentImage = ''; // You'll need a SELECT query here if you're storing it
    $getImageQuery = "SELECT main_pic FROM blog WHERE id = '$id'";
    $result = $conn->query($getImageQuery);
    if ($result && $row = $result->fetch_assoc()) {
        $currentImage = $row['main_pic'];
    }

    // If image is to be removed or replaced, delete the old file
    if (($removeImage || $newFileUploaded) && !empty($currentImage)) {
        $existingPath = $uploadDir . $currentImage;
        if (file_exists($existingPath)) {
            unlink($existingPath);
        }
    }

    // If a new image is uploaded
    $filename = $currentImage; // default to existing
    if ($newFileUploaded) {
        $filename = basename($_FILES['imagemain']['name']);
        uploadFile('imagemain', $uploadDir); // Your custom upload function
    } elseif ($removeImage) {
        $filename = ''; // Clear filename in DB
    }

    // Build SQL (use prepared statements in production)
    $sql = "UPDATE blog SET title = '$title', content = '$content', main_pic = '$filename' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: " . $basePath2 . "/blogs/list");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

