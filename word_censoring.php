<form action = 'word_censoring.php' method = 'POST'>
    <textarea name = 'sometext' rows = '6' cols = '30'></textarea><br><br>
    <input type = 'submit' value = 'Submit'>
</form>

<?php
$find = array('alex', 'billy', 'doe');
$replace = array('*', '**', '***');
if(isset($_POST['sometext']) && !empty($_POST['sometext'])){
    $string = $_POST['sometext'];
    //echo str_replace($find, $replace, strtolower($string));
    echo str_ireplace($find, $replace, $string);
}
?>