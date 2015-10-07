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
			<h2>Edit users</h2>

				
<?php			
// Collects data from "admin" table 

 $result = mysql_query("SELECT * FROM admin");
$num = mysql_num_rows ($result);
 //
 
echo "<table border='1' align='center' width='50%'>";
  echo "<tr> <th>User</th><th>Password</th><th>Update/Delete</th></tr>";
  $icount = 0 ;
  
	while ($icount < $num)
	   {
	  	 $id = mysql_result($result,$icount,"id");
	  	 echo "<tr>"; 
	  	 echo "<td> " .mysql_result($result,$icount,"Username"). "</td>";
		 echo "<td>*********</td>";
	  	 echo "<td align='center'> <a href=\"updateOtherUser.php?id=$id\" style ='padding-bottom: 10px; margin: 5px;
display: block;'> Update </a><a href=\"deleteOtherUser.php?id=$id\" style ='padding-bottom: 10px; margin: 10px;
display: block;'>Delete</a></td>";
	  	 echo "<tr>";
	  	 $icount++;
	  	}
		echo "<tr><td colspan='5' align='center'><a href='addOtherUser.php'> Add a new user  </a></td></tr>";
		echo "<tr><td colspan='5' align='center'> You have ".$icount." one user </td> </tr>";

   echo "</table>";
 

 
mysql_close();
 ?>
		</main>
	</div>
</body>
</html>