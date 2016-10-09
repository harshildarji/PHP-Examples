<form action='md5.php' method='POST'>
  <input type='password' name='pwd'><br><br>
  <input type='submit' value='Submit'>
</form>

<?php
$string = 'password';
$hashed_pwd = md5($string);

if(isset($_POST['pwd'])){
    $pwd = $_POST['pwd'];
    
    if(empty($pwd)){
        echo 'Please enter password in above box!';
    } else{
        if(md5($pwd) == $hashed_pwd){
            echo 'Matched!';
        } else{
            echo 'Not matched!';
        }
    }
}
?>