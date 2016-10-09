<?php
$client_ip = getenv('HTTP_CLIENT_IP');              //$_SERVER['HTTP_CLIENT_IP'];
$forwarded = getenv('HTTP_X_FORWARDED_FOR');        //$_SERVER['HTTP_X_FORWARDED_FOR'];
$ipaddr = $_SERVER['REMOTE_ADDR'];

if(!empty($client_ip)){
    $ip = $client_ip;
} elseif(!empty($forwarded)){
    $ip = $forwarded;
} else{
    $ip = $ipaddr;
}

echo $ip;
?>