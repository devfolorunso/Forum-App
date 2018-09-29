<?php require 'dbcon.php';
      require 'session.php';
?>
<!DOCTYPE>
<html>
<body>
  <head>
    <link rel="stylesheet"  type="text/css"  href="readposts.css">
    <title>CREATIVEDEVS  | <?php echo  $username; ?></title>
  </head>

  <body>
  <div class="header">

    <div class="logo">CREATIVEDEVTS | <?php echo  $username;?></div>
    <div class="nav">
      <a href="home.php?username=<?php echo $username;?>">HOME</a> |
      <a href="profile.php?username=<?php echo $username;?>">View Profile</a> |
      <a href=" createpost.php?username=<?php echo $username;?>">Create Post</a>|
      <a href="signout.php?"> Sign Out</a>|
          </div>

  <div class="clearboth"></div>
  </div>


<?php
  if (isset($_GET['post_id'])){
  $post_id=$_GET['post_id'];

  $query="SELECT * from frumpost where post_id= '$post_id' ";

  $sql = mysqli_query($con, $query);

  $row = mysqli_fetch_array($sql);
  }
?>
<div class="post">
  <h2 class="tit">Post:<?php echo $row ['post_title']; ?></h2>
  <h3 class="usr">Posted By: <?php echo $row ['username']; ?></h3>
  <h3 class="usr">Category: <?php echo $row ['category']; ?></h3>
  <h4 class="dat">Date: <?php echo $row ['post_date']; ?></h4>
</div>

<table>
  <tr>
    <td>
      <?php echo "<div align='center'><img src='postimg/" .$row['post_img'] ."'></div>";?>
    <h3><?php echo $row ['post_content']; ?></h3>
    </td>
  </tr>
</table>


<!-- COMMENT AREA-->
<div class="cmt"><h2>Comments</h2></div>
<table>

  <!-- FETCHING COMMENTS FROM DATABASE -->
  <?php
    $query= "SELECT * FROM post_replies where post_id = '$post_id' ";

    $sql = mysqli_query($con, $query);

    while($row = mysqli_fetch_array($sql)){

  ?>
  <!-- FETCHING COMMENTS FROM DATABASE STOPS HERE!!-->


  <tr>
    <td>
    <h4><a href="profile.php?username=<?php echo $row['cmt_by'];?>"><?php echo $row ['cmt_by'];?></a></h4><h3><?php echo $row['reply_content'];?></h3>
    <?php
  }
  ?>
    </td>
  </tr>

    <tr>
      <td>
        <form method="POST">
          <textarea name="reply_content"></textarea>
          <br/>
        <button type="submit" name="cmtbox">Comment</button>
      </td>
    </tr>

    <?php
    if (isset($_POST['cmtbox'])){

        $post_id=$_GET['post_id'];
        $reply_content=$_POST['reply_content'];

      $query= "INSERT INTO post_replies ( post_id, cmt_by, reply_content) VALUES ('$post_id', '$username', '$reply_content') ";

      if (mysqli_query($con, $query)){
        header("location:readpost.php?post_id=$post_id");
      } else{
        echo " Error!!! Post Was Not Created". $query. "<br>". mysqli_error($con);
      }

    }
    ?>
  </form>
</table>
</body>
</html>
