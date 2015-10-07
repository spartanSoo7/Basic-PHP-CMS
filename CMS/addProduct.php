<?php
//Access only via login
require("securitycheck.php");
include 'head.php';
?>
</head>
<body>
<div id = "wrapper">

<?php include 'header.php';?>
<main>
	<form id="FormName" action="addedProduct.php" method="post" name="FormName">
		<table width="448" border="0" cellspacing="2" cellpadding="0" width="60%" >
			<tr>
			<td width="150">
				<div align="right">
					<label for="name">Name</label>
				</div>
			</td>
			
			<td>
				<input id="name" name="name" type="text" size="50" maxlength="50"/>
			</td>
		</tr>

		<tr>
			<td width="150">				
				<div align="right">
					<label for="imagepath">Image path</label>
				</div></td>
			<td>
				<input id="imagepath" name="imagepath" type="text" size="50" maxlength="50"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="alt">Alt (if image is not shown)</label>
				</div>
			</td>
			
			<td>
				<input id="alt" name="alt" type="text" size="50" maxlength="50"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="width">Width (px)</label>
				</div>
			</td>
			
			<td>
				<input id="width" name="width" type="text" size="50" maxlength="3"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="price">Price ($)</label>
				</div>
			</td>
			
			<td>
				<input id="price" name="price" type="text" size="50" maxlength="20"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="unit">Unit (Sold by the)</label>
				</div>
			</td>
			
			<td>
				<input id="unit" name="unit" type="text" size="50" maxlength="20"/>
			</td>
		</tr>
		
		<tr>
			<td width="150">
				<div align="right">
					<label for="Description">Description</label>
				</div>
			</td>
			
			<td>
				<textarea id="Description" name="Description" form="FormName" style="width: 435px; height: 143px;"></textarea>
			</td>
		</tr>
			<tr>
				<td width="150"></td>
				<td>
					<input type="submit" name="submitButtonName" value="Add product"/>
				</td>
			</tr>
		
		</table>
		<a href='editProducts.php'>Go back</a> 
	</form>
</main>
</body>

</html>
