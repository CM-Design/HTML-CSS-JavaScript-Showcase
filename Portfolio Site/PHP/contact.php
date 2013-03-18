<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="images/Identity_Avatar.png" />

<!-- *** JAVASCRIPT FOR NAVBAR FUNCTIONS *** -->
	<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<!-- *** END NAVBAR FUNCTIONALITY *** -->

<!-- *** JQUERY 1.6.3 LINK *** -->
	<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
<!-- *** END JQUERY *** -->
    
<!-- *** FADE IN SCRIPT *** -->
	<script type="text/javascript">
var fade_in_from = 0;
var fade_out_from = 10;
function fadeIn(element){
	var target = document.getElementById(element);
	target.style.display = "block";
	var newSetting = fade_in_from / 10;
	target.style.opacity = newSetting;
	// opacity ranges from 0 to 1
	fade_in_from++;
	if(fade_in_from == 10){
		target.style.opacity = 1;
		clearTimeout(loopTimer);
		fade_in_from = 0;
		return false;
	}
	var loopTimer = setTimeout('fadeIn(\''+element+'\')',50);
}
</script>
<!-- *** END FADE IN SCRIPT *** -->

<!-- *** LIGHTBOX SCRIPTS *** -->
    <script type="text/javascript">
	$(function() {

        $('#gallery a').lightBox();
    });
	</script>
    
	<!-- *** LIGHTBOX JS LINKS *** -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>   
<!-- *** END LIGHTBOX SCRIPTS *** -->

<!-- *** CSS STYLE SHEETS *** -->
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
	<!-- CSS sheet format for text and body -->
	<link href="css/style.css" rel="stylesheet" type="text/css" /> 
	<link href="css/index.css" rel="stylesheet" type="text/css">
    <!-- PORTFOLIO LAYOUT CSS -->
    <link href="css/Gallery.css" rel="stylesheet" type="text/css">
<noscript>
<link href="css/noscript.css" rel="stylesheet" type="text/css"> -->
</noscript>
<!-- *** END CSS STYLE SHEETS *** -->
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/navbar_hover states/navbar_blog_2.gif','images/navbar_hover states/navbar_portfolio_2.gif','images/navbar_hover states/navbar_about_2.gif','images/navbar_hover states/navbar_contact_2.gif','images/navbar_hover states/navbar_home_active.gif')">
<div id="main-content">

    <!-- *** NAVBAR *** -->	
  <div id="blog_link">
    <a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image76','','images/navbar_hover states/navbar_blog_2.gif',1)">
    <img src="images/navbar_blog.gif" alt="BLOG" name="Image76" width="65" height="47" border="0"></a>
  </div>
    <div id="portfolio_link">
    <a href="portfolio.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image77','','images/navbar_hover states/navbar_portfolio_2.gif',1)"><img src="images/navbar_portfolio.gif" alt="PORTFOLIO" name="Image77" width="89" height="47" border="0"></a>
    </div>
    <div id="about_link">
    <a href="about.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image78','','images/navbar_hover states/navbar_about_2.gif',1)"><img src="images/navbar_about.gif" alt="ABOUT" name="Image78" width="65" height="47" border="0"></a>
    </div>
    <div id="contact_link">
    <a href="contact.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image79','','images/navbar_hover states/navbar_contact_2.gif',1)"><img src="images/navbar_contact.gif" alt="CONTACT" name="Image79" width="89" height="47" border="0"></a>
	</div>
    <!-- *** END NAVBAR *** -->

	<!-- *** IMAGES AND CONTENT *** -->
    		<div id="logo_top"><img src="images/log_top.jpg" width="213" height="47" alt=""></div>
			<div id="logo"><h2 id="logo_name">Chris Medykiewicz<br> <h3 id="logo_title">Graphic Design</h3></h2></div>
			<div id="logo_bot"><img src="images/logo_bottom.jpg" width="213" height="75" alt=""></div>
			
    <div id="thank_you"> 
      <img src="images/email_thank_you.jpg" width="600" height="450" alt="Thank You" />
    <div id="links">
    <div id="links_2">
    <a href="http://cmdesign89.blogspot.com/"><img src="images/blogger_2.png" width="60" height="60" alt="BLOGGER"></a> &nbsp;
    <a href="http://www.behance.net/design89"><img src="images/behance_2.png" width="60" height="60" alt="BEHANCE"></a> &nbsp;
    <a href="http://www.linkedin.com/pub/chris-medykiewicz/45/a00/581"><img src="images/linkedin_2.png" width="60" height="60" alt="LINKEDIN"></a>
    </div>
    </div>
    </div>
			<!-- *** END CONTACT FORM *** -->
			</div>
			<div id="label"><img src="images/Website-Portfolio_CONTACT.jpg" width="187" height="338" alt=""></div>
			<div id="left_vertice"><img src="images/left_vertice.jpg" width="12" height="300" alt=""></div>
			<div id="footer"><img src="images/footer.jpg" width="826" height="20" alt=""></div>
			<div id="copyright" style="font-family:Arial, Helvetica, sans-serif; font-size:9px; font-weight:100; color:#9d9d9d;">Copyright 2013</div>
			<div id="name" style="font-family:Arial, Helvetica, sans-serif; font-size:9px; font-weight:100; color:#9d9d9d;">Chris Medykiewicz Graphic Design</div>
<!-- *** END IMAGES AND CONTENT *** -->
</div>
</body>
<!-- *** FADE IN SCRIPT *** -->
<script type="text/javascript">
$(document).ready(function() {
    $('#main-content').fadeIn();
});
</script>
<!-- *** END FADE IN SCRIPT *** -->
</html>

<?php

// Basic php script to format the email that is sent to my email account
	
	// Start of the Submission POST
	
	if (isset($_POST['submit']))
	{
	
    // Input variables
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	
	// (Mail to) function variables and email formatting
	
	$from = $email;
	$to = 'cmdesign89@gmail.com';
	$subject = 'Graphic Design';
	$message = 'From: '.$firstname.' '.$lastname.'
	
	 '.$message;
	
	$headers = "From:$from\r\n";
	$headers .="To : $to\r\n";
	
	// (Mail to) function

mail($to, $subject, $message, $headers);

	}

?>