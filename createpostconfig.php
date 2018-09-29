<?php
if (isset($_POST['btn'])){
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];
    $category =$_POST['category'];
    $uploadfile = $_FILES["postimgs"]["tmp_name"];
    $target = "postimg/".basename ($_FILES ['postimgs']['name']);
    $postimgs = $_FILES['postimgs']['name'];
    move_uploaded_file( $uploadfile , $target );
$query= "INSERT INTO frumpost ( post_title , category, username, post_content, post_date, post_img) VALUES
('$post_title ', '$category', '$username', '$post_content', Now(), '$postimgs')";

if(mysqli_query($con, $query)){
  header('location:home.php');

} else{
  echo " Error!!! Post Was Not Created". $query. "<br>". mysqli_error($con);
}

}
mysqli_close($con);
?>
