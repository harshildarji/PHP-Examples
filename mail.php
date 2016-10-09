<?php
$to = 'darjiharshil2994@gmail.com';
$subject = 'Test Mail!';
$body = 'I said this is test mail, stupid!';
$header = 'From: Tadaa <tadaa@minions.org>';
if(mail($to, $subject, $body, $header)){
    echo 'Tadaa!';
} else{
    echo 'Ahaa!';
}
?>