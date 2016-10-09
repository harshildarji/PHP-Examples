<?php
$find = 'string';
$find_length = strlen($find);
$string = 'This is just an example string, yes just a string!';

$offset = 0;
echo 'Found at: ';
while($strpos = strpos($string, $find, $offset)){
    echo $strpos.' ';
    $offset = $strpos + $find_length;
}
?>