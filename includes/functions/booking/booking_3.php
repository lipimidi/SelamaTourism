<?php


if (isset($_POST['confirminsurance'])) {
    // echo "<script>console.log(" . json_encode($_POST) . ");</script>";
    // echo "<script>console.log(" . json_encode($_FILES) . ");</script>";
    $error = false;



    if (empty($_SESSION['booking']['insurance'])) {
        $error = true;
        echo "<script>console.log('Error: Insurance data is empty');</script>";

    } else {
        // Loop through each person and check for their insurance data
        foreach ($_SESSION['booking']['people'] as $personNumber => $personData) {
            // Check if the current person has insurance data
            if (!isset($_SESSION['booking']['insurance'][$personNumber]) || empty($_SESSION['booking']['insurance'][$personNumber])) {
                $error = true;
                echo "<script>console.log('" . "Error: No insurance data for person $personNumber.<br>" . "');</script>";

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


    $uploadRootDir = 'assets/uploads/booking/insurance/temp/';
    // Check if the directory exists, if not, create it
    if (!file_exists($uploadRootDir)) {
        mkdir($uploadRootDir, 0777, true);
    }

    echo "test5";

    $file = $_FILES['file'];

    // Get file details
    $fileName = basename($file['name']);
    $fileTmpPath = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Access custom parameters from the form data
    $userId = isset($_POST['user_id']) ? $_POST['user_id'] : 'Unknown';
    $peopleNumber = isset($_POST['people_number']) ? $_POST['people_number'] : 'Unknown';

    // Log the custom parameters (optional)
 
    // Define allowed file types
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];
 
    echo in_array($file['type'], $allowedTypes);


    // Check if the file type is allowed
    if (in_array($file['type'], $allowedTypes)) {
        // Check for errors
 
        if ($fileError == 0) {
            // Create a folder structure based on user_id and people_number
            $userFolder = $uploadRootDir . $userId . '/';
            $peopleFolder = $userFolder . 'person_' . $peopleNumber . '/';

            // Check if the directories exist, if not, create them
            if (!file_exists($userFolder)) {
                mkdir($userFolder, 0777, true);  // Create user folder
    echo "test4";
            
            }

            if (!file_exists($peopleFolder)) {
                mkdir($peopleFolder, 0777, true);  // Create people_number folder
    echo "test3";
           
            }

            // Define the destination path
            $destinationPath = $peopleFolder . $fileName;

            // Move the uploaded file to the destination directory
            if (move_uploaded_file($fileTmpPath, $destinationPath)) {
                // Optionally, store information in a database
    echo "test2";

                // Add the file path and other info to the session's 'insurance' array
                if (!isset($_SESSION['booking']['insurance'])) {
                    $_SESSION['booking']['insurance'] = [];
                }

                // Make sure the array for the specific person is set
                if (!isset($_SESSION['booking']['insurance'][$peopleNumber])) {
                    $_SESSION['booking']['insurance'][$peopleNumber] = [];
                }


                // Get file information
                $fileName = basename($destinationPath);  // Get the file name (without path)
                $fileSize = filesize($destinationPath);  // Get the file size in bytes
                $fileType = mime_content_type($destinationPath);  // Get the MIME type of the file

                // Store the file info (path, name, size, type) in the session under the correct person number
                $_SESSION['booking']['insurance'][$peopleNumber][] = [
                    'file_path' => $destinationPath,
                    'file_name' => $fileName,
                    'file_size' => $fileSize,
                    'file_type' => $fileType
                ];

                // Return a success response
                echo json_encode([
                    'status' => 'success',
                    'message' => 'File uploaded successfully',
                    'user_id' => $userId,  // Return the custom parameters as part of the response
                    'people_number' => $peopleNumber,
                    'file_path' => $destinationPath,  // Return the file path for reference
                    'file_name' => $fileName,        // Return the file name
                    'file_size' => $fileSize,        // Return the file size
                    'file_type' => $fileType         // Return the MIME type of the file
                ]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error moving the uploaded file']);
            }
    echo "test1";

        } else {
            echo json_encode(['status' => 'error', 'message' => 'File upload error']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid file type']);
    }

 

}


if (isset($_POST['remove_temp'])) {
    echo "<script>console.log(" . json_encode($_POST) . ");</script>";
    echo "<script>console.log(" . json_encode($_FILES) . ");</script>";

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