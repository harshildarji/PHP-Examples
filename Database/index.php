<?php
require('connect.php');
?>

  <form action='index.php' method='GET'>
    User name:
    <br>
    <input type='text' name='uname'>
    <br>
    <br>
    <input type='submit' value='Submit'>
  </form>

  <?php

if(isset($_GET['uname'])){
    $uname = strtolower($_GET['uname']);
    if(!empty($uname)){
        $query = "SELECT `name`, `password` FROM `users` WHERE `name` = '".$uname."'";
        
        if($query_run = mysql_query($query)){
            //echo 'Query success!';
            if(mysql_num_rows($query_run) == NULL){
                echo 'No results found!';
            } else{
                while($row = mysql_fetch_assoc($query_run)){
                    $name = $row['name'];
                    $pass = $row['password'];
                    
                    echo $name.': '.$pass.'<br>';
                }
            }
        } else{
            echo 'Query failed!';
        }
    } else{
        echo 'Fill above box!';
    }
}
?>