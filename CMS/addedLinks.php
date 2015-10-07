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



$query = "INSERT INTO usefullinks (
	link, img, alt, width, description
	) 
	VALUES (
	'$link', '$img', '$alt', '$width', '$description'
	)";

	$results = mysql_query($query);

if ($results)
{
   header( 'Location:editLinks.php' ) ;
}
else
{
	echo "Error! Could not add to information to Link table";
}
mysql_close();
?>