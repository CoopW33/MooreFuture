<?php
include 'Dbconnect.php';
// comment_add.php
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
if(admin == true or buisness == true){


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


$expire = time()+60*60*24*30;
setcookie('name', $_POST['name'], $expire, '/');
setcookie('email', $_POST['email'], $expire, '/');
setcookie('website', $_POST['website'], $expire, '/');

mysql_safe_query('INSERT INTO comments (post_id,name,email,website,content,date) VALUES (%s,%s,%s,%s,%s,%s)', 
    $_GET['id'], $_POST['name'], $_POST['email'], $_POST['website'], $_POST['content'], time());
mysql_safe_query('UPDATE posts SET num_comments=num_comments+1 WHERE id=%s LIMIT 1', $_GET['id']);
redirect('post_view.php?id='.$_GET['id'].'#post-'.mysql_insert_id());
}
?>