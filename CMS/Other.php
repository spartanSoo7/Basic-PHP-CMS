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
			<h2>Other things you can edit:</h2>
			<ul>
			<li><a href="updateColors.php">Customise the website colours</li>
			
			<li><a href="updateHeader.php">Change the Title and the header and background image for the web pages</a></li>
			
			<li><a href="editOtherUser.php">Edit users</a></li>
			</ul>
		</body>
		</main>
	</div>
</html>