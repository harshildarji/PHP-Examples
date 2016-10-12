<form action='index.php' method='GET'>
  ID:<br>
  <input type='number' name='id'><br><br>
  <input type='submit' name='submit' value='Get Email'>
</form>

<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    echo "<img src = 'generate.php?id=".$id."'/>";
}
?>