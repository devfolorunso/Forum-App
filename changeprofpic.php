<?php require 'dbcon.php';
require 'session.php';
?>
<!DOCTYPE>
<html>
<head>
  <title>CREATIVEDEVS  | <?php echo  $username; ?></title>
  <link rel="stylesheet"  type="text/css"  href="change.css">
<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
</script>
</head>
<body>
  <div class="header">
    <div class="open" onclick="openNav()"><img src ="menu.png"></div>
  <div class="logo">Hi!! <?php echo  $username;?></div>
  <div class="nav">
    CATEGORIES:<a href="cat.php?user=<?php echo $username;?>">NEWS</a>|
    <a href="cat.php?user=<?php echo $username;?>">WEB/GRAPHICS</a>|
    <a href="cat.php?user=<?php echo $username;?>">GENERAL</a>|
    <a href="cat.php?user=<?php echo $username;?>">TECH UPDATES</a>|
    <a href="createpost.php?user=<?php echo $username;?>">CREATE POST</a> |
  </div>

  <div class="clearboth"></div>
  </div>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php echo " <div align='center'><img src='profileimg/" .$row['profilefoto'] ."' . class='profimg'></div>";?>
        <h2><?php echo $fullname;?></h2>
        <a href="home.php?username=<?php echo $username;?>">HOME</a>
      <a href="profile.php?username=<?php echo  $username; ?>">View Profile</a>
      <a href="home.php?username=<?php echo  $username; ?>">Vew Recent Posts</a>
      <a href="signout.php?"> Sign Out</a>|
    </div>
  </div>


      <div id="main">
             <form method="POST" enctype="multipart/form-data">
           <div class="container">
  <input type="file" name="image" id="uploadFile"  value="uploadFile"/>
  <button type="submit" name="change">CHANGE</button>
    <?php require 'changeprofpicconfig.php';?>
    </form>
</div>
</div>
</body>
</html>
