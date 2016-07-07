<?php
include 'Dbconnect.php';
// post_delete.php
if($_GET['user_level'] == 1){
	$buisness=true;
}else{
	$buisness=false;
}
if($_GET['user_level'] == 2){
	$admin=true;
}else{
	$admin=false;
}
if(admin == true){

function mysql_safe_string($args) {
    $value = trim($args);
    if(empty($args))           return 'NULL';
    elseif(is_numeric($args))  return $value;
    else {
    	return "'".mysql_real_escape_string($args)."'";
		 }                        
}

function mysql_safe_query($query) {
    $args = array_slice(func_get_args(),1);
    $args = array_map('mysql_safe_string',$args);
    return mysql_query(vsprintf($query,$args));
}

function redirect($uri) {
    header('location:'.$uri);
    exit;
}


mysql_safe_query('DELETE FROM posts WHERE id=%s LIMIT 1', $_GET['id']);
mysql_safe_query('DELETE FROM comments WHERE post_id=%s', $_GET['id']);
redirect('index2.html');
}
?>