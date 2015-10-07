<?php include 'head.php';?>

<script type="text/javascript">
slidePrefix            = "slide-";
slideControlPrefix     = "slide-control-";
slideHighlightClass    = "highlight";
slidesContainerID      = "slides";
slidesControlsID       = "slides-controls";
slideDelay             = 3000;
slideAnimationInterval = 20;
slideTransitionSteps   = 10;

function setUpSlideShow()
{
    // collect the slides and the controls
    slidesCollection = document.getElementById(slidesContainerID).children;
    slidesControllersCollection = document.getElementById(slidesControlsID).children;
 
    totalSlides = slidesCollection.length;
 
    if (totalSlides < 2) return;
 
    //go through all slides
    for (var i=0; i < slidesCollection.length; i++)
    {
        // give IDs to slides and controls
        slidesCollection[i].id = slidePrefix+(i+1);
        slidesControllersCollection[i].id = slideControlPrefix+(i+1);
 
        // attach onclick handlers to controls, highlight the first control
        slidesControllersCollection[i].onclick = function(){clickSlide(this);};
 
        //hide all slides except the first
        if (i > 0)
            slidesCollection[i].style.display = "none";
        else
            slidesControllersCollection[i].className = slideHighlightClass;
    }
 
    // initialize vars
    slideTransStep= 0;
    transTimeout  = 0;
    crtSlideIndex = 1;
 
    // show the next slide
    showSlide(2);
}

function showSlide(slideNo, immediate)
{
	// don't do any action while a transition is in progress
    if (slideTransStep != 0 || slideNo == crtSlideIndex)
        return;
 
    clearTimeout(transTimeout);
 
	// get references to the current slide and to the one to be shown next
    nextSlideIndex = slideNo;
    crtSlide = document.getElementById(slidePrefix + crtSlideIndex);
    nextSlide = document.getElementById(slidePrefix + nextSlideIndex);
    slideTransStep = 0;
 
    // start the transition now upon request or after a delay (default)
    if (immediate == true)
        transSlide();
    else
        transTimeout = setTimeout("transSlide()", slideDelay);
}

function clickSlide(control)
{
    showSlide(Number(control.id.substr(control.id.lastIndexOf("-")+1)),true);
}


 
function transSlide()
{
    // make sure the next slide is visible (albeit transparent)
    nextSlide.style.display = "block";
 
    // calculate opacity
    var opacity = slideTransStep / slideTransitionSteps;
 
    // fade out the current slide
    crtSlide.style.opacity = "" + (1 - opacity);
    crtSlide.style.filter = "alpha(opacity=" + (100 - opacity*100) + ")";
 
    // fade in the next slide
    nextSlide.style.opacity = "" + opacity;
    nextSlide.style.filter = "alpha(opacity=" + (opacity*100) + ")";
 
    // if not completed, do this step again after a short delay
    if (++slideTransStep <= slideTransitionSteps)
        transTimeout = setTimeout("transSlide()", slideAnimationInterval);
    else
    {
        // complete
        crtSlide.style.display = "none";
        transComplete();
    }
}

function transComplete()
{
    slideTransStep = 0;
    crtSlideIndex = nextSlideIndex;
 
    // for IE filters, removing filters re-enables cleartype
    if (nextSlide.style.removeAttribute)
        nextSlide.style.removeAttribute("filter");
 
    // show next slide
    showSlide((crtSlideIndex >= totalSlides) ? 1 : crtSlideIndex + 1);
 
    //unhighlight all controls
    for (var i=0; i < slidesControllersCollection.length; i++)
        slidesControllersCollection[i].className = "";
 
    // highlight the control for the next slide
    document.getElementById("slide-control-" + crtSlideIndex).className = slideHighlightClass;
}
</script>

</head>


	<div id = "wrapper">

<?php include 'header.php';?>
		
	<main>	
		<body onload="setUpSlideShow()">
			<div id="slideshow">
				<div id="slides">
				
<?php			
// Collects data from "slideShow" table 
 $data = mysql_query("SELECT * FROM slideShow") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<div class='slide'>"; 
 Print "<img src='img/".$info['img'] . "' style = 'width: 100%;'/>"; 
 Print "<div id='slideDescrption'>".$info['description'] . "</div>"; 
 Print "</div>"; 
 } 

 ?>
				</div>
		
				<div id="slides-controls">
<?php			
// Collects data from "slideShow" table 
 $data = mysql_query("SELECT * FROM slideShow") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 { 
  Print "<a href='#'>".$info['id'] . "</a>"; 
 } 
 ?>					

				</div>
			</div>	
				
			<div id = "rightText">
				<p>
					<?php			
// Collects data from "about" table 
 $data = mysql_query("SELECT * FROM about") 
 or die(mysql_error()); 
 
 while($info = mysql_fetch_array( $data )) 
 { 
  Print $info['shortdescription']; 
 } 
					?>	
				</p>
			</div>
		</body>
	</main>
		
	</div>	
</html>