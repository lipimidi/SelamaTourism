<?php

require 'settings.php';

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();



 require('database.php') ;

 

 include('functions/booking_1.php');
 include('functions/booking_2.php');
 include('functions/booking_3.php');