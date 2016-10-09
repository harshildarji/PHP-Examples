<?php
$browser = get_browser(null, TRUE);
//print_r($browser);
$browser = $browser['browser'];

if(strtolower($browser) != 'chrome'){
    die('Use <strong>chrome</strong> to access this site.');
} else{
    echo 'You are awesome!';
}
?>