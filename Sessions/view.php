<?php
//include('set.php');
session_start();
if(isset($_SESSION['uname']) && isset($_SESSION['age'])){
    echo 'Welcome '.$_SESSION['uname'].', You are '.$_SESSION['age'].'!';
} else{
    echo 'Please login!';
}
?>