<a href="index.php">Back to List</a><br>
<br>
<?php 
include_once("databaselogin.php");

$id = $_GET['id'];

$delete = "DELETE FROM slideshow WHERE id = '$id' ";
mysql_query($delete);


 header( 'Location:editIndex.php' ) ;
?>