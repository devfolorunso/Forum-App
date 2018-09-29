<?php require 'dbcon.php';
      require 'session.php';
 ?>
 <!DOCTYPE>
 <html>
 <head>
   <link rel="stylesheet"  type="text/css"  href="editprofile.css">
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
         <a href="changeprofpic.php?username=<?php echo $username;?>">CHANGE PROFILE PICTURE</a>
       <a href="profile.php?username=<?php echo  $username; ?>">View Profile</a>
       <a href="home.php?username=<?php echo  $username; ?>">Vew Recent Posts</a>
       <a href="signout.php?"> Sign Out</a>|
     </div>
   </div>




   <div id="main">
          <form method="POST">
        <div class="container">
              <h3> <?php echo $fullname;?> Enter New Profile Details</h3>
              <div class="border"></div>
            <div class="cont-left">
                    <label>NEW Fullname</label>
                    <input type="text" name="fullname" value="<?php echo $fullname;?>"/>
                      <br/>
              <label>NEW  Username</label>
              <input type="text" name="username" value="<?php echo $username;?>"/>
              <br/>
              <label>NEW Email</label>
              <input type="email" name="email" value="<?php echo $email;?>"/>
              <button type="reset"> RESET</button>
              <br/>
            </div>
          <div class="cont-right">
                <label> NEW Phone Number</label>
                <input type="tel" name="phone_number" value="<?php echo $phone;?>"/>
                <br/>
                  <label>NEW PASSWORD</label>
                  <input type="password" name="password" value="<?php echo $password;?>"/>
                  <br/>
                  <label>NEW DATE OF BIRTH</label>
                  <input type="date" name="dob"/>
                  <br/>
                    <font color="red">*CLEARS ALL FIELDS</font>
                  <button type="submit" name="edit">DONE</button>

          </div>

      <div class="clearboth"></div>
    <?php require 'editprofileconfig.php';?>

      </div>

      </form>

</div>
</body>
</html>
