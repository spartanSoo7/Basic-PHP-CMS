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
	<form id="FormName" action="addedSlide.php" method="post" name="FormName">
		<table width="448" border="0" cellspacing="2" cellpadding="0" width="60%" >
			<tr>
				<th colspan="2" align="center"> Add new record</th>
			</tr>
			<tr>
				<td width = "150">
					<div align="right">
						<label for="Description">Description</label>
					</div>
				</td>
				<td>
					<input id="Description" name="Description" type="text" size="50" value="" maxlength="50"/>
				</td>
			</tr>
			<tr>
				<td class="auto-style1" >Image file name</td>
				<td>
					<input id="imagepath" name="imagepath" type="text" size="25" value="" maxlength="50"/>
				</td>
			</tr>
			<tr>
				<td width="150"></td>
				<td>
					<input type="submit" name="submitButtonName" value="Add slide"/>
				</td>
			</tr>
		
		</table>
		<a href='editIndex.php'>Go back</a> 
	</form>
</main>
</body>

</html>
