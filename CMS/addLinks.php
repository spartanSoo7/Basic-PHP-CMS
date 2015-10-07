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
	<form id="FormName" action="addedLinks.php" method="post" name="FormName">
	<table width="448" border="0" cellspacing="2" cellpadding="0">
		<tr>
			<td width="150">
				<div align="right">
					<label for="link">Name</label>
				</div>
			</td>
			
			<td>
				<input id="link" name="link" type="text" size="50" maxlength="150"/>
			</td>
		</tr>

		<tr>
			<td width="150">
				<div align="right">
					<label for="img">Image path</label>
				</div>
			</td>
			<td>
				<input id="img" name="img" type="text" size="50" maxlength="50"/>
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
					<label for="description">Description</label>
				</div>
			</td>
			
			<td>
				<input id="description" name="description" type="text" size="50" maxlength="60"/>
			</td>
		</tr>
			<tr>
				<td width="150"></td>
				<td>
					<input type="submit" name="submitButtonName" value="Add Link"/>
				</td>
			</tr>
		
		</table>
		<a href='editLinks.php'>Go back</a> 
	</form>
</main>
</body>

</html>



