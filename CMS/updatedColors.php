<a href="updateColors.php">Back to List</a><br>
<br>
<?php

include_once("databaselogin.php");
print "hello";
	//$id = $_POST['id'];

	$default = mysql_real_escape_string($_POST['default']);
	$paragraph = mysql_real_escape_string($_POST['paragraph']);
	
	$link = mysql_real_escape_string($_POST['link']);
	$linkH = mysql_real_escape_string($_POST['linkH']);
	$linkV = mysql_real_escape_string($_POST['linkV']);
	$linkActive = mysql_real_escape_string($_POST['linkActive']);
	
	$nav = mysql_real_escape_string($_POST['nav']);
	$theme1 = mysql_real_escape_string($_POST['theme1']);
	$theme2 = mysql_real_escape_string($_POST['theme2']);

	
$delete = "DELETE FROM colourtable 
WHERE id='1';";

$insert = "INSERT INTO colourtable (
id,defaultColor,paragraph,link,linkH,linkV,linkActive,nav,theme1,theme2)
VALUES ('1','$default','$paragraph','$link','$linkH','$linkV','$linkActive','$nav','$theme1','$theme2');";





mysql_query($delete);
mysql_query($insert);
print $update;
header( 'Location:updateColors.php' ) ;
?>