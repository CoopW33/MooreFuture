<?php

//checking if user is logged in
session_start();
if(isset($_SESSION['user'])!="") //checks if user is signed in by looking at username
{
 header("Location: Home.php"); //if user is logged in, direct them to home page
}
include_once 'Dbconnect.php'; //connect to the database

if(isset($_POST['btn-signup'])) //when signup button is pressed
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass'])); //grabs the info put in by the user
 
 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')")) //sends info to database
 {
  ?>
        <script>alert('successfully registered.');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="Index.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>