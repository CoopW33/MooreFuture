<?php
session_start();
include_once 'Dbconnect.php';

if(!isset($_SESSION['user'])) //checks if user is logged in
{
 header("Location: Index.php"); //if user is logged in, send them to home page
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']); //user_id is the numbers
$userRow=mysql_fetch_array($res); //$res is users email
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>If you see this, you are signed in.</label>
    </div>
    <div id="right">
     <div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp;<a href="Logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
</body>
</html>