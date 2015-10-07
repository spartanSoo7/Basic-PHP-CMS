<a href="index.php">Back to List</a><br>
<br>
<?php

include_once("databaselogin.php");

$id = $_POST['id'];

$link = mysql_real_escape_string($_POST['link']);
$img =mysql_real_escape_string($_POST['img']);
$alt =mysql_real_escape_string($_POST['alt']);
$width =mysql_real_escape_string($_POST['width']);
$description = mysql_real_escape_string($_POST['description']);


$update = "UPDATE usefullinks SET 
	link = '$link',
	img = '$img',
	alt = '$alt',
	width = '$width',
	description = '$description'	

WHERE id = '$id' ";
mysql_query($update);
   header( 'Location:editLinks.php' ) ;
?>