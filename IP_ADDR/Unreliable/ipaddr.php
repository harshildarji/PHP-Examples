<?php
require('conf.php');

foreach($blocked as $ip){
    if($ip == $ipaddr){
        die('<strong>IP Blocked</strong>');
    }
}
?>
<h1>Welcome</h1>