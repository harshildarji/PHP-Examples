<?php
require('connect.php');
//require('index.php');
?>

<form action='register.php' method='POST'>
Name:<br>
    <input type = 'text' name = 'uname'><br><br>
    Password:<br>
    <input type = 'password' name = 'pwd'><br><br>
    Address:<br>
    <input type = 'text' name = 'addr'><br><br>
    <input type = 'submit' value = 'Register'>
</form>

<?php
session_start();
if(!@$_SESSION['uid']){
    if(isset($_POST['uname']) && isset($_POST['pwd']) && isset($_POST['addr'])){
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $addr = $_POST['addr'];
        if(!empty($uname) && !empty($pwd) && !empty($addr)){
            $query = "SELECT `name` FROM `users` WHERE `name` = '".$uname."'";
            $query_run = mysql_query($query);
            if(mysql_num_rows($query_run) == NULL){
                $pwd = md5($pwd);
                $query = "INSERT INTO `users` VALUES ('".NULL."', '".$uname."', '".$pwd."', '".$addr."')";
                if(mysql_query($query)){
                    echo "Registration Done!<br>You may proceed to <a href = 'login.php'>Log In</a> page.";
                }
            } else{
                echo 'User name already taken!';
            }
        } else{
            echo 'Please fill all the boxes!';
        }
    }
} else{
    header('Location: index.php');
}
?>