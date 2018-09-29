

<?php
$db_host="localhost";
$db_username="root";
$db_password="";

$con = mysqli_connect($db_host,$db_username,$db_password);

if (!$con){
  die("connection falied:" . mysqli_connect_error());
}

$sql = "CREATE DATABASE forum";
if(mysqli_query($con, $sql)){
}

mysqli_select_db($con , "forum");

  $frumpost ="CREATE TABLE IF NOT EXISTS frumpost(
    post_id int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    post_title text(100) NOT NULL,
    category varchar(30) NOT NULL,
    username varchar(15) NOT NULL,
    post_content text(600) NOT NULL,
    post_date date NOT NULL,
    post_img text(100) NOT NULL)";

    if (mysqli_query($con,$frumpost)){


    }

    else{

    	echo "error". mysqli_error($con);

    }
    $frumusers = "CREATE TABLE IF NOT EXISTS frumusers(
      fullname varchar(30) NOT NULL,
      username varchar(40) NOT NULL,
      email   varchar(35) NOT NULL,
      phone_number varchar(15) NOT NULL,
      password varchar(20) NOT NULL,
      dob varchar(20) NOT NULL,
      gender varchar(10) NOT NULL,
      profilefoto varchar(200) NOT NULL,
      user_id int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT)";

      if (mysqli_query($con,$frumusers)){


      }

      else{

      	echo "error". mysqli_error($con);

      }

    $post_replies ="CREATE TABLE IF NOT EXISTS post_replies(
      post_id int(5) NOT NULL,
      cmt_by varchar(200) NOT NULL,
      reply_id int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
      reply_content text(300) NOT NULL
  )";
  if (mysqli_query($con,$post_replies)){}else{
echo "error". mysqli_error($con);}

  $student ="CREATE TABLE IF NOT EXISTS students(
    id int(5) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    fullname varchar(50) NOT NULL,
    matric_no varchar(20) NOT NULL,
    Address varchar(100) NOT NULL,
    gender varchar(20) NOT NULL,
    phone_no varchar(20) NOT NULL,
    school varchar(30) NOT NULL,
    email varchar(60)  NOT  NULL,
    marital_status varchar(10) NOT NULL
)";
if (mysqli_query($con,$student)){


}

else{

echo "error". mysqli_error($con);

}
$post_cat = "CREATE TABLE IF NOT EXISTS post_cat(
  post_id int(5) NOT NULL,
  news text(200) NOT NULL,
  web text(200) NOT NULL,
  gen text(200) NOT NULL,
  tech text(200) NOT NULL,
  cat_id int(5) PRIMARY KEY AUTO_INCREMENT NOT NULL
)";
if (mysqli_query($con,$post_cat)){


}

else{

echo "error". mysqli_error($con);

}

// $db_host="localhost";
// $db_database="newdb";
// $db_username="root";
// $db_password="";
//
// $con = mysqli_connect($db_host,$db_username,$db_password,$db_database);
//
// if (!$con){
//   die("connection falied:" . mysqli_connect_error());
// }

?>
