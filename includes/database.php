<?php


$conn = mysqli_connect($_ENV['host'], $_ENV['user'], $_ENV['pass'], 'selama');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
