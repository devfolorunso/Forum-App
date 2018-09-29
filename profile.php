<?php require 'dbcon.php';
      require 'session.php';
?>
<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet"  type="text/css"  href="aprofile.css">
  <title>CREATIVEDEVS  | <?php echo  $username; ?></title>
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
      <a href="changeprofpic.php?username=<?php echo $username;?>">CHANGE PROFILE PICTURE</a>
      <a href="signout.php?"> Sign Out</a>|
    </div>
  </div>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
  <div class="usersinfo">
  <?php
  echo " <div align='center'><img src='profileimg/" .$row['profilefoto'] ."' . class='profimg'></div> <h2>Hi, " . $fullname. "</h2>";
  echo "<h4> YOUR PROFILE</h4>";
  ?>
  <div class="users">
    <div class="users-right">
      <?php
      echo "<h3><img src='loginico.png' class='log'></h3>";
      echo " <h3> Username:  " .   $username ."</h3>";
      echo "<h3> Email:   " . $email."</h3>";

      ?>
    </div>

    <div class="users-left">
      <?php
      echo "<h3>Phone Number:    " . $phone ."</h3>";
      echo "<h3> Gender:   " . $gender ."</h3>";
      echo "<h3> Date Of Birth:   " . $dob ."</h3>";
      ?>
    </div>
      <div class="clearboth"></div>
      <button><a href="editprofile.php?username=<?php echo $username ?>">EDIT PROFILE</a></button>
    </div>
  </div>
</div>
</body>
</html>
