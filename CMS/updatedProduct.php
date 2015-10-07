<a href="index.php">Back to List</a><br>
<br>
<?php

include_once("databaselogin.php");

$id = $_POST['id'];

$name = mysql_real_escape_string($_POST['name']);
$imagePath =mysql_real_escape_string($_POST['imagepath']);
$alt =mysql_real_escape_string($_POST['alt']);
$width =mysql_real_escape_string($_POST['width']);
$price =mysql_real_escape_string($_POST['price']);
$unit =mysql_real_escape_string($_POST['unit']);
$description = mysql_real_escape_string($_POST['description']);


$update = "UPDATE product SET 
	name = '$name',
	img = '$imagePath',
	alt = '$alt',
	width = '$width',
	price = '$price',
	unit = '$unit',
	description = '$description'	

WHERE id = '$id' ";
mysql_query($update);
   header( 'Location:editProducts.php' ) ;
?>