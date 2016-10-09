<?php
$directory = 'files';
if ($handle = opendir($directory.'/')){
    echo 'Looking inside <strong>'.$directory.'</strong>...<br>';

    while($file = readdir($handle)){
        if($file != '.' && $file != '..'){
            echo '<a href = "'.$directory.'/'.$file.'">'.$file.'</a><br>';
        }
    }
}
?>