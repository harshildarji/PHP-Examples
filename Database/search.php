<?php
require('connect.php');
?>

<form action = 'search.php' method = 'GET'>
    Search for:<br>
    <input type = 'text' name = 'search'><br><br>
    <input type = 'submit' value = 'Search'>
</form>

<?php
    if(isset($_GET['search'])){
        $search = $_GET['search'];
        if(!empty($search)){
            $query = "SELECT `name`, `district` FROM `users` WHERE `name` LIKE '%".mysql_real_escape_string($search)."%'";
            if($query_run = mysql_query($query)){
                $num_rows = mysql_num_rows($query_run);
                if($num_rows == NULL){
                    echo 'No results found!';
                } else{
                    echo '<strong>'.$num_rows.'</strong> results found:<br><br>';
                    while($rows = mysql_fetch_assoc($query_run)){
                        $name = $rows['name'];
                        $dist = $rows['district'];

                        echo '<strong>'.$name.'</strong> [from: <strong>'.$dist.'</strong>]<br>';
                    }
                }
            } else{
                echo 'Query not successful!';
            }
        } else{
            echo 'Please fill above box!';
        }
    }
?>