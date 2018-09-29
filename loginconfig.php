<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form

 $myusername = mysqli_real_escape_string($con,$_POST['username']);
  $mypassword = mysqli_real_escape_string($con,$_POST['password']);

  $query = "SELECT * FROM frumusers WHERE username = '$myusername' and password = '$mypassword'";

  $sql = mysqli_query($con,$query);
  $row = mysqli_fetch_array($sql);
  // $myusername = $row['username'];

  $count = mysqli_num_rows($sql);

  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {
     $_SESSION['signed_in'] = $myusername;
     header("location: home.php?username=$myusername");
  } else {
     echo "<font color='#600000'>Your Username or Password is invalid</font>";
  }
}

  ?>
