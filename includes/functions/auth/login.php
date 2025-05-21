<?php

if (isset($_POST['login'])) {
    $errors = array();

    // echo "<script>console.log('test');</script>";

    $login = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];  
    
    $query = "SELECT a.id, a.username, a.email, a.role, a.password,
              b.name, b.ic, b.image, b.passport, b.phone, b.address
              FROM users a 
              LEFT JOIN user_details b ON b.user_id = a.id
              WHERE email='$login'";
    
    $results = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($results) == 1) {
        $user = mysqli_fetch_assoc($results);
        
        if (password_verify($password, $user['password'])) {
             unset($user['password']);  
            $_SESSION['user_details'] = $user;
            header("Location: " . $basePath2 . "/dashboard");
            exit();
        } else {
            $errors['login'] = "Wrong password";
        }
    } else {
        $errors['login'] = "User not found";
    }
    

}