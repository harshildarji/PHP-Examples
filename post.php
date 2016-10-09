<form action = 'post.php' method = 'POST'>
    Username:<br> <input type = 'text' name = 'uname'><br><br>
    Password:<br> <input type = 'password' name = 'pwd'><br><br>
    <input type = 'submit' value = 'Submit'>
</form>

<?php
if(isset($_POST['uname']) && isset($_POST['pwd'])){
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    if(!empty($uname) && !empty($pwd)){
        if(strtolower($uname) == 'admin' && $pwd == 'ad@min'){
            echo 'Welocome';
        }
        else{
            echo 'Invalid credentials!';
        }
    } else{
        echo 'Fill all the boxes, stupid!';
    }
}

?>