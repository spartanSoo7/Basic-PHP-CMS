<a href="index.php">Back to List</a><br>
<br>
<?php

include_once("databaselogin.php");

$id = $_POST['id'];
$Username = mysql_real_escape_string($_POST['Username']);
$Password =mysql_real_escape_string($_POST['Password']);

$update = "UPDATE admin SET Username = '$Username', Password = '$Password' WHERE id = '$id' ";
mysql_query($update);
   header( 'Location:editOtherUser.php' ) ;
?>