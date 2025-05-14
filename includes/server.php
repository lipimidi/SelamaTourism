<?php

require 'settings.php';

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();



 require('database.php') ;
 include_once('functions/notification/pusher.php');

 //email
 
 include_once('functions/email/email.php');
 include_once('functions/file/delete.php');
 include_once('functions/file/upload.php');

  //routes
 
  include_once('functions/routes/admin.php');
  include_once('functions/routes/guide.php');
  include_once('functions/routes/user.php');
  include_once('functions/routes/general.php');
 
  //status

  include_once('functions/status/booking.php');
  include_once('functions/status/hiking.php');
  include_once('functions/status/guide.php');
 
 

 
//booking
 include('functions/booking/booking_1.php');
 include('functions/booking/booking_2.php');
 include('functions/booking/booking_3.php');
 include('functions/booking/booking_4.php');

 include('functions/booking/list.php');
 //booking_admin
 include('functions/booking/auth_book.php');

 //admin

 include('functions/staff/list.php');
 include('functions/staff/add.php');
 include('functions/guide/assign.php');
 include('functions/blogs/add.php');
 include('functions/blogs/list.php');
 include('functions/blogs/edit.php');

 //guide

 include('functions/guide/list.php');

//auth

 include('functions/auth/login.php');
 include('functions/auth/register.php');


 //profile
 include('functions/profile/update.php');
