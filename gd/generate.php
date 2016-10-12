<?php
header('Content-type: image/jpeg');

if(isset($_GET['email'])){
    $email = $_GET['email'];
} else{
    $email = 'No email specified!';
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