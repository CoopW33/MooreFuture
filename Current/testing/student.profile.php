
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


<?php
$servername="localhost";
$username="moorefut_test4";
$password="GreenApple00!";
$database="moorefut_test2";

mysql_connect($servername,$username,$password, $database);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM users";
$result = mysql_query($query);
$num=mysql_num_rows($result);
mysql_close();
?>


		<!-- Header -->
			<header id="header">
				<h1><a href="sp/index.html">Moore Future</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="Jobsearch.html">Job Search</a></li>
						<li><a href="4yearplan.html">4 Year Plan</a></li>
						<li><a href="ResumeBuild.html">Resume builder</a></li>
						<li><a href="Resources.html">Resources</a></li>
						<li><a href="Profile.html">Profile</a></li>
						
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
<?php
$query = "SELECT username, first, last, grade, birthday FROM users WHERE username = '".$_SESSION['myusername']."'";
?>
				<div id="info">
					<?php
						echo "<h3>First Name: </h3>".$row['first'];
						echo "<h3>Last Name: </h3>".$row['last'];
						echo "<h3>Grade: </h3>".$row['grade'];
						echo "<h3>Birthday: </h3>".$row['birthday'];
						if($_SESSION["username"]) {
?>
<h3>Welcome</h3> <?php echo  "SELECT * FROM users WHERE username =".$_SESSION["username"] ; }?> 

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
