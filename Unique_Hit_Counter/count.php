<?php
$ip = $_SERVER['REMOTE_ADDR'];

function hit_count(){
    global $ip;
    $ipfile = file('ip.txt');
    foreach($ipfile as $ip_addr){
        $ip_addr = trim($ip_addr);
        if($ip == $ip_addr){
            $found = TRUE;
            break;
        } else{
            $found = FALSE;
        }
    }

    if($found == FALSE){
        $handle = fopen('ip.txt', 'a');
        fwrite($handle, "\n".$ip);
        fclose($handle);

        $file = 'count.txt';
        $handle = fopen($file, 'r');
        $current = fread($handle, filesize($file));
        fclose($handle);

        $current_inc = $current + 1;
        $handle = fopen($file, 'w');
        fwrite($handle, $current_inc);
        fclose($handle);
    }
}
?>