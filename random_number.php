<form action = 'random_number.php' method = 'POST'>
    <input type = 'submit' name = 'dice' value = 'Roll Dice'>
</form>

<?php
if (isset($_POST['dice'])){
    $rand = rand(1, 6);
    echo 'You got <strong>'.$rand.'</strong>';
}
?>