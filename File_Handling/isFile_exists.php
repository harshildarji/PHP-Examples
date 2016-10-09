<?php
/*
$filename_or = 'image.jpeg';
$filename = rand(1000, 9999).md5($filename_or).rand(1000, 9999);
echo $filename;
*/
$file = 'five.txt';
$directory = 'files/';
$filename = $directory.$file;
if (file_exists($filename)){
    echo 'Exists!';
} else{
    $handle = fopen($filename, 'w');
    fwrite($handle, 'New Text Document.');
    fclose($handle);
    echo 'Created <strong>'.$file.'</strong> at <strong>/'.$directory.'</strong>...';
}
?>