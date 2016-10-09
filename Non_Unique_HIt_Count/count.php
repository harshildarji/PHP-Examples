<?php
function hit_count(){
    $file = 'count.txt';

    $handle = fopen($file, 'r');
    $current = fread($handle, filesize($file));
    fclose($handle);

    $current_inc = $current + 1;
    
    $handle = fopen($file, 'w');
    fwrite($handle, $current_inc);
    fclose($handle);
}
?>