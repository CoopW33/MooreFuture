<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Moore Future</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="sp/css/skel.css" />
			<link rel="stylesheet" type="text/css" href="sp/css/style.css" />
			<link rel="stylesheet" type="text/css" href="sp/css/style-xlarge.css" />
			<link rel="stylesheet" type="text/css" href="sp/css/ie/v8.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Moore Future</a></h1>
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

		<!-- Banner -->
			<section id="banner">
				<h2>Moore Future</h2>
				<p>Here to help you get on track for a brighter future</p>
				<ul class="actions">
					<li>
						<a href="#one" class="button big">Plan Now</a>
					</li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2>Four Year Plan</h2>
						<p></p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<h2><a type="link" href="index.html">Browse Options</a></h2>
							<p>Take a look at the possible career paths offered by your school</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<h2><a type="link" href="index.html">Plan Your Future</a></h2>
							<p>Choose which career fields interest you and set up your class schedule accordingly</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<h2><a type="link" href="index.html"> Track Your Progress</a></h2>
							<p>See how your progess towards success is coming along</p>
						</section>
					</div>
				</div>
			</section>

		<!-- Two -->
			
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
<?php
//create_cat.php
include 'Dbconnect.php';
 
echo '<h2>Create a topic</h2>';
if(isset($_SESSION['user'])!="") //checks if user is logged in
{
    //the user is not signed in
    echo 'Sorry, you have to be <a href="signin.php">signed in</a> to create a topic.';
}
else
{
    //the user is signed in
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {   
        //the form hasn't been posted yet, display it
        //retrieve the categories from the database for use in the dropdown
        $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";
         
        $result = mysql_query($sql);
         
        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Error while selecting from database. Please try again later.';
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                //there are no categories, so a topic can't be posted
                if($_SESSION['user_level'] == 1)
                {
                    echo 'You have not created categories yet.';
                }
                else
                {
                    echo 'Before you can post a topic, you must wait for an admin to create some categories.';
                }
            }
            else
            {
         
                echo '<form method="post" action="">
                    Subject: <input type="text" name="topic_subject" />
                    Category:'; 
                 
                echo '<select name="topic_cat">';
                    while($row = mysql_fetch_assoc($result))
                    {
                        echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                    }
                echo '</select>'; 
                     
                echo 'Message: <textarea name="post_content" /></textarea>
                    <input type="submit" value="Create topic" />
                 </form>';
            }
        }
    }
    else
    {
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysql_query($query);
         
        if(!$result)
        {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {
     
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
            $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('" . mysql_real_escape_string($_POST['topic_subject']) . "',
                               NOW(),
                               " . mysql_real_escape_string($_POST['topic_cat']) . ",
                               " . $_SESSION['user_id'] . "
                               )";
                      
            $result = mysql_query($sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'An error occured while inserting your data. Please try again later.' . mysql_error();
                $sql = "ROLLBACK;";
                $result = mysql_query($sql);
            }
            else
            {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
                $topicid = mysql_insert_id();
                 
                $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . mysql_real_escape_string($_POST['post_content']) . "',
                                  NOW(),
                                  " . $topicid . ",
                                  " . $_SESSION['user_id'] . "
                            )";
                $result = mysql_query($sql);
                 
                if(!$result)
                {
                    //something went wrong, display the error
                    echo 'An error occured while inserting your post. Please try again later.' . mysql_error();
                    $sql = "ROLLBACK;";
                    $result = mysql_query($sql);
                }
                else
                {
                    $sql = "COMMIT;";
                    $result = mysql_query($sql);
                     
                    //after a lot of work, the query succeeded!
                    echo 'You have successfully created <a href="topic.php?id='. $topicid . '">your new topic</a>.';
                }
            }
        }
    }
}
 ?>
	</body>
</html>
