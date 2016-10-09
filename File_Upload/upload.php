<form action='upload.php' method='POST' enctype='multipart/form-data'>
  <input type='file' name='file'><br><br>
  <input type='submit' name='submit' value='Upload'>
</form>

<?php
$to_directory = 'uploads/';

if(isset($_POST['submit'])){
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $max_size = 2097152;
    $type = $_FILES['file']['type'];
    $ext = strtolower(substr($name, strpos($name, '.') + 1));
    $tmp = $_FILES['file']['tmp_name'];
    
    if(isset($name)){
        if(!empty($name)){
            if(($ext == 'jpg' || $ext == 'jpeg') && ($type == 'image/jpg' || $type == 'image/jpeg')){
                if($size <= $max_size){
                    if(move_uploaded_file($tmp, $to_directory.$name)){
                        echo 'Uploaded!';
                    } else{
                        echo 'Error uploading <strong>'.$name.'</strong>...';
                    }
                } else{
                    echo 'File size must be of 2MB [You are trying to upload <strong>'.($size/1048576).'</strong>MB of data.]';
                }
            } else{
                echo 'Only <strong>JPG</strong> or <strong>JPEG</strong> files are allowed!';
            }
        } else{
            echo 'Please upload a file!';
        }
    }
}
?>