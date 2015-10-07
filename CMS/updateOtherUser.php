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
	$qP = "SELECT * FROM admin WHERE id = '$id'  ";
	$rsP = mysql_query($qP);
	$row = mysql_fetch_array($rsP);
	extract($row);
	$Username = trim($Username);
	$Password =trim($Password);
?>
<body>
<div id = "wrapper">

<?php include 'header.php';?>

		<main style = "width: 90%;">
<form id="FormName" action="updatedOtherUser.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">
<tr><td width="150">
<div align="right">
<label for="Username">Username</label></div>
</td>
<td>
<input id="Username" name="Username" type="text" size="30" value="<?php echo $Username ?>" maxlength="35"/></td>
</tr>
<tr>
<td><div align="right">
<label for="Password">Password</label></div></td>
<td>
<input id="Password" name="Password" type="Password" size="30" value="<?php echo $Password ?>" maxlength="50"/></td>
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
