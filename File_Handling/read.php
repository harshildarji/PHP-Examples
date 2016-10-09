<?php
$filename = 'something.txt';
$handle = fopen($filename, 'r');
$datain = fread($handle, filesize($filename));

$line_array = explode("\n", $datain);
$total = count($line_array);

$count = 1;
foreach($line_array as $line){
    echo $line;
    if($count != $total){
        echo '<strong>, </strong>';
        $count++;
    }
}
?>