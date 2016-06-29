<?php
session_start();
include_once 'Dbconnect.php'
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSUION['user']);
$userRow=mysql_fetch_array($res);
?>

<?php
echo $userRow['username']; ?>
?>