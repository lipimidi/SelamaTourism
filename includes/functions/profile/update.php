<?php
if (isset($_POST['profile_update'])) {
    // Collect form data
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

    // Initialize an array to hold update fields
    $updateFields = [];
    $updateValues = [];

    // Only collect data if the user has provided it
    if (!empty($_POST['name'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $updateFields[] = "name";
        $updateValues[] = "'$name'";
    }

    if (!empty($_POST['ic'])) {
        $ic = mysqli_real_escape_string($conn, $_POST['ic']);
        $updateFields[] = "ic";
        $updateValues[] = "'$ic'";
    }

    if (!empty($_POST['passport'])) {
        $passport = mysqli_real_escape_string($conn, $_POST['passport']);
        $updateFields[] = "passport";
        $updateValues[] = "'$passport'";
    }

    if (!empty($_POST['phone'])) {
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $updateFields[] = "phone";
        $updateValues[] = "'$phone'";
    }

    if (!empty($_POST['address'])) {
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $updateFields[] = "address";
        $updateValues[] = "'$address'";
    }

    // Image upload (if provided)
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Upload Image using the custom upload function
        $uploadResult = uploadFile('image', "assets/uploads/user/$user_id/", ['jpg', 'jpeg', 'png'], 5); // Max size 5MB

        if ($uploadResult['success']) {
            // File uploaded successfully, add to update fields
            $imagePath = $uploadResult['file_path'];
            $updateFields[] = "image";
            $updateValues[] = "'$imagePath'";
            // echo "Image uploaded successfully: " . $imagePath;
        } else {
            // Error with file upload
            // echo "Image upload failed: " . $uploadResult['message'];
            // You can choose to exit or continue with other actions based on your needs.
            exit();
        }
    }

    // If no fields were updated, show a message and exit
    if (empty($updateFields)) {
        // echo "No fields to update.";
        exit();
    }

    // Check if user exists in the database
    $check_sql = "SELECT * FROM user_details WHERE user_id = '$user_id'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // User exists, perform the update
        $updateSql = "UPDATE user_details SET " . implode(", ", array_map(function($field, $value) {
            return "$field = $value"; // Join the column and value with an equal sign
        }, $updateFields, $updateValues)) . " WHERE user_id = '$user_id'";

        if (mysqli_query($conn, $updateSql)) {
            // echo "Profile updated successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // User does not exist, perform an insert
        $insertSql = "INSERT INTO user_details (user_id, " . implode(", ", $updateFields) . ") VALUES ('$user_id', " . implode(", ", $updateValues) . ")";

        if (mysqli_query($conn, $insertSql)) {
            // echo "Profile created successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Redirect after the operation (to avoid resubmission on page refresh)
    header("Location: " . $basePath2 . "/profile");
    exit();
}
 