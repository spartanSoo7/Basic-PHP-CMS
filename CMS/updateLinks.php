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
	$qP = "SELECT * FROM usefullinks WHERE id = '$id'  ";
	$rsP = mysql_query($qP);
	$row = mysql_fetch_array($rsP);
	extract($row);
	$link = trim($link);
	$img =trim($img);
	$alt =trim($alt);
	$width =trim($width);
	$description = trim($description);
	
?>
<body>
<div id = "wrapper">

<?php include 'header.php';?>

		<main style = "width: 90%;">
<form id="FormName" action="updatedLinks.php" method="post" name="FormName">
	<table width="448" border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td width="150">
				<div align="right">
					<label for="link">Name</label>
				</div>
			</td>
			
			<td>
				<input id="link" name="link" type="text" size="50" value="<?php echo $link ?>" maxlength="150"/>
			</td>
		</tr>

		<tr>
			<td width="150" class="auto-style1">Image path</td>
			<td>
				<input id="img" name="img" type="text" size="50" value="<?php echo $img ?>" maxlength="50"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="alt">Alt (if image is not shown)</label>
				</div>
			</td>
			
			<td>
				<input id="alt" name="alt" type="text" size="50" value="<?php echo $alt ?>" maxlength="50"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="width">Width (px)</label>
				</div>
			</td>
			
			<td>
				<input id="width" name="width" type="text" size="50" value="<?php echo $width ?>" maxlength="3"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="Description">Description</label>
				</div>
			</td>
			
			<td>
				<textarea id="description" name="description" form="FormName" style="width: 435px; height: 143px;"><?php echo $description ?></textarea>
			</td>
		</tr>

		<tr>
			<td width="150"></td>
			<td>
				<input type="submit" name="submitButtonName" value="Update"/>
				<input type="hidden" name="id" value="<?php echo $id?>"/>
			</td>
		</tr>
	</table>
</form>
</main>
</div>
</body>

</html>

