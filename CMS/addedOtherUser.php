<a href="editOtherUser.php">Back to Table</a><br>
<br>
<?php

include_once("databaselogin.php");

$id = $_POST['id'];

$Username = mysql_real_escape_string($_POST['Username']);
$Password =mysql_real_escape_string($_POST['Password']);




$query = "INSERT INTO admin (
	Username, Password
	) 
	VALUES (
	'$Username', '$Password'
	)";

	$results = mysql_query($query);

if ($results)
{
   header( 'Location:editOtherUser.php' ) ;
}
else
{
	echo "Error! Could not add to information to admin table";
}
mysql_close();
?>