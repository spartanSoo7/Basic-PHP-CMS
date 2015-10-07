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
			<h2>Edit about</h2>

				
<?php			
// Collects data from "about" table 

 $result = mysql_query("SELECT * FROM about");
$num = mysql_num_rows ($result);
 //
 
  echo "<table style='table-layout: fixed;' border='1' align='center' width='90%'>";
  $icount = 0 ;
  
	while ($icount < $num)
	   {
	  	$imagepath = mysql_result($result,$icount,"img");
	  	$id = mysql_result($result,$icount,"id");
	  	echo "<tr><th>Company name</th> <td> " .mysql_result($result,$icount,"companyname"). "</td></tr>";
		echo "<tr><th>Street number</th> <td> " .mysql_result($result,$icount,"number"). "</td></tr>";
	  	echo "<tr><th>Street/ Road/ Crescent etc. name</th> <td> " .mysql_result($result,$icount,"street"). "</td></tr>";
		echo "<tr><th>Town/ Suburb</th> <td> " .mysql_result($result,$icount,"town"). "</td></tr>";
		echo "<tr><th>City</th> <td> " .mysql_result($result,$icount,"city"). "</td></tr>";
		echo "<tr><th>Country</th> <td> " .mysql_result($result,$icount,"country"). "</td></tr>";
		echo "<tr><th>Phone</th> <td> " .mysql_result($result,$icount,"phone"). "</td></tr>";
		echo "<tr><th>Long description</th> <td> " .mysql_result($result,$icount,"longdesc"). "</td></tr>";
		echo "<tr><th colspan = 2><h3 style='margin: 1em 0px;'>Short description shown on the home page</h3></th></tr>";
		echo "<tr><th>Short description</th> <td> " .mysql_result($result,$icount,"shortdescription"). "</td></tr>";
		echo "<tr><td align='center' colspan = 2> <a href=\"updateAbout.php?id=$id\" style ='padding-bottom: 10px; margin: 5px;
display: block;'> Update </a>";
	  	 echo "</tr>";
	  	 $icount++;
	  	}

   echo "</table>";
 

 
mysql_close();
 ?>
		</main>
	</div>
</body>
</html>