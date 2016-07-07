<?php
//checking if user is logged in
session_start();
if(isset($_SESSION['Business'])!="") //checks if user is signed in by looking at username
{
 header("Location: Home.php"); //if user is logged in, direct them to home page
}
include_once 'Dbconnect.php'; //connect to the database

if(isset($_POST['btn-signup'])) //when signup button is pressed
{
 $Company = mysql_real_escape_string($_POST['Company']);
 $AccontName  = mysql_real_escape_string($_POST['AccontName']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass'])); 
 $Phone = mysql_real_escape_string($_POST['Phone']); //grabs the info put in by the user


 if(mysql_query("INSERT INTO Business(Company,AccontName,email,password,Phone) VALUES('$Company','$AccontName','$email','$upass','$Phone')")) //sends info to database
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
<td><input type="text" name="Company" placeholder="Your Company Name" required /></td>
</tr>
<tr>
<td><input type="text" name="AccountName" placeholder="Account Holder Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Business Email" required /></td>
</tr>
<tr>
<td><input type="password" name="upass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><input type="text" name="Phone" placeholder="Your Phone Number" required /></td>
</tr>


<tr>

<?php
$Phone = '000-0000-0000';

if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
  // $phone is valid
}
?>
</tr>



<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="index.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>