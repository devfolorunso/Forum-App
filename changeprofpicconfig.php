<?php
if(isset($_POST['change'])){
$uploadfile = $_FILES["image"]["tmp_name"];
$target = "profileimg/".basename ($_FILES ['image']['name']);
$image = $_FILES['image']['name'];
move_uploaded_file( $uploadfile , $target );
$change = "UPDATE frumusers SET  profilefoto ='$image' where username ='$username' ";
  if (mysqli_query($con,$change)){
    header("location:profile.php?username=$myusername");
  } else {
    echo "ERROR!! UNABLE TO CHANGE PROFILE PICTURE" .mysqli_error($con);
  }
}

mysqli_close($con);
?>
