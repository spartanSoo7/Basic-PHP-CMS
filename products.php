<?php include 'head.php';?>

</head>

<body>
	<div id = "wrapper">

<?php include 'header.php';?>
		
		<main style="width: 90%;">
			<h1>Products</h1>
		<div id = "centreBox">

			
<?php			
// Collects data from "product" table 
 $data = mysql_query("SELECT * FROM product") 
 or die(mysql_error()); 
 
while($info = mysql_fetch_array( $data )) 
{
Print "<div id = '" .$info['ID'] . "Box' class = 'productBox'>";
Print "<img src='img/".$info['img'] . "' alt='".$info['alt'] . "' width='" .$info['width'] . "px' style='margin: 0px 20px 10px 0px; float:left; width: 180px;'>";
Print "<div id = '" .$info['ID'] . "SeeMore'class = 'seeMore'>(Click to see more)</div><p>" .$info['name'] . "<br />";
Print "($".$info['price'] . " per " .$info['unit'] . ") <br /> <br />";
Print  "<div id = '" .$info['ID'] . "Descr' class = 'description'>" .$info['description'] . " </div> </p>"; 
Print "</div>";

Print "<script type='text/javascript' language='javascript'>";
Print "$('#" .$info['ID'] . "Box').on('click', function() {";
Print "$(this).toggleClass('clicked');";
Print "$('#" .$info['ID'] . "SeeMore').toggleClass('hid');";
Print "$('#" .$info['ID'] . "Descr').toggleClass('vis');";
Print "});";
Print "</script>";
} 
?>

		</div>	
		</main>
		
	</div>	
</body>		