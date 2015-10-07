<?php include 'head.php';?>

</head>

<body>
	<div id = "wrapper">

<?php include 'header.php';?>
		
		<main>
			
			<h2>Capital Organics</h2>
			
			<div id = "address">
				<h3>Address:</h3>
				
				<?php			
// Collects data from "about" table 
 $data = mysql_query("SELECT * FROM about") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 {
 Print "<p>" .$info['number'] . " " .$info['street'] . "<br />"; 
 Print $info['town'] . "<br />"; 
 Print $info['city'] . "<br />";
 Print $info['country'] . "<br /> <br /> </p>";
 Print "<h3> Phone: </h3> <p>" .$info['phone'] . "</p>"; 
 } 
 ?>

			</div>
			
			<div id = "pText">
				<p>
					<?php			
// Collects data from "about" table 
 $data = mysql_query("SELECT * FROM about") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 {
 Print $info['longdesc'];  
 } 
 ?>
				</p>
			</div>
		</main>
		
	</div>	
</body>		