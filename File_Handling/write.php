<?php
$handle = fopen('something.txt', 'w');
fwrite($handle, 'This is just an example!'."\n");
fwrite($handle, 'Harshil Darji');
fclose($handle);
echo 'Written!';
?>