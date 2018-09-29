<?php require 'dbcon.php';?>
<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="regcss.css">

  <title>Kindly SIGN  UP Continue</title>
</head>
<body>
  <div class="header">
    <div class="logo">CREATIVEDEVS</div>
    <div class="nav">
      <a href="login.php">Login</a>|
      <a href="signup.php"> Sign Up</a>|
      <a href=" home.php">POST'S</a>|
    </div>
    <div class="clearboth"></div>
  </div>



    <form method="post" enctype="multipart/form-data">
  <div class="container">
        <h3> WELCOME! KINDLY SIGN UP <br/>TO CONTINUE</h3>
        <div class="border"></div>
      <div class="cont-left">
              <label>ENTER FULLNAME</label>
              <input type="text" name="fullname" placeholder="Enter Fullnname"/>
                <br/>
        <label>ENTER USERNAME</label>
        <input type="text" name="username" placeholder="Enter USERNAME"/>
        <br/>
        <label>ENTER YOUR Email</label>
        <input type="email" name="email" placeholder="Enter Email"/>
          <br/>
        <input type="radio" name="gender" value="Male "class="radiom" checked="checked"/>Male
        <input type="radio" name="gender" value="Female" class="radiof" checked="checked"/>Female
        <input type="file" name="image" id="uploadFile"  value="uploadFile"/>
      </div>
    <div class="cont-right">
          <label>ENTER YOUR Phone Number</label>
          <input type="tel" name="phone_number" placeholder="Enter phone Number"/>
          <br/>
            <label>ENTER YOUR PASSWORD</label>
            <input type="password" name="password" placeholder="Enter Password"/>
            <br/>
            <label>ENTER YOUR DOB</label>
            <input type="date" name="dob"/>
            <br/>
            <button type="reset"> RESET</button>

    </div>
    <button type="submit" name="reg">Sign Up</button>
    <br/>
    <div align="center"><?php require 'signupconfig.php';?></div>
<div class="clearboth"></div>

</div>
</form>
</body>
</html>
