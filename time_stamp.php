<?php
$time = time();
$for_human = date('M d, Y [H:i:s]', $time);
//$for_alien = date('M d, Y [H:i:s]', $time + 600);
//$for_alien = date('M d, Y [H:i:s]', strtotime('-1 day'));
$for_alien = date('M d, Y [H:i:s]', strtotime('+1 day -2 hours +10 seconds'));
echo $for_human.'<br>'.$for_alien;
?>