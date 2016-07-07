<?php
include 'Dbconnect.php';
// index.php


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


echo '<h1>My First Blog</h1>';
echo "<em>Not just another WordPress web log</em><hr/>";

$result = mysql_safe_query('SELECT * FROM posts ORDER BY date DESC');

if(!mysql_num_rows($result)) {
    echo 'No posts yet.';
} else {
    while($row = mysql_fetch_assoc($result)) {
        echo '<h2>'.$row['title'].'</h2>';
        $body = substr($row['body'], 0, 300);
        echo nl2br($body).'...<br/>';
        echo '<a href="post_view.php?id='.$row['id'].'">Read More</a> | ';
        echo '<a href="post_view.php?id='.$row['id'].'#comments">'.$row['num_comments'].' comments</a>';    
        echo '<hr/>';
    }
}

echo <<<HTML
<a href="post_add.php">+ New Post</a>
HTML;
?>