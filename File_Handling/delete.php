<?php
$file_delete = 'five.txt';
$directory = 'files/';

if (@unlink($directory.$file_delete)){                  //put @ to ignore warnings!
    echo 'Deleted <strong>'.$file_delete.'</strong>...';
} else{
    echo '<strong>'.$file_delete.'</strong> already deleted or does not exists!';
}
?>