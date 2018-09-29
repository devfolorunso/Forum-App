<?php
   include('dbcon.php');
   session_start();

   $user_check = $_SESSION['signed_in'];

   $ses_sql = mysqli_query($con,"SELECT * FROM frumusers where username = '$user_check' ");

   $row = mysqli_fetch_array ($ses_sql,MYSQLI_ASSOC);

    $username = $row['username'];
    $fullname = $row['fullname'];
    $email = $row['email'];
    $phone =  $row['phone_number'];
    $password = $row['password'];
    $gender = $row['gender'];
    $dob = $row['dob'];

   if(!isset($_SESSION['signed_in'])){
      header("location:login.php");
   }
   ?>
