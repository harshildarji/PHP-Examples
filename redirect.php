<h1>Tadaa!</h1>

<?php
$redirect = TRUE;
$red_page = 'https://google.com';
if($redirect == TRUE){
    header('Location: '.$red_page);
} else{
    echo 'No redirections!';
}
?>