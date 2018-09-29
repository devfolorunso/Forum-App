<?php require 'dbcon.php';
      require 'session.php';
?>
<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet"  type="text/css"  href="createpost.css">
  <title>CREATIVEDEVS  | Create A Post</title>
</head>

<body>
<div class="header">
<div class="logo">CREATIVEDEVTS | <?php echo  $username;?></div>
<div class="nav">
  <a href="profile.php?user=<?php echo $username;?>">View Profile</a> |
  <a href="home.php?user=<?php  echo $username; ?>">HOME</a>|
  <a href="signout.php"> Sign Out</a>|
</div>

<div class="clearboth"></div>
</div>

<div class="createpost">
  <h3><?php echo  $username;?> , KINDLY FOLLOW OUR RULES</br>AND REGULATIONS WHEN ADDING POST TO THE FORUM</h3>
  <div class="border"></div>
<form method="POST" enctype="multipart/form-data">
  <label>Post Topic:</label>
  <input type="text" name="post_title" placeholder="Add Post Title">
  <br/>
  <label>Post Category:</label>
  <select name="category" class="category">
    <option value="News">News</option>
    <option value="Web-Graphics">Web/graphics</option>
    <option value="General">General</option>
    <option value="Tech-News">Tech News</option>
  </select>
  <br/>
  <input type="file" name="postimgs" id="uploadFile"  value="uploadFile"/>
  <br/>
  <label>Post Content:</label>
  <textarea name="post_content" rows="8" cols="50"></textarea>
  <button type="submit" name="btn"> Create Post</button>
  <?php require 'createpostconfig.php';?>
</form>
</div>
</body>
</html>
