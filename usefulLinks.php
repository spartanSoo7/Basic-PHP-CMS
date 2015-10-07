<?php include 'head.php';?>

</head>

<body>
	<div id = "wrapper">

<?php include 'header.php';?>
		
		<main>
		<div id = "centreBox" style="margin-top: 50px;">
		
<?php			
// Collects data from "usefullinks" table 
 $data = mysql_query("SELECT * FROM usefullinks") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 {
 Print "<a href='".$info['link'] . "'>";
 Print "<div id = 'links'>"; 
 Print "<img src='img/linkLogo/".$info['img'] . "' alt='".$info['alt'] . "' width='" .$info['width'] . "px' style='margin: 6px 0px'>"; 
 Print "<p>".$info['description'] . "</p>"; 
 Print "</div> </a>"; 
 } 

 ?>

		</div>	
		</main>
		
	</div>	
</body>		