<form action = 'find_and_replace.php' method = 'POST'>
    <textarea name = 'sometext' rows = '6' cols = '30'></textarea><br><br>
    Search for:<br>
    <input type = 'text' name = 'find'><br><br>
    Replace with:<br>
    <input type = 'text' name = 'replace'><br><br>
    <input type = 'submit' value = 'Find and Replace'>
</form>

<?php
if(isset($_POST['sometext']) && isset($_POST['find']) && isset($_POST['replace'])){
    $string = $_POST['sometext'];
    $find = $_POST['find'];
    $replace = $_POST['replace'];

    if(!empty($string) && !empty($find) && !empty($replace)){
        //echo str_replace($find, $replace, strtolower($string));
        $new_string = str_ireplace($find, $replace, $string);
        echo $new_string;
    } else{
        echo 'Fill all the boxes, stupid!';
    }
}
?>