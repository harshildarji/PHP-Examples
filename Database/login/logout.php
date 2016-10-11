<?php
session_start();
$coming_from = $_SERVER['HTTP_REFERER'];
//echo $coming_from;
session_destroy();
header('Location: '.$coming_from);
?>