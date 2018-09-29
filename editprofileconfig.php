<?php
if (isset($_POST['reg'])){
   $fullname = $_POST['fullname'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $phone_number = $_POST['phone_number'];
   $password = $_POST['password'];
   $dob = $_POST['dob'];
   $up = "UPDATE frumusers SET fullname ='$fullname',
   username ='$username', email ='$email',
   phone_number='$phone', password='$password',
   dob ='$dob' where username ='$username' ";

  if (mysqli_query($con,$up)){
  echo  "PROFILE EDITED SUCESSFULLY!!!.";
  } else{
  echo "ERROR!! UNABLE TO EDIT PROFILE, PLS TRY AGAIN" .mysqli_error($con);
  }
}
mysqli_close($con);
?>
