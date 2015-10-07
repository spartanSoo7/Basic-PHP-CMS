<a href="index.php">Back to home page</a>
<?php

include_once("databaselogin.php");

$name = mysql_real_escape_string($_POST['name']);
$imagePath =mysql_real_escape_string($_POST['imagepath']);
$alt =mysql_real_escape_string($_POST['alt']);
$width =mysql_real_escape_string($_POST['width']);
$price =mysql_real_escape_string($_POST['price']);
$unit =mysql_real_escape_string($_POST['unit']);
$description = mysql_real_escape_string($_POST['Description']);



$query = "INSERT INTO product (
	name, img, alt, width, price, unit, description
	) 
	VALUES (
	'$name', '$imagePath', '$alt', '$width', '$price', '$unit', '$description'
	)";

	$results = mysql_query($query);

if ($results)
{
   header( 'Location:editProducts.php' ) ;
}
else
{
	echo "Error! Could not add to information to Product table";
}
mysql_close();
?>