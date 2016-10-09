<?php
$full_name = $_SERVER['SCRIPT_NAME'];
$name = end(split('/', $full_name));
?>

<form action = '<?php echo $name; ?>' method = 'POST'>
    <input type = 'submit' name = 'submit'>
</form>