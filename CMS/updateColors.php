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
	$qP = "SELECT * FROM colourtable WHERE id = '$id'  ";
	$rsP = mysql_query($qP);
	$row = mysql_fetch_array($rsP);
	extract($row);
	
	$default = trim($default);
	$paragraph = trim($paragraph);
	
	$link = trim($link);
	$linkH = trim($linkH);	
	$linkV = trim($linkV);
	$linkActive =trim($linkActive);
	
	$nav =trim($nav);	
	$theme1 = trim($theme1);
	$theme2 = trim($theme2);
?>
<body>
<div id = "wrapper">

<?php include 'header.php';?>

		<main style = "width: 90%;">
<form id="FormName" action="updatedColors.php" method="post" name="FormName">
<table width="900" border="0" cellspacing="2" cellpadding="0">
	<tr>
		<td width="400">
			<div align="right">
			<label for="default">Default text colour: #</label></div>
		</td>
		<td>
			<input id="default" name="default" type="text" size="30" value="<?php echo $defaultColor ?>" maxlength="6"/></td>
	</tr>
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="paragraph">Paragraph text colour: #</label></div>
		</td>
		<td>
			<input id="paragraph" name="paragraph" type="text" size="30" value="<?php echo $paragraph ?>" maxlength="6"/></td>
	</tr>
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="link">Default link text colour: #</label></div>
		</td>
		<td>
			<input id="link" name="link" type="text" size="30" value="<?php echo $link ?>" maxlength="6"/></td>
	</tr>	
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="linkH">Default link text colour on hover: #</label></div>
		</td>
		<td>
			<input id="linkH" name="linkH" type="text" size="30" value="<?php echo $linkH ?>" maxlength="6"/></td>
	</tr>	
	
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="linkV">Default link text colour after being visited: #</label></div>
		</td>
		<td>
			<input id="linkV" name="linkV" type="text" size="30" value="<?php echo $linkV ?>" maxlength="6"/></td>
	</tr>
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="linkActive">Default link text colour when active: #</label></div>
		</td>
		<td>
			<input id="linkActive" name="linkActive" type="text" size="30" value="<?php echo $linkActive ?>" maxlength="6"/></td>
	</tr>	
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="nav">Link text colour for the navigation bar: #</label></div>
		</td>
		<td>
			<input id="nav" name="nav" type="text" size="30" value="<?php echo $nav ?>" maxlength="6"/></td>
	</tr>		
	
	<tr>
		<td width="400">
			<div align="right">
			<label for="theme1">Theme colour 1: rgb(</label></div>
		</td>
		<td width="285">
			<input id="theme1" name="theme1" type="text" size="30" value="<?php echo $theme1 ?>" maxlength="12"/></td>
			<td style="padding-left: 0px;"><p>)</p></td>
	</tr>		
		
	<tr>
		<td width="400">
			<div align="right">
			<label for="theme2">Theme colour 2: rgb(</label></div>
		</td>
		<td width="285">
			<input id="theme2" name="theme2" type="text" size="30" value="<?php echo $theme2 ?>" maxlength="12"/></td>
			<td style="padding-left: 0px;"><p>)</p></td>
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
