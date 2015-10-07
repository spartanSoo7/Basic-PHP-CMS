<a href="index.php">Back to home page</a>
<?php

include_once("databaselogin.php");

$Description = mysql_real_escape_string($_POST['Description']);
$imagePath =mysql_real_escape_string($_POST['imagepath']);

$query = "INSERT INTO slideshow (description, img) VALUES ('$Description','$imagePath')";
$results = mysql_query($query);

if ($results)
{
   header( 'Location:editIndex.php' ) ;
}
else
{
	echo "Error! Could not add to information to slideshow table";
}
mysql_close();
?>