<?php

require 'settings.php';

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();



 require('database.php') ;

 

 include('functions/booking/booking_1.php');
 include('functions/booking/booking_2.php');
 include('functions/booking/booking_3.php');
 include('functions/booking/booking_4.php');

 include('functions/booking/list.php');
 include('functions/booking/auth_book.php');

 include('functions/staff/list.php');
 include('functions/staff/add.php');


 include('functions/auth/login.php');
 include('functions/auth/register.php');

 include_once('functions/email/email.php');

 
 include_once('functions/routes/admin.php');
 include_once('functions/routes/guide.php');
 include_once('functions/routes/user.php');
 include_once('functions/routes/public.php');

