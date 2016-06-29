<?php
if(!mysql_connect("localhost","moorefut_test4","GreenApple00!","moorefut_test2"))
{
     die('oops connection problem !--> '.mysql_error());
}
if(!mysql_select_db("moorefut_test2"))
{
     die('oops database selection problem !--> '.mysql_error());
}
?>