<?php
session_start();

include_once 'Dbconnect.php';

if(isset($_SESSION['user'])=="") //checks if user is logged in
{
 header("Location: moorefuture.com");
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
		<title>Generic - Interphase by TEMPLATED</title>
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
				<h1><a href="bhome.html"> <div class="dropdown2"><button class="dropbtn2">
  <img src="images/MFLogo.png" alt="Moore Forward" width="150" height="60"></button></a>
  <div class="dropdown-content2">
     <a href="aboutus.html">About Us</a>
				</h1>
  		</div>
	</div>
				<nav id="nav">
					<ul>
						<li><a href="posts.html">
							<div class="dropdown">
  <button class="dropbtn">Your Posts</button></a>
  <div class="dropdown-content" style="right:0;">
  	<a href="newpost.html"> Make new post</a>
    
</li>
						<li><a href="studsearch.html">
							<div class="dropdown">
  <button class="dropbtn">Student Search </button></a>
  <div class="dropdown-content" style="right:0;">
    <a href="student.html">Browse</a>
</li>
						<li><a href="busprofile.php">
							<div class="dropdown">
  <button class="dropbtn">Profile</button></a>
  <div class="dropdown-content" style="right:0;">
    <a href="Resources.html">Resources</a>
    <a href="#">Log out</a>
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
						<h2>Profie</h2>
					</header>
				</div>
			</section>
				<div id="info">
					
					
						<h3>Company: <?php echo $userRow['Company'];?> </h3>
						<h3>Email: <?php echo $userRow['email'];?> </h3>
						<h3>Phone: <?php echo $userRow['Phone'];?> </h3>

<h3>Welcome</h3>
					
				</div>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Lorem ipsum</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cumque!</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Quod adipisci perferendis et itaque.</a></li>
								<li><a href="#">Itaque eveniet ullam, veritatis reiciendis?</a></li>
								<li><a href="#">Accusantium repellat accusamus a, soluta.</a></li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									1234 Somewhere Road<br>
									Nashville, TN 00000
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">someone@untitled.tld</a>
								</li>
								<li>
									<h3>Phone</h3>
									(000) 000-0000
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>
