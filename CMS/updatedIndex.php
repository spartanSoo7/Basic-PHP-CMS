<a href="index.php">Back to List</a><br>
<br>
<?php

include_once("databaselogin.php");

$id = $_POST['id'];
$description = mysql_real_escape_string($_POST['Description']);
$imagePath =mysql_real_escape_string($_POST['imagepath']);

$update = "UPDATE slideshow SET description = '$description', img = '$imagePath' WHERE id = '$id' ";
mysql_query($update);
   header( 'Location:editIndex.php' ) ;
?>