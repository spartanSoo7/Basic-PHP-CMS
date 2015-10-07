<a href="index.php">Back to List</a><br>
<br>
<?php

include_once("databaselogin.php");

$id = $_POST['id'];
$Title = mysql_real_escape_string($_POST['Title']);
$headerIMG =mysql_real_escape_string($_POST['headerIMG']);
$backgroundIMG = mysql_real_escape_string($_POST['backgroundIMG']);

$update = "UPDATE header SET Title = '$Title', headerIMG = '$headerIMG', backgroundIMG = '$backgroundIMG' WHERE id = '$id' ";
mysql_query($update);
   header( 'Location:Other.php' ) ;
?>