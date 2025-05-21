<?php


if (isset($_POST['confirminsurance'])) {
    // echo "<script>console.log(" . json_encode($_POST) . ");</script>";
    // echo "<script>console.log(" . json_encode($_FILES) . ");</script>";
    $error = false;



    if (empty($_SESSION['booking']['insurance'])) {
        $error = true;
        // echo "<script>console.log('Error: Insurance data is empty');</script>";

    } else {
        // Loop through each person and check for their insurance data
        foreach ($_SESSION['booking']['people'] as $personNumber => $personData) {
            // Check if the current person has insurance data
            if (!isset($_SESSION['booking']['insurance'][$personNumber]) || empty($_SESSION['booking']['insurance'][$personNumber])) {
                $error = true;
                // echo "<script>console.log('" . "Error: No insurance data for person $personNumber.<br>" . "');</script>";

            }
        }
    }

    if (!$error) {
        if ($_SESSION['booking']['step'] == 3) {
            $_SESSION['booking']['step'] = 4;

        }
        header("Location: " . $basePath2 . "/book/insurance");
        exit();

    }

    // unset($_SESSION['booking']['insurance']);
    // $_SESSION['booking']['insurance'] = [];
    // Loop through the files for each dropzone
    // $count = $_SESSION['booking']['people_count'];
    // for ($i = 1; $i <= $count; $i++) {
    //     // Check if the file is uploaded for each dropzone
    //     if (isset($_FILES['file_' . $i])) {
    //         $file = $_FILES['file_' . $i];
    //         $uploadDir = $basePath . '/assets/uploads/booking/insurance/';  // Set your desired upload directory
    //         $filePath = $uploadDir . basename($file['name']);

    //         // Validate the file (e.g., check size, type)
    //         $maxFileSize = 2 * 1024 * 1024;  // Max file size 2MB
    //         $allowedFileTypes = ['image/jpeg', 'image/png', 'application/pdf'];  // Allowed types

    //         if ($file['size'] > $maxFileSize) {
    //             echo "File is too large!";
    //             continue;
    //         }

    //         if (!in_array($file['type'], $allowedFileTypes)) {
    //             echo "Invalid file type!";
    //             continue;
    //         }

    //         // Move the uploaded file to the desired directory
    //         if (move_uploaded_file($file['tmp_name'], $filePath)) {
    //             echo "File uploaded successfully!";
    //         } else {
    //             echo "File upload failed!";
    //         }
    //     }
    // }
}


if (isset($_POST['upload_temp'])) {
    try {
        // Validate file presence
        if (!isset($_FILES['file'])) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'No file uploaded']);
            exit;
        }

        $file = $_FILES['file'];
        $fileName = basename($file['name']);
        $fileTmpPath = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        // Validate custom fields
        $userId = isset($_POST['user_id']) ? preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['user_id']) : 'Unknown';
        $peopleNumber = isset($_POST['people_number']) ? preg_replace('/[^0-9]/', '', $_POST['people_number']) : '0';

        // Define allowed MIME types
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];

        if (!in_array($fileType, $allowedTypes)) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Invalid file type']);
            exit;
        }

        if ($fileError !== UPLOAD_ERR_OK) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'File upload error', 'error_code' => $fileError]);
            exit;
        }

        // Define folder paths
        $uploadRootDir = 'assets/uploads/booking/insurance/temp/';
        $userFolder = $uploadRootDir . $userId . '/';
        $peopleFolder = $userFolder . 'person_' . $peopleNumber . '/';

        // Create directories if they don't exist
        if (!is_dir($peopleFolder)) {
            mkdir($peopleFolder, 0777, true);
        }

        // Move uploaded file
        $destinationPath = $peopleFolder . $fileName;
        if (!move_uploaded_file($fileTmpPath, $destinationPath)) {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'Failed to move uploaded file']);
            exit;
        }

        // Add to session
        if (!isset($_SESSION['booking']['insurance'])) {
            $_SESSION['booking']['insurance'] = [];
        }

        if (!isset($_SESSION['booking']['insurance'][$peopleNumber])) {
            $_SESSION['booking']['insurance'][$peopleNumber] = [];
        }

        // Get actual MIME type and file size
        $fileMimeType = mime_content_type($destinationPath);
        $fileSizeBytes = filesize($destinationPath);

        $_SESSION['booking']['insurance'][$peopleNumber][] = [
            'file_path' => $destinationPath,
            'file_name' => $fileName,
            'file_size' => $fileSizeBytes,
            'file_type' => $fileMimeType
        ];

        // Return success response
        echo json_encode([
            'status' => 'success',
            'message' => 'File uploaded successfully',
            'user_id' => $userId,
            'people_number' => $peopleNumber,
            'file_path' => $destinationPath,
            'file_name' => $fileName,
            'file_size' => $fileSizeBytes,
            'file_type' => $fileMimeType
        ]);
        exit;
    } catch (Throwable $e) {
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => 'Internal server error',
            'details' => $e->getMessage() // Optional: show in development only
        ]);
        exit;
    }
}



if (isset($_POST['remove_temp'])) {
    // echo "<script>console.log(" . json_encode($_POST) . ");</script>";
    // echo "<script>console.log(" . json_encode($_FILES) . ");</script>";

    $fileToRemove = $_POST['file'];
    $userId = $_POST['user_id'];
    $removeTemp = $_POST['remove_temp']; // Get the 'remove_temp' parameter value
    $peopleNumber = isset($_POST['people_number']) ? $_POST['people_number'] : 'Unknown';

    // Check if the remove_temp flag is true
    if ($removeTemp === 'true') {
        // Check if the file exists in the session for the specified people_number
        if (isset($_SESSION['booking']['insurance'][$peopleNumber])) {
            // Iterate through the list of files to find and remove the file
            foreach ($_SESSION['booking']['insurance'][$peopleNumber] as $index => $file) {
                if ($file['file_name'] === $fileToRemove) {
                    // File found, remove it from the session
                    unset($_SESSION['booking']['insurance'][$peopleNumber]);

                    // Optionally, delete the file from the server if needed
                    $filePath = $file['file_path'];
                    if (file_exists($filePath)) {
                        unlink($filePath); // Remove the file from the server
                    }

                    // Return success response with the file path
                    echo json_encode(['status' => 'success', 'filePath' => $filePath]);
                    exit;
                }
            }

            // If file not found in the session
            echo json_encode(['status' => 'error', 'message' => 'File not found in session']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No files found for this people number']);
        }


    } else {
        echo "Remove temporary flag is not set.";
    }

}