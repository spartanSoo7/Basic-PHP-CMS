<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
//Access only via login
require("securitycheck.php");
include 'head.php';
?>
</head>

<body>
	<div id = "wrapper">
	<?php include 'header.php';?>
		
		<main style = "width: 90%">	

			<?php $id = $_GET['id'];?>
	
			<div align="center">
				<h2>Are you sure?</h2>
				<h2><a href="deletedProduct.php?id=<?php echo "$id" ?>">Yes</a> - <a href="editProduct.php">No</a></h2>
			</div>
	
		</main>
	</div>
</body>

</html>
