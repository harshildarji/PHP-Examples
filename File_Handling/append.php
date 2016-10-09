<form action = 'append.php' method = 'POST'>
    <input type = 'text' name = 'text'>
    <input type = 'submit' value = 'Append'>
</form>

<?php
if(isset($_POST['text'])){
    $handle = fopen('something.txt', 'a');
    $text = $_POST['text'];
    
    if(!empty($text)){
        fwrite($handle, "\n".$text);
        fclose($handle);
        echo 'Appended!';
    } else{
        echo 'Fill above box!';
    }
}
?>