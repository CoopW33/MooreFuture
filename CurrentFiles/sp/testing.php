<?php
session_start();

$servername="localhost";
$username="moorefut_test4";
$password="GreenApple00!";
$database="moorefut_test2";

mysql_connect($servername,$username,$password, $database);
mysql_select_db($database) or die( "Unable to select database");

$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']); 
$userRow=mysql_fetch_array($res); //$res is users email
echo $userRow['username'];
?>
