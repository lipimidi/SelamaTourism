<?php


$is_local = ($_SERVER['HTTP_HOST'] === 'localhost');

// Set the correct base path
$basePath = $is_local ? 'SelamaTourism' : ''; // Local subfolder, empty for production
$basePath2 = $is_local ? '/SelamaTourism' : ''; // Local subfolder with slash, empty for production
 
$rootPath = $is_local ? '/SelamaTourism' : '' ;
$testPath ='https://localhost/SelamaTourism'; 
date_default_timezone_set('Asia/Kuala_Lumpur');
