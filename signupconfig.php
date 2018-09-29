<?php
if (isset($_POST['reg'])){
   $fullname = $_POST['fullname'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $phone_number = $_POST['phone_number'];
   $password = $_POST['password'];
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $uploadfile = $_FILES["image"]["tmp_name"];
   $target = "profileimg/".basename ($_FILES ['image']['name']);
   $image = $_FILES['image']['name'];
   move_uploaded_file( $uploadfile , $target );
 $query = "INSERT INTO frumusers (fullname, username, email, phone_number, password, dob, gender , profilefoto)
 VALUES ('$fullname', '$username', '$email', '$phone_number', '$password', '$dob', '$gender', '$image' )";
 if (mysqli_query($con, $query)){
   echo "<font color='#fff'>You Have successfully Signed Up Kindly <a href='login.php'>Sign In</a> To Continue</font>";

 }
 else{
   echo "<font color='#660000'>Error!!! NOT REGISTERED</font> " . mysqli_error($con);
 }
}
mysqli_close($con);
?>
