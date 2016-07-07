<?php
$servername="localhost"
$username="moorefut_test4";
$password="GreenApple00!";
$database="moorefut_test2";

mysql_connect($servername,$username,$password, $database);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM users";
$result=mysql_query($query);

$num=mysql_num_rows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$grade=mysql_result($result,$i,"grade");
$birthday=mysql_result($result,$i,"birthday");


echo "<b>$first $last</b><br>Grade: $grade<br>Birthday: $birthday<br><hr><br>";

$i++;
}

?>