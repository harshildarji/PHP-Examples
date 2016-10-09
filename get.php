<form action = 'get.php' method = 'GET'>
    Day:<br>   <input type = 'text' name = 'day'><br><br>
    Month:<br> <input type = 'text' name = 'month'><br><br>
    Year:<br>  <input type = 'text' name = 'year'><br><br>
    <input type = 'submit' value = 'Submit'>
</form>

<?php
if(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])){
    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];

    if(!empty($day) && !empty($month) && !empty($year)){
        echo $day.':'.$month.':'.$year;
    } else{
        echo 'Boxes are not for showcase, Fill all of them, stupid!';
    }
}
?>