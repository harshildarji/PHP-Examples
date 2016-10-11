<?php
$mysql_host = 'localhost';
$mysql_user = 'harshil';
$mysql_pass = 'dKprFs427scSthnq';

$mysql_db = 'example';

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){
    die('Could not connect!');
}
?> 