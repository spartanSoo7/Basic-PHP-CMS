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
	<form id="FormName" action="addedOtherUser.php" method="post" name="FormName">
		<table width="448" border="0" cellspacing="2" cellpadding="0" width="60%" >
			<tr>
				<th colspan="2" align="center"> Add new record</th>
			</tr>
			<tr>
				<td width = "150">
					<div align="right">
						<label for="Username">User name</label>
					</div>
				</td>
				<td>
					<input id="Username" name="Username" type="text" size="50" value="" maxlength="50"/>
				</td>
			</tr>
			<tr>
				<td width = "150">
					<div align="right">
						<label for="Password">Password</label>
					</div>
				</td>
				<td>
					<input id="Password" name="Password" type="password" size="50" value="" maxlength="50"/>
				</td>
			</tr>
			<tr>
				<td width="150"></td>
				<td>
					<input type="submit" name="submitButtonName" value="Add User"/>
				</td>
			</tr>
		
		</table>
		<a href='editOtherUser.php'>Go back</a> 
	</form>
</main>
</body>

</html>
