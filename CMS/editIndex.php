<?php
//Access only via login
require("securitycheck.php");
?>

<?php
 include_once("databaselogin.php");
 include 'head.php';
 ?>


</head>


	<div id = "wrapper">

<?php include 'header.php';?>
		
	<main style = "width: 90%">	
		<body>
			<h2>Edit Slide Show</h2>

				
<?php			
// Collects data from "slideShow" table 

$result = mysql_query("SELECT * FROM slideshow");
$num = mysql_num_rows ($result);
 //
 
  echo "<table border='1' align='center' width='50%'>";
  echo "<tr> <th>Description</th><th>Image</th><th>Update/Delete</th></tr>";
  $icount = 0 ;
  
	while ($icount < $num)
	   {
	  	 $imagepath = mysql_result($result,$icount,"img");
	  	 $id = mysql_result($result,$icount,"id");
	  	 echo "<tr>"; 
	  	 echo "<td> " .mysql_result($result,$icount,"description"). "</td>";
	  	 echo "<td align='center'><img src=\"../img/$imagepath\"  style = 'width: 90%;'></td>";
	  	 echo "<td align='center'> <a href=\"updateIndex.php?id=$id\" style ='padding-bottom: 10px; margin: 5px;
display: block;'> Update </a><a href=\"deleteIndex.php?id=$id\" style ='padding-bottom: 10px; margin: 10px;
display: block;'>Delete</a></td>";
	  	 echo "<tr>";
	  	 $icount++;
	  	}
		echo "<tr><td colspan='5' align='center'><a href='addSlide.php'> Add a new slide  </a></td></tr>";
		echo "<tr><td colspan='5' align='center'> You have ".$icount." images in your slideshow </td> </tr>";

   echo "</table>";
 

 
mysql_close();
 ?>
	<br />
	<p>The small description about the company that is  on the  on the index page, is changeable on the About page</p>
		</body>
	</main>
		
	</div>	
</html>