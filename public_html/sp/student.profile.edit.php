<?php
session_start();

include_once 'Dbconnect.php';

if(isset($_SESSION['user'])=="") //checks if user is logged in
{
 header("Location: sp/shome.html");
}



if(isset($_POST['btn-signup'])) //when signup button is pressed
{
  $first = mysql_real_escape_string($_POST['first']);
  $last  = mysql_real_escape_string($_POST['last']);
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
  $password2 = mysql_real_escape_string($_POST['password2']);
  $birthday = mysql_real_escape_string($_POST['birthday']);
 }



$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']); 
$userRow=mysql_fetch_array($res); //$res is users email
?>
<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic - Profile</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>



		<!-- Header -->
			<header id="header">
				<h1><a href="shome.html"> <div class="dropdown2"><button class="dropbtn2">
  <img src="images/MFLogo.png" alt="Moore Forward" width="150" height="60"></button></a>
  <div class="dropdown-content2">
     <a href="aboutus.html">About Us</a>
				</h1>
  		</div>
	</div>
				<nav id="nav">
					<ul>
						<li><a href="Op.html">
							<div class="dropdown">
  <button class="dropbtn">Opportunities</button></a>
  <div class="dropdown-content" style="right:0;">
  	<a href="Opsearch.html"> Search</a>
  	<a href="Opbrowse.html"> Browse</a>
    
</li>
						<li><a href="4yearplan.html">
							<div class="dropdown">
  <button class="dropbtn">4 Year Plan</button></a>
  <div class="dropdown-content" style="right:0;">
    <a href="Survey.html">Interest Survery</a>
    <a href="ResumeBuild.html">Resume Builder</a>
</li>
						<li><a href="student.profile.php">
							<div class="dropdown">
  <button class="dropbtn">Profile</button></a>
  <div class="dropdown-content" style="right:0;">
    <a href="Resources.html">Resources</a>
    <a href="">Resume Builder</a>
    <a href="http://www.moorefuture.com">Log out</a>
</li>
					
  </div>
</div>
						
					</ul>
				</nav>
			</header>


		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Profile</h2>
					</header>
				</div>
			</section>
				<div id="info">
					
					<div>
					<style>
{
    margin-left:100px;
}
</style>
<h3>
					</div>
						<h3>First Name: <?php echo $userRow['first'];?> </h3>
						<h3>Last Name: <?php echo $userRow['last'];?> </h3>
						<h3>Email: <?php echo $userRow['last'];?> </h3>
						<h3>Password: <input type="text" name="password"> </h3>
						<h3>Password: <input type="text" name="password2"> </h3>
						<h3>Grade: <input type="text" name="grade"> </h3>
						<h3>Welcome</h3>
					</div>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Having Trouble?</h3>
							<p>Feel free to contact your school's Career Developement Cordinator with any questions. They're always happy to help!</p>
							
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3></h3>
							<p></p>
							<ul class="alt">
								<li><b style="color:white">Union Pines: </b>Stacey Patterson <br> Email: <a href=mailto:spatterson@ncmcs.org?Subject=Moore%20Future%20Help>spatterson@ncmcs.org</a> </li>
								<li><b style="color:white">Pinecrest: </b>Karen Raliski <br> Email: <a href=mailto:kraliski@ncmcs.org?Subject=Moore%20Future%20Help>kraliski@ncmcs.org</a></li>
								<li><b style="color:white">North Moore: </b>Kyle Greene <br> Email: <a href=mailto:kgreene@ncmcs.org?Subject=Moore%20Future%20Help>kgreene@ncmcs.org</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="https://www.twitter.com/MooreForward" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/mooreforward" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.linkedin.com/company/moore-forward" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									108b East Main St<br>
									Aberdeen NC, 28315
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">someone@untitled.tld</a>
								</li>
								<li>
									<h3>Phone</h3>
									(555) 555-5555
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						
					</ul>
				</div>
			</footer>

	</body>
</html>
