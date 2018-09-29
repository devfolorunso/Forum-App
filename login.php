<?php require 'dbcon.php';?>

<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>Kindly Login To Continue</title>
  <script type="text/javascript">
function validate()
{
  var username = document.login.username.value;
  var password = document.login.password.value;

  if (username == null || username == "")
  {
    alert("username can't be blank");
    return false;
  }
  elseif (password = null || password =="")
  {
    alert("password cant be blank");
    return false;
  }
}
  </script>
</head>
<body>
  <div class="header">
    <div class="logo">CREATIVEDEVS</div>
    <div class="nav">
      <a href="login.php">Login</a>|
      <a href="signup.php"> Sign Up</a>|
      <a href="home.php">POST'S</a>|
    </div>
    <div class="clearboth"></div>
  </div>


<div class="container">
<form name="login" method="POST" onsubmit="return validate();">
      <label>ENTER USERNAME</label>
    <input type="username" name="username" placeholder="USERNAME"/>
    <br/>
    <label>ENTER YOUR PASSWORD</label>
        <input type="Password" name="password" placeholder="Password"/>
        <button type="submit" name="login">Login</button>
</form>
    <?php require 'loginconfig.php';?>
<div class="fmnav">Not Yet A Member?<a href="signup.php">Sign Up</a></div>
</div>
</body>
</html>
