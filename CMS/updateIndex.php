<?php
//Access only via login
require("securitycheck.php");
include 'head.php';
?>
</head>

<body>
<?php
	include_once("databaselogin.php");
	$id = $_GET['id'];
	$qP = "SELECT * FROM slideshow WHERE id = '$id'  ";
	$rsP = mysql_query($qP);
	$row = mysql_fetch_array($rsP);
	extract($row);
	$description = trim($description);
	$imagePath =trim($img);
?>
<body>
<div id = "wrapper">

<?php include 'header.php';?>

		<main style = "width: 90%;">
<form id="FormName" action="updatedIndex.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">
<tr><td width="150"><div align="right">
<label for="Description">Description</label></div>
</td>
<td>
<input id="Description" name="Description" type="text" size="50" value="<?php echo $description ?>" maxlength="35"/></td>
</tr>
<tr><td width="150" class="auto-style1">Image path</td>
<td>
<input id="imagepath" name="imagepath" type="text" size="50" value="<?php echo $imagePath ?>" maxlength="50"/></td>
</tr>
<tr>
<td width="150"></td>
<td><input type="submit" name="submitButtonName" value="Update"/><input type="hidden" name="id" value="<?php echo $id?>"/></td>
</tr>
</table>
</form>
</main>
</div>
</body>

</html>
