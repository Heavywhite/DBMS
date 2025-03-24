<?php

include_once "connect_db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BIGb online shopping</title><link rel="stylesheet" href="login.style.css">
</head>
<body>
  <!--<header>
    <div class="hea"> 
       <img src="logo.svg" width="350px" height="150px" > 
    </div> 
   </header>-->

  <div class="hero">
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>
      </div>
      <form id="Login" class="input-group" action="process_login.php" method="POST">
        <input id="email" type="email" name="email" class="input-field"  placeholder="Enter email" method="POST" required>
        <input id="password" type="password" name="password" class="input-field" placeholder="Enter password"  required>
        <input type="checkbox" class="check-box"><span>Remember Me</span>
        <button type="submit" class="submit-btn">Log in</button>
      </form>
      <form id="register" class="input-group" action="register.php" method="POST">
        <input id="username" type="text" name="username" class="input-field" placeholder="Enter name"  required>
        <input id="email" name="email" type="email" class="input-field" placeholder="Enter email"  required>
        <input id="password" type="password" name="password" class="input-field" placeholder="Enter password" required>
        <input id="confrim_password" type="password" name="confrim_password" class="input-field" placeholder="Confrim password" required>
        <input type="checkbox" class="check-box" required><span>I agree to the <a href="#" class="link">terms and policies</a> </span>
        <button type="submit" class="submit-btn">Register</button>
      </form>
      
    </div>
  </div><br><br>
  
 
  
<script>
  var x = document.getElementById("Login");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");
    function register(){
      x.style.left = "-400px";
      y.style.left = "50px";
      z.style.left = "110px";
    }
    function login(){
      x.style.left = "50px";
      y.style.left = "450px";
      z.style.left = "0px";
    }

</script>


</body>
</html>