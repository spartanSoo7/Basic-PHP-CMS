<a href="index.php">Back to List</a><br>
<br>
<?php 
include_once("databaselogin.php");

$id = $_GET['id'];

$delete = "DELETE FROM admin WHERE id = '$id' ";
mysql_query($delete);


 header( 'Location:editOtherUser.php' ) ;
?>