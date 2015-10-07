<a href="editAbout.php">Back to List</a><br>
<br>
<?php

include_once("databaselogin.php");

$id = $_POST['id'];

$companyname = mysql_real_escape_string($_POST['companyname']);
$number =mysql_real_escape_string($_POST['number']);
$street =mysql_real_escape_string($_POST['street']);
$town =mysql_real_escape_string($_POST['town']);

$city =mysql_real_escape_string($_POST['city']);
$country =mysql_real_escape_string($_POST['country']);
$phone =mysql_real_escape_string($_POST['phone']);
$longdesc =mysql_real_escape_string($_POST['longdesc']);
$shortdescription = mysql_real_escape_string($_POST['shortdescription']);




echo $id ."<br />";
echo $companyname ."<br />";
echo $number ."<br />";
echo $street ."<br />";
echo $town ."<br />";
echo $city ."<br />";
echo $country ."<br />";
echo $phone ."<br />";
echo $longdesc ."<br />";
echo $shortdescription;



$update = "UPDATE about SET 
	companyname = '$companyname',
	number = '$number',
	street = '$street',
	town = '$town',
	city = '$city',
	country = '$country',
	phone = '$phone',
	longdesc = '$longdesc',
	shortdescription = '$shortdescription'

WHERE id = '$id' ";
mysql_query($update);


header( 'Location:editAbout.php' ) ;
?>