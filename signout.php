<?php session_start();
// if ($user =$_SESSION['signed_in']){
//   unset($_SESSION['signed_in']);

  if (session_destroy()){
  header("location:login.php");

}
?>


<!-- 
<a href="login.php?">Go To Login</a> -->
