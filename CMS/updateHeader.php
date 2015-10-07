<?php
//Access only via login
require("securitycheck.php");
include 'head.php';
?>
</head>

<body>
<?php
	include_once("databaselogin.php");
	$id = "1";
	$qP = "SELECT * FROM header WHERE id = '$id'  ";
	$rsP = mysql_query($qP);
	$row = mysql_fetch_array($rsP);
	extract($row);
	
	$Title = trim($Title);
	$headerIMG = trim($headerIMG);
	$backgroundIMG = trim($backgroundIMG);
?>
<body>
<div id = "wrapper">

<?php include 'header.php';?>

		<main style = "width: 90%;">
<form id="FormName" action="updatedHeader.php" method="post" name="FormName">
<table width="900" border="0" cellspacing="2" cellpadding="0">
	<tr>
		<td width="400">
			<div align="right">
			<label for="Title">Change the website title:</label></div>
		</td>
		<td>
			<input id="Title" name="Title" type="text" size="30" value="<?php echo $Title ?>" maxlength="50"/></td>
	</tr>
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="headerIMG">Change the header image path:</label></div>
		</td>
		<td>
			<input id="headerIMG" name="headerIMG" type="text" size="30" value="<?php echo $headerIMG ?>" maxlength="50"/></td>
	</tr>
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="backgroundIMG">Change the background image path:</label></div>
		</td>
		<td>
			<input id="backgroundIMG" name="backgroundIMG" type="text" size="30" value="<?php echo $backgroundIMG ?>" maxlength="50"/></td>
	</tr>	
	
	<tr>
		<td width="400"></td>
		<td><input type="submit" name="submitButtonName" value="Update"/><input type="hidden" name="id" value="<?php echo $id?>"/></td>
	</tr>
</table>
</form>
</main>
</div>
</body>

</html>
