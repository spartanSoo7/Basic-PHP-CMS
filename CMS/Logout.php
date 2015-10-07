<?php
//Access only via login
require("securitycheck.php");
include 'head.php';
?>
</head>

	<div id = "wrapper">
	<?php include 'header.php';?>
		
		<main style = "width: 90%">	
		<body>
<?php
session_start();

session_destroy();
echo "Logout successful, <a href='../index.php'>Click here</a> to see the updated website";
?>
</body>
</main>
</div>
</html>