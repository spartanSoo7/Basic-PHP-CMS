 <?php
 include_once("CMS/databaselogin.php");
?>


<?php			
// Collects data from "header" table 
 $data = mysql_query("SELECT * FROM header") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 {
 Print "<header>"; 
 print "<style>
 header {background: url('" .$info['headerIMG'] . "') no-repeat top left; background-size: cover; } 
 h1 {color:" .$info['fontColour'] . "; </style>";

 Print "<div id = 'fixH1'>"; 
 Print "<h1>" .$info['Title'] . "</h1>";
 Print "</div>"; 
 } 

 ?>
		
			
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
<script type="text/javascript" language="javascript">		
$(document).ready(function () {
    if(window.location.href.indexOf("index") > -1) {
	   document.getElementById('linkHome').classList.add('current');
	}
	else{
		document.getElementById('linkHome').classList.remove('current');
    }
	
	
	if(window.location.href.indexOf("products") > -1) {
	   document.getElementById('linkProducts').classList.add('current');
	}
	else{
		document.getElementById('linkProducts').classList.remove('current');
    }
	
	
	if(window.location.href.indexOf("about") > -1) {
	   document.getElementById('linkAbout').classList.add('current');
	}
	else{
		document.getElementById('linkAbout').classList.remove('current');
    }
	
	
	
	if(window.location.href.indexOf("contact") > -1) {
	   document.getElementById('linkContact').classList.add('current');
	}
	else{
		document.getElementById('linkContact').classList.remove('current');
    }
	
	if(window.location.href.indexOf("usefulLinks") > -1) {
	   document.getElementById('linkUseful').classList.add('current');
	}
	else{
		document.getElementById('linkUseful').classList.remove('current');
    }
	

});

</script>	
		
			<nav>
				<ul>
				<li><a href="index.php" id = "linkHome">Home</a></li>
				<li><a href="products.php" id = "linkProducts">Products</a></li>
				<li><a href="about.php" id = "linkAbout">About</a></li>
				<li><a href="contact.php" id = "linkContact">Contact</a></li>
				<li><a href="usefulLinks.php" id = "linkUseful">Useful Links</a></li>
				</ul>
			</nav>
		
		</header>