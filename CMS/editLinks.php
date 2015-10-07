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
			<h2>Edit Links</h2>

				
<?php			
// Collects data from "usefullinks" table 

 $result = mysql_query("SELECT * FROM usefullinks");
$num = mysql_num_rows ($result);
 //
 
  echo "<table class = 'linkPage' border='1' align='center' width='90%' style='table-layout: fixed;'>";
  echo "<tr><th>Link address</th><th>Image</th><th>Alt (if image is not shown)</th><th>Width (px)</th><th>Description</th><th>Update/ Delete</th></tr>";
  $icount = 0 ;
  
	while ($icount < $num)
	   {
	  	$imagepath = mysql_result($result,$icount,"img");
	  	$id = mysql_result($result,$icount,"id");
	  	echo "<tr>"; 
	  	echo "<td style = 'word-wrap: break-word;'> " .mysql_result($result,$icount,"link"). "</td>";
		echo "<td align='center' style='width:15%'><img src=\"../img/linkLogo/$imagepath\"  style = 'width: 90%;'></td>";
		echo "<td> " .mysql_result($result,$icount,"alt"). "</td>";
		echo "<td> " .mysql_result($result,$icount,"width"). "</td>";
		echo "<td>" .mysql_result($result,$icount,"description"). "</td>";

	  	echo "<td align='center'> <a href=\"updateLinks.php?id=$id\" style ='padding-bottom: 10px; margin: 5px;
display: block;'> Update </a><a href=\"deleteLinks.php?id=$id\" style ='padding-bottom: 10px; margin: 10px;
display: block;'>Delete</a></td>";
	  	 echo "</tr>";
	  	 $icount++;
	  	}
		echo "<tr><td colspan='8' align='center'><a href='addLinks.php'> Add a new link  </a></td></tr>";
		echo "<tr><td colspan='8' align='center'> You have ".$icount." links being displayed on the website</td> </tr>";

   echo "</table>";
 

 
mysql_close();
 ?>
		</main>
	</div>
</body>
</html>