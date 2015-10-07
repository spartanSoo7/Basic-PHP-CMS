<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name = "keywords" content = "Capital Organics, Vegetables, Fruit, Food, Products, Organic, Healthy, Organics, New Zealand, Buy"/>
<meta name = "description" content = "Capital Organics supply healthy organic food and products. Based in New Zealand, Capital Organics sell Vegetables, Fruit and other healthy food and products. Buy Healthy food for the whole family"/>

<?php
 include_once("databaselogin.php");
			
// Collects data from "header" table 
 $data = mysql_query("SELECT * FROM header") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<title>" .$info['Title'] . "</title>"; 
 }

 ?>


<link rel="shortcut icon" href="../img/favicon.ico" />

<link href="../main.css" rel="stylesheet" type="text/css">

<?php			
// Collects data from "header" table 
 $data = mysql_query("SELECT * FROM header") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 {

 print "<style >
 html {background: url('../" .$info['backgroundIMG'] . "') repeat left top; }";
 }
 
 // Collects data from "colourtable" table 
 $data = mysql_query("SELECT * FROM colourtable") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 {
 print "html {color: #" .$info['defaultColor'] . "; }";
 print "h3 {color: #" .$info['defaultColor'] . "; }";
 print "p{ color: #" .$info['paragraph'] . "; }";
 print "li a{ color: #" .$info['link'] . "; }";
 print "a{ color: #" .$info['link'] . "; }";
 print "a:hover{ color: #" .$info['linkH'] . "; }";
 print "a:vistited{ color: #" .$info['linkV'] . "; }";
 print "a:active{ color: #" .$info['linkActive'] . "; }";
 print "main{ background-color: rgba(" .$info['theme1'] . ",0.8);}";
 print "nav li { width: 16.5%;}";
 print "nav li a{ padding: 1px 2%; color: #" .$info['nav'] . "; background-color: rgba(" .$info['theme2'] . ",0.8); border: 2px solid rgba(" .$info['theme2'] . ",1);}";
 print "nav li a:hover { background-color: rgba(" .$info['theme1'] . ",0.8); border: 2px solid rgba(" .$info['theme1'] . ",0.8);}";
 print "nav li a:visited{ color: #" .$info['linkV'] . ";}";
 print "nav li a:active{ background-color: rgba(" .$info['theme1'] . ",0.8); border: 2px solid rgba(" .$info['theme1'] . ",0.8);}";
 print "nav li a.current{ background-color: rgba(" .$info['theme1'] . ",0.8); border: 2px solid rgba(" .$info['theme1'] . ",0.8);}";
 print "nav li a.logOut{ background-color: rgba(255, 79, 79, 0.8); color: rgba(255, 246, 232, 1); border: 2px solid rgba(247, 19, 19, 0.8);}";
 print "#slideDescrption{ background-color: rgba(" .$info['theme2'] . ",0.8); color: #" .$info['defaultColor'] . ";}";
 print "#slides-controls a{ background-color: rgba(" .$info['theme2'] . ",1); border:1px solid rgba(" .$info['theme1'] . ",1);}";
 print "#slides-controls a:hover{ background-color: rgba(" .$info['theme2'] . ",1);}";
 print "#slides-controls a.highlight{ background: rgba(" .$info['theme1'] . ",1); border:1px solid rgba(" .$info['theme2'] . ",1);}";
 print ".productBox{ border: 2px solid rgba(" .$info['theme2'] . ",0.8); border-radius: 2px; background-color: rgba(" .$info['theme2'] . ",0.4);}";
 print "#contactButton{ background-color: rgba(" .$info['theme2'] . ",0.9); border: 2px solid rgba(" .$info['theme2'] . ",0.8); border-radius: 2px;}";
 print "#contactButton:hover{ background-color: rgba("  .$info['theme1'] . ",0.8); border: 2px solid rgba(" .$info['theme1'] . ",0.8);}";
 print "#links{ border: 2px solid rgba(" .$info['theme2'] . ",0.8); border-radius: 2px; background-color: rgba(" .$info['theme2'] . ",0.4);}";
 print "#links:hover{background-color: rgba(" .$info['theme1'] . ",0.8); border: 2px solid rgba(" .$info['theme1'] . ",0.8); }";
 print " </style>";
 }
 
 ?>