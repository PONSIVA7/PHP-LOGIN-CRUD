<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2> ADD USERS</h2>
<hr/>
<form action="register.php" method="POST" autocomplete="off">
  <div class="container">
	<input type="text" placeholder="First name" name="firstname" required>
    <input type="text" placeholder="Middle name" name="middlename" >
    <input type="text" placeholder="Last name" name="lastname" required>
  	<label>Birthday</label>
    <input type="date" name="birthdate" required>
    <input type="text" placeholder="Username" name="username" required>
    <input type="password" placeholder="New Password" name="password" required>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>