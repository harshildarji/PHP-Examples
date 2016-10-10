<?php
require('connect.php');
$user_ip = $_SERVER['REMOTE_ADDR'];
//echo $user_ip;

function ip_exists($ip){
    $query = "SELECT `ip` FROM `hitip` WHERE `ip` = '".$ip."'";
    $query_run = mysql_query($query);
    if(mysql_num_rows($query_run) == NULL){
        ip_add($ip);
        update_count();
    }
}

function ip_add($ip){
    $query = "INSERT INTO `hitip` VALUES ('".$ip."')";
    @mysql_query($query);
}

function update_count(){
    $query = "SELECT `count` FROM `hitcount`";
    if($query_run = mysql_query($query)){
        $count = mysql_result($query_run, 0, 'count');
        $count += 1;
        $update = "UPDATE `hitcount` SET `count` = '".$count."'";
        @mysql_query($update);
    } else{
        echo 'Could not connect to database!';
    }
}

ip_exists($user_ip);
?>