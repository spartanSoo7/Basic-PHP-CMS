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
			<h2>Edit Products</h2>

				
<?php			
// Collects data from "product" table 

 $result = mysql_query("SELECT * FROM product");
$num = mysql_num_rows ($result);
 //
 
  echo "<table border='1' align='center' width='100%'>";
  echo "<tr><th>Name</th><th>Image</th><th>Alt (if image is not shown)</th><th>Width (px)</th><th>Price ($)</th><th>Sold by the</th><th>Description</th><th>Update/ Delete</th></tr>";
  $icount = 0 ;
  
	while ($icount < $num)
	   {
	  	$imagepath = mysql_result($result,$icount,"img");
	  	$id = mysql_result($result,$icount,"id");
	  	echo "<tr>"; 
	  	echo "<td> " .mysql_result($result,$icount,"name"). "</td>";
		echo "<td align='center' style='width:15%'><img src=\"../img/$imagepath\"  style = 'width: 90%;'></td>";
		echo "<td> " .mysql_result($result,$icount,"alt"). "</td>";
		echo "<td> " .mysql_result($result,$icount,"width"). "</td>";
		echo "<td> " .mysql_result($result,$icount,"price"). "</td>";
		echo "<td> " .mysql_result($result,$icount,"unit"). "</td>";
		echo "<td>" .mysql_result($result,$icount,"description"). "</td>";

	  	echo "<td align='center'> <a href=\"updateProduct.php?id=$id\" style ='padding-bottom: 10px; margin: 5px;
display: block;'> Update </a><a href=\"deleteProduct.php?id=$id\" style ='padding-bottom: 10px; margin: 10px;
display: block;'>Delete</a></td>";
	  	 echo "</tr>";
	  	 $icount++;
	  	}
		echo "<tr><td colspan='8' align='center'><a href='addProduct.php'> Add a new product  </a></td></tr>";
		echo "<tr><td colspan='8' align='center'> You have ".$icount." products being displayed on the website</td> </tr>";

   echo "</table>";
 

 
mysql_close();
 ?>
		</main>
	</div>
</body>
</html>