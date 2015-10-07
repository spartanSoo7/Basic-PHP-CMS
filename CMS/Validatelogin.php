<html>
<head>
Admin Login
</head>
<body>
<br><br>
<?php

include_once("databaselogin.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password)
{
	$query = mysql_query("SELECT * FROM admin");
	
	$numrow = mysql_num_rows($query);
	
	if ($numrow != 0)
		{
		while ($row = mysql_fetch_assoc($query))
			{
			 $dbusername = $row['Username'];
			 $dbpassword = $row['Password'];
			}
		if ($username==$dbusername&&$password==$dbpassword)
			{
			header ("Location: index.php");
			$_SESSION['username'] = $dbusername;
			$_SESSION['logininfo'] = "1";
				
			}
			else 
			{
					header ("Location: login.php");
			}
		}
		else echo "That user doesn't exist!";
	}
else
{
	header ("Location: adminlogin.php");
} 
	
?>
</body>
</html>