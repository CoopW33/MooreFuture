<?php
include 'Dbconnect.php';
// comment_delete.php
if($_GET('user_level') == 1){
	$buisness=true
}else{
	$buisness=false
}
if($_GET('user_level') == 2){
	$admin=true
}else{
	$admin=false
}

if(admin == true or buisness == true){

function redirect($uri) {
    header('location:'.$uri);
    exit;
}


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



mysql_safe_query('DELETE FROM comments WHERE id=%s LIMIT 1', $_GET['id']);
mysql_safe_query('UPDATE posts SET num_comments=num_comments-1 WHERE id=%s LIMIT 1', $_GET['post']);
redirect('post_view.php?id='.$_GET['post']);
}
?>