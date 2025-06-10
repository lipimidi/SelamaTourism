<?php

if (isset($_POST['register'])) {
    $errors = array();

    // echo "<script>console.log('test');</script>";

    // Sanitize user inputs and check for empty fields
    if (empty($_POST['username'])) {
        $errors['username'] = "Username required";
    } else {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
    }

    if (empty($_POST['email'])) {
        $errors['email'] = "Email required";
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
    }

    if (empty($_POST['password1'])) {
        $errors['password1'] = "Password required";
    } else {
        $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
    }

    if (empty($_POST['password2'])) {
        $errors['password2'] = "Confirm password required";
    } else {
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
    }

    if (!isset($_POST['agree_terms'])) {
        $errors['agree_terms'] = "You must agree to the terms and conditions";
    }

    $role = 3; 

    // Password match check
    if (!empty($password1) && !empty($password2)) {
        if ($password1 !== $password2) {
            $errors['password1'] = "Passwords do not match";
            $errors['password2'] = "Passwords do not match";
        }
    }

    // Check if username or email already exists in the database
    if (isset($username) && isset($email)) {
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $username) {
                $errors['username'] = "Username already registered";
            }

            if ($user['email'] === $email) {
                $errors['email'] = "Email already registered";
            }
        }
    }

     if (count($errors) == 0) {
         $password_hash = password_hash($password1, PASSWORD_BCRYPT);

        // Insert the new user into the database
        $query = "INSERT INTO users (username, email, password, role) 
                  VALUES ('$username', '$email', '$password_hash', '$role')";
        mysqli_query($conn, $query);


        
    $var = array(
       
         
    );


        // sendEmail($email, "Welcome To  Selama Tourism", 'register_user', $var);


        // // Store user session data
        // $_SESSION['user_details'] = [
        //     'username' => $username,
        //     'email' => $email,
        //     'role' => $role,
        // ];

         header("Location: " . $basePath2 . "/signin");
        exit();
    }
}
 