<?php
$xml = simplexml_load_file('example.xml');
//echo $xml -> producer[1] -> name.' is '.$xml -> producer[1] -> age;

foreach($xml -> producer as $producer){
    echo '<strong>'.$producer -> name.'</strong> [Age: '.$producer -> age.']<br>';
    foreach($producer -> show as $show){
        echo $show -> showname.' : '.$show -> showdate.'<br>';
    }
    echo '<br>';
}
?>