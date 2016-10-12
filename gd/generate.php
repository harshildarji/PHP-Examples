<?php
header('Content-type: image/jpeg');

$mysql_host = 'localhost';
$mysql_user = 'harshil';
$mysql_pass = 'dKprFs427scSthnq';
$mysql_db = 'example';
if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){
    die('Could not connect!');
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysql_query("SELECT `email` FROM `users` WHERE `id` = '".$id."'");
    if(mysql_num_rows($query) >= 1){
        $email = mysql_result($query, 0, 'email');
    } else{
        $email = 'Email address not found!';
    }
} else{
    $email = 'No ID specified!';
}

$email_len = strlen($email);

$font_size = 4;

$image_h = imagefontheight($font_size);
$image_w = imagefontwidth($font_size) * $email_len;

$image = imagecreate($image_w, $image_h);

imagecolorallocate($image, 255, 255, 255);
$font_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, $font_size, 0, 0, $email, $font_color);
imagejpeg($image);
?>