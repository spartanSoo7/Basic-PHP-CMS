 <?php
 include_once("databaselogin.php");
?>


<?php			
// Collects data from "header" table 
 $data = mysql_query("SELECT * FROM header") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 {
 Print "<header>"; 
 print "<style>
 header {background: url('../" .$info['headerIMG'] . "') no-repeat top left; background-size: cover; } 
 h1 {color:" .$info['fontColour'] . "; </style>";

 Print "<div id = 'fixH1'>"; 
 Print "<h1>" .$info['Title'] . "<br / >Admin</h1>";
 Print "</div>"; 
 } 

 ?>
		
			
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
<script type="text/javascript" language="javascript">		
$(document).ready(function () {
    if(window.location.href.indexOf("Index") > -1) {
	   document.getElementById('Index').classList.add('current');
	}
	else{
		document.getElementById('Index').classList.remove('current');
    }
	
	
	if(window.location.href.indexOf("Products") > -1) {
	   document.getElementById('Products').classList.add('current');
	}
	else{
		document.getElementById('Products').classList.remove('current');
    }
	
	
	if(window.location.href.indexOf("About") > -1) {
	   document.getElementById('About').classList.add('current');
	}
	else{
		document.getElementById('About').classList.remove('current');
    }
	
	
	
	if(window.location.href.indexOf("Other") > -1) {
	   document.getElementById('other').classList.add('current');
	}
	else{
		document.getElementById('other').classList.remove('current');
    }
	
	if(window.location.href.indexOf("Links") > -1) {
	   document.getElementById('Links').classList.add('current');
	}
	else{
		document.getElementById('Links').classList.remove('current');
    }
	

});

</script>	
		
			<nav>
				<ul>
				<li><a href="editIndex.php" id = "Index">Home</a></li>
				<li><a href="editProducts.php" id = "Products">Products</a></li>
				<li><a href="editAbout.php?id=1" id = "About">About</a></li>
				<li><a href="editLinks.php" id = "Links">Useful Links</a></li>
				<li><a href="Other.php" id = "other">Other</a></li>
				<li><a href="logout.php" class = "logOut">Log out</a></li>
				</ul>
			</nav>
		
		</header>