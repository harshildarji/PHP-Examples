<?php
session_start();
if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
    require('connect.php');
    $query = "SELECT `name` FROM `users` WHERE `id` = '".$_SESSION['uid']."'";
    $uname = mysql_result(mysql_query($query), 0, 'name');
    echo "Wel Come <strong>".ucfirst($uname)."</strong>!<br><a href = 'logout.php'>Log out</a>";
} else{
    include('login.php');
}
?>