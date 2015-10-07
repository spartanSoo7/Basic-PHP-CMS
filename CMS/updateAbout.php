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
	$qP = "SELECT * FROM about WHERE id = '$id'  ";
	$rsP = mysql_query($qP);
	$row = mysql_fetch_array($rsP);
	extract($row);
	
	$companyname = trim($companyname);
	$number =trim($number);
	$street =trim($street);
	$town =trim($town);
	$city =trim($city);
	$country =trim($country);
	$phone =trim($phone);
	$longdesc = trim($longdesc);
	$shortdescription = trim($shortdescription);
?>
<body>
<div id = "wrapper">

<?php include 'header.php';?>

		<main style = "width: 90%;">
<form id="FormName" action="updatedAbout.php" method="post" name="FormName">
	<table width="448" border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td width="150">
				<div align="right">
					<label for="companyname">Company name</label>
				</div>
			</td>
			
			<td>
				<input id="companyname" name="companyname" type="text" size="50" value="<?php echo $companyname ?>" maxlength="30"/>
			</td>
		</tr>

		<tr>
			<td width="150">
				<div align="right">
					<label for="number">Street number</label>
				</div>
			</td>
			
			<td>
				<input id="number" name="number" type="text" size="50" value="<?php echo $number ?>" maxlength="10"/>
			</td>
		</tr>

		<tr>
			<td width="150">
				<div align="right">
					<label for="street">Street/ Road/ Crescent etc.  name</label>
				</div>
			</td>
			
			<td>
				<input id="street" name="street" type="text" size="50" value="<?php echo $street ?>" maxlength="150"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="town">Town/ Suburb</label>
				</div>
			</td>
			
			<td>
				<input id="town" name="town" type="text" size="50" value="<?php echo $town ?>" maxlength="50"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="city">City</label>
				</div>
			</td>
			
			<td>
				<input id="city" name="city" type="text" size="50" value="<?php echo $city ?>" maxlength="50"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="country">Country</label>
				</div>
			</td>
			
			<td>
				<input id="country" name="country" type="text" size="50" value="<?php echo $country ?>" maxlength="50"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="phone">Phone</label>
				</div>
			</td>
			
			<td>
				<input id="phone" name="phone" type="text" size="50" value="<?php echo $phone ?>" maxlength="15"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="longdesc">Long description</label>
				</div>
			</td>
			
			<td>
				<textarea id="longdesc" name="longdesc" form="FormName" style="width: 435px; height: 143px;"><?php echo $longdesc ?></textarea>
			</td>
		</tr>
		
		<tr>
			<td>
				<h3>Short description shown on the home page</h3>
			</td>
		</tr>
		
				<tr>
			<td width="150">
				<div align="right">
					<label for="shortdescription">Short description</label>
				</div>
			</td>
			
			<td>
				<textarea id="shortdescription" name="shortdescription" form="FormName" style="width: 435px; height: 143px;"><?php echo $shortdescription ?></textarea>
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

