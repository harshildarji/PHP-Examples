<?php
session_start();

function loggedin(){
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        return TRUE;
    } else{
        include('login.php');
    }
}

if(loggedin()){
    user_data($_SESSION['uid']);
}

function user_data($uid){
    require('connect.php');
    $id = $uid;
    $query = "SELECT * FROM `users` WHERE `id` = '".$id."'";
    $rows = mysql_fetch_assoc(mysql_query($query));
    $name = $rows['name'];
    $add = $rows['address'];
    
    echo 'Wel come <strong>'.ucfirst($name).'</strong> [from: <strong>'.ucfirst($add).'</strong>]<br>';
    echo "<a href = 'logout.php'>Log out</a>";
}
?>