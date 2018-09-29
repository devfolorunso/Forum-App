<?php require 'dbcon.php';
      require 'session.php';
?>
<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet"  type="text/css"  href="bhome.css">
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
<div class="open" onclick="openNav()"><img src ="menu.png"></div><div class="logo">CREATIVEDEVTS | <?php echo  $username;?></div>
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
      <img src="forest.jpg" class="profimg">
        <h2><?php echo $fullname;?></h2>
        <a href="#">HOME</a>
      <a href="profile.php?username=<?php echo  $username; ?>">View Profile</a>
      <a href=" createpost.php?username=<?php echo  $username; ?>">Edit Profile</a>
      <a href="signout.php?"> Sign Out</a>|
    </div>
  </div>


  <div class="posts"></div>
  <div id="main">
      <?php
    $query ="SELECT * from frumpost where category='web'";
    $sql= mysqli_query($con,$query);
    while ($row =mysqli_fetch_array($sql)) {
      # code.
      ?>
      <table>
      <td>
        <?php echo $row['post_title'];?>
        </td>
      </tr>
    </table>
</div>
<?php
}
?>
<!-- <div class="footer">
  <div class="fleft">
  &Copy 2018 | FOLLYWEB CONCEPTS
  </div>

  <div class="fnav">
    <a href="file:///C:/Users/user/Documents/folorunso/web%20files/portfolio/adesanya.html"> FOLLYWEB</a>
  </div>
<div class="clearboth"></div>
</div> -->
</body>
</html>
