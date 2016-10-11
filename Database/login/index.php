<?php
session_start();

function loggedin(){
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        user_data($_SESSION['uid']);
    } else{
        include('login.php');
    }
}

function user_data($uid){
    require('connect.php');
    $id = $uid;
    $query = "SELECT * FROM `users` WHERE `id` = '".$id."'";
    $rows = mysql_fetch_assoc(mysql_query($query));
    $name = $rows['name'];
    $dist = $rows['district'];
    
    echo 'Wel come <strong>'.ucfirst($name).'</strong> [from: <strong>'.ucfirst($dist).'</strong>]<br>';
    echo "<a href = 'logout.php'>Log out</a>";
}

loggedin();
?>