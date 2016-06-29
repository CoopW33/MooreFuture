<?php
session_start();
include_once 'Dbconnect.php';

if(isset($_SESSION['user'])!="") //checks if user is logged in
{
 header("Location: sp/index.html");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id']; //checks if password belongs to user ID
  header("Location: sp/index.html"); //sends users to home page if login is correct
 }
 else
 {
  ?>
        <script>alert('wrong details');</script> <!--tells user if input does not match database -->
        <?php
 }
 
}
?>


<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>

  <link rel="stylesheet" href="css/login.css">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div id="login">
	<form method="post">

		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		<form action="javascript:void(0);" method="POST">

			<fieldset>
	
				<p><label for="email">E-mail address</label></p>
				<p><input type="email" name="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password</label></p>
				<p><input type="password" name="pass" id="pass" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->
				<form method="get"action="sp/index.html">
				<p><button type="submit" name="btn-login">Log Me Up</button></td>
				</form>
			</fieldset>

		</form>
	</form>
	</div> <!-- end login -->

</body>	
</html>