<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Computer Society of India SIESGST chapter</title>
<meta http-equiv="Content-Language" content="en">
<meta name="description" content="SIES Graduate school of Technology is proud to introduce Computer Society of India SIES Chapter.">
<meta name="keywords" content="computer society of india, CSI, SIES, SIESGST, Nerul, Workshop, Chapter, sies graduate school of technology, workshop">
<!-- Meta Tags Created With: STW Meta Tag Builder http://www.scrubtheweb.com/abs/ -->
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.flip.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.lavalamp-1.3.5.js"></script>

<script type="text/javascript">
 
    $(function() {
        $('ul#menu1').lavaLamp({ startItem: 3 });
    });
 
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32677985-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="main_header">            
    <div id="site_title">        
        <a href=""></a>        
    </div> <!-- end of site_title -->    
	<div class = "cleaner"></div>
</div> <!-- end of header -->

<div id="menu_wrapper">
	
    <div id="menu">
    <ul id="menu1">
	<li><a href="../index.html">Home</a></li>
    <li><a href="../act.html">Activities</a></li>
    <li><a href = "../g1/" >Gallery</a></li>
	<li  class="current"><a href="../sponsor/">Sponsors</a></li>
	<li><a href="../impulse.html">Impulse</a></li>
	<li><a href="../inno.html">Innovations</a></li>	
    <li><a href="../contactus.html">Contact us</a></li>
    <li><a href="../aboutus.html">About us</a></li>
	</ul>
	</div>
</div> <!-- end of menu -->


<div id="main"> <span class="bottom"></span>
	
<div id="content">
    
    	<div class="content_box">

<?php

// Each sponsor is an element of the $sponsors array:

$sponsors = array(
	array('ASUS','An International brand in the field of computers and hardware.','http://www.asus.com/'),
	array('GlobalOpportunities','Higher Education Consultant India for Study in UK, Study in Australia, Study in Canada, Study in USA, Study in New Zealand.','http://www.global-opportunities.net/'),
	array('ProAvenues','Redefining Learning Changing Lives. GATE Coaching by IITians','http://www.proavenues.com/')
);


// Randomizing the order of sponsors:

shuffle($sponsors);

?>



<div id="mainwqer">

	<div class="sponsorListHolder">

		
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="../sponsor/'.$company[0].'.png" alt="More about '.$company[0].'" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'">'.$company[2].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>

        
        
    	<div class="clear"></div>
    </div>

</div>
		</div>
    
    </div>
    

    <div class="cleaner"></div>
</div> <!-- end of main -->



<div id="footer">
&copy; All Rights Reserved. <br> CSI SIES GST Student Branch <br>
</div>

</body>
</html>
