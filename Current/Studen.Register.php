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
 $first = mysql_real_escape_string($_POST['first']);
 $last  = mysql_real_escape_string($_POST['last']);
 $email = mysql_real_escape_string($_POST['email']);
 $password = md5(mysql_real_escape_string($_POST['password'])); 
 $birthday = mysql_real_escape_string($_POST['birthday']); //grabs the info put in by the user


 if(mysql_query("INSERT INTO users(first,last,email,password,birthday) VALUES('$first','$last','$email','$password','$birthday')")) //sends info to database
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

      <form action="sp/survey1.html" method="get">
      
        <h1>Sign Up</h1>


        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name"> First Name:</label>
          <input type="text" id="first" name="first">
          
          <label for="last">Last Name:</label>
          <input type="text" id="last" name="last">
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">

          <label for="password">Password:</label>
          <input type="password" id="password" name="password">

          <label for="password">Password Confirmation:</label>
          <input type="password" id="password2" name="password2">

          
          <label>Date of Birth:</label>
      <label for="size_1"></label><input type="date" name="birthday" id="birthday" value="dd/mm/yy"  />
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Things about you</legend>
              <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>

<div ng-controller="myNoteCtrl">

<h2>Describe yourself</h2>

<p><textarea ng-model="message" cols="40" rows="10"></textarea></p>


</div>

<script src="myNoteApp.js"></script>
<script src="myNoteCtrl.js"></script>
        </fieldset>
        <fieldset>
        <label for="job">Interested Career path:</label>
        <select id="job" name="user_job">
          <optgroup label="A few possible Career path">
            <option value="frontend_developer">Computer Sciences</option>
            <option value="php_developor">Banking</option>
            <option value="python_developer">Culinary arts</option>
            <option value="rails_developer">Accounting</option>
            <option value="web_designer">Architecture</option>
            <option value="WordPress_developer">Automotive trades</option>
          </optgroup>
          <optgroup label="Some more..">
            <option value="Android_developer">Business</option>
            <option value="iOS_developer">Engineering</option>
            <option value="mobile_designer">Heath and medical</option>
          </optgroup>
          <optgroup label="And more..">
            <option value="business_owner">Information Technology</option>
            <option value="freelancer">Cosmetology</option>
          </optgroup>
          <optgroup label="And...">
            <option value="secretary">Biomedical sciences</option>
            <option value="maintenance">Education</option>
          </optgroup>
        </select>
        
          <label>Interests:</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="Computers">Work in teams</label><br>
          <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="Food">Organize things like files,offices or, activities</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="Teaching">Set goals for myself</label><br>
		  <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="Business">Build things</label><br>
		  <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="Outdoors">Read fiction</label><br>
		  <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="Science">Science</label><br>
		  <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="Puzzles">Puzzles</label><br>
		  <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="Cars">Work on cars</label><br>
		  <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="Attend">Attend concerts, theatres or art exhibits</label>
        
        </fieldset>
        <button name="btn-signup" type="submit">Sign Up</button>
      </form>
      
    </body>
</html>