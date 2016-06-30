<?php
//checking if user is logged in
session_start();
if(isset($_SESSION['users'])!="") //checks if user is signed in by looking at username
{
 header("Location: Home.php"); //if user is logged in, direct them to home page
}
include_once 'Dbconnect.php'; //connect to the database

if(isset($_POST['btn-signup'])) //when signup button is pressed
{
 $first = mysql_real_escape_string($_POST['first']);
 $last  = mysql_real_escape_string($_POST['last']);
 $email = mysql_real_escape_string($_POST['email']);
 $password = md5(mysql_real_escape_string($_POST['password'])); 
 $birthday = mysql_real_escape_string($_POST['birthday']); //grabs the info put in by the user


 if($password==$password2)
{

 (mysql_query("INSERT INTO users(first,last,email,password,birthday) VALUES('$first','$last','$email','$password','$birthday')")) //sends info to database
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
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='signup.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="formiteration6.js"></script>
    </head>
    <body>
    <div id="login-form">

      <form method="post">
        <h1>Sign Up</h1>


        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name"> First Name:</label>
          <input type="text" name="first" placeholder="First Name" required>
          
          <label for="last">Last Name:</label>
          <input type="text" name="last" placeholder="Last Name" required>
          
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="example@gmail.com" required>

          <label for="password">Password:</label>
          <input type="password" name="password" placeholder="Password" required>

          <label for="password">Password Confirmation:</label>
          <input type="password" name="password2" placeholder="Password" required>

          
          <label>Date of Birth:</label>
      <label for="size_1"></label><input type="date" name="birthday" id="birthday" value="dd/mm/yy" required />
        </fieldset>
        
        </fieldset>
        <button name="btn-signup" type="submit" value="submit">Sign Up</button>
      </form>
    </div>
    </body>
</html>