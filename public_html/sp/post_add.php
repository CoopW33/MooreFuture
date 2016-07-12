<?php
include 'Dbconnect.php';
// post_add.php
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




if(!empty($_POST)) {
    if(mysql_safe_query('INSERT INTO posts (title,body,date) VALUES (%s,%s,%s)', $_POST['title'], $_POST['body'], time()))
        echo 'Entry posted. <a href="post_view.php?id='.mysql_insert_id().'">View</a>';
    else
        echo mysql_error();
}
}
?>

<form method="post">
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input name="title" id="title" /></td>
        </tr>
        <tr>
            <td><label for="body">Body</label></td>
            <td><textarea name="body" id="body"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Post" /></td>
        </tr>
    </table>
</form>
