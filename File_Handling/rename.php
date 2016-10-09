<?php
$file_rename = 'five.txt';
$directory = 'files/';
$ext = end(explode('.', $file_rename));
$new_name = md5(rand(1000, 9999).$directory.$file_rename).'.'.$ext;
//echo $new_name;

if(@rename($directory.$file_rename, $directory.$new_name)){
    echo '<strong>'.$file_rename.'</strong> is renamed to <strong>'.$new_name.'</strong>...';
} else{
    echo '<strong>'.$file_rename.'</strong> already renamed or does not exists!';
}
?>