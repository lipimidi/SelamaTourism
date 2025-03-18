<?php


if (isset($_POST['confirmbooking'])) {
    echo "<script>console.log(" . json_encode($_POST) . ");</script>";
    // echo "<script>console.log(" . json_encode($_FILES) . ");</script>";
    $error = false;




    $date = $_SESSION['booking']['date'];
    $people_count = $_SESSION['booking']['people_count'];
    $session = $_SESSION['booking']['session'];
    $user_id = $_SESSION['user_details']['id'];


    $sql = "INSERT INTO bookings (`user_id`, `booking_date`, `timeslot_id`, `people_booked`) VALUES ( '$user_id', '$date', '$session', '$people_count')";


    if (mysqli_query($conn, $sql)) {
        $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }





    for ($i = 1; $i <= $people_count; $i++) {
        // Collect the form data for each person and store it in the session

        

        $name = $_SESSION['booking']['people'][$i]['name'];
        $ic = $_SESSION['booking']['people'][$i]['ic'];
        $phone = $_SESSION['booking']['people'][$i]['phone'];
        $address = $_SESSION['booking']['people'][$i]['address'];
        $email = $_SESSION['booking']['people'][$i]['email'];
        $filepath = $_SESSION['booking']['insurance'][$i][0]['file_path'];
        $filename = $_SESSION['booking']['insurance'][$i][0]['file_name'];

        $uploadRootDir = 'assets/uploads/booking/insurance/';
        $uploadRootDir2 = 'assets/uploads/booking/insurance/temp/';

        // Check if the directory exists, if not, create it
        if (!file_exists($uploadRootDir)) {
            mkdir($uploadRootDir, 0777, true);
        }


        $userFolder = $uploadRootDir . $booking_id . '/';
        $peopleFolder = $userFolder . 'person_' . $i . '/';


        if (!file_exists($userFolder)) {
            mkdir($userFolder, 0777, true);  // Create user folder
        }

        if (!file_exists($peopleFolder)) {
            mkdir($peopleFolder, 0777, true);  // Create people_number folder
        }

        $destinationPath = $peopleFolder . $filename;


        if (file_exists($filepath)) {
            // Attempt to move the file
            if (rename($filepath, $destinationPath)) {
                echo "<script>console.log('File moved successfully');</script>";





            } else {
                echo "<script>console.log('Error moving file');</script>";
            }
        } else {
            echo "<script>console.log('Source file does not exist');</script>";
        }




        $sql = "INSERT INTO booking_details (`booking_id`, `name`, `ic`, `phone`, `address`, `email`, `file`) 
                    VALUES ( '$booking_id', '$name', '$ic', '$phone', '$address', '$email', '$filename' )";

        if (mysqli_query($conn, $sql)) {






        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    deleteDirectory($uploadRootDir2 . $user_id);
    unset($_SESSION['booking']);
    header("Location: " . $basePath2 . "/book" . "/" . $booking_id);
    exit();


}
