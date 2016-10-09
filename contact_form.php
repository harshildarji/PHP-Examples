<form action='contact_form.php' method='POST'>
  Name:<br>
  <input type='text' name='name'><br><br> 
  Email:<br>
  <input type='text' name='mail'><br><br> 
  Message:<br>
  <textarea name='msg' rows='6' cols='30'></textarea><br><br>
  <input type='submit' name='submit' value='Submit'>
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $msg = $_POST['msg'];
    
    if(empty($name) && empty($mail)){
        echo '<strong>Name</strong> and <strong>E-Mail</strong> is compulsory!';
    } else{
        /*
        if(empty($msg)){
            $msg = '<strong>'.$name.'</strong> ['.$mail.'] responded!';
        }
        $to = 'darjiharshil2994@gmail.com';
        $subject = 'User response!';
        $body = $msg;
        $header = 'From: '.$name.' <'.$mail.'>';
        if(mail($to, $subject, $body, $header)){
            echo 'Thank you for your response!';
        } else{
            echo 'Error while sending response!';
        }
        */
        if(!empty($msg)){
            echo '<strong>'.$name.'</strong> ['.$mail.'] said: '.$msg;
        } else{
            echo '<strong>'.$name.'</strong> ['.$mail.'] responded!';
        }
    }
}
?>