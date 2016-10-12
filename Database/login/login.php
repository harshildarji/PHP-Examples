<?php
require('connect.php');
@session_start();
?>

<form action = 'login.php' method = 'POST'>
    Name:<br>
    <input type = 'text' name = 'uname'><br><br>
    Password:<br>
    <input type = 'password' name = 'pwd'><br><br>
    <input type = 'submit' value = 'Log In'>
</form>

<?php
if(isset($_POST['uname']) && isset($_POST['pwd'])){
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    if(!empty($uname) && !empty($pwd)){
        $pwd = md5($pwd);
        $query = "SELECT * FROM `users` WHERE `name` = '".$uname."' && `password` = '".$pwd."'";
        $query_run = mysql_query($query);
        if(mysql_num_rows($query_run) == NULL){
            echo 'Invalid Username or Password!';
        } else{
            $rows = mysql_fetch_assoc($query_run);
            $id = $rows['id'];
            $_SESSION['uid'] = $id;
            header('Location: index.php');
            //echo 'Wel Come <strong>'.ucfirst($uname).'</strong>.';
        }
    } else{
        echo 'Please fill above boxes!';
    }
}
?>