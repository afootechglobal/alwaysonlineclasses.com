<?php
$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//$website_url='http://localhost/projects/phylum/alwaysonlineclasses.com/construction';
$website_url='https://alwaysonlineclasses.com';
$thename='Always Online Classes'; 
/////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="ALL">
<meta name="Engine" content="all">
<meta name="distribution" content="global">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, follow">

<link rel="shortcut icon" type="image-png" href="<?php echo $website_url?>/all-images/images/icon.png" />

<link href="<?php echo $website_url?>/style/icons-1.10.2/font/bootstrap-icons.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url?>/style/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $website_url?>/style/main-style.css" type="text/css" rel="stylesheet" />

<link href="<?php echo $website_url?>/js/classycountdown/css/jquery.classycountdown.css" rel="stylesheet" type="text/css">


<title>Embrace Learning Anytime with <?php echo $thename?> | WAEC, NECO, GCE</title>
<meta name="keywords" content="<?php echo $thename?>, SSCE Online Classes, WAEC Online Classes, NECO Online Classes, NABTEB Online Classes, GCE Online Classes, Online education, Virtual learning, Remote learning, Digital classrooms, Online courses, E-learning, Distance education, Web-based classes, Internet-based learning, Continuous online education, LMS, Learning Management System" />
<meta name="description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<meta property="og:type" content="Website" />
<meta property="og:site_name" content="<?php echo $thename?>">
<meta property="og:url" content="<?php echo $website_auto_url?>" />

<meta property="og:title" content="Embrace Learning Anytime with <?php echo $thename?> | WAEC, NECO, GCE" />
<meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/alwaysonlineclasses.jpg"/>
<meta property="og:description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<meta name="twitter:title" content="Embrace Learning Anytime with <?php echo $thename?> | WAEC, NECO, GCE"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/alwaysonlineclasses.jpg"/> 
<meta name="twitter:description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

</head>
<body>

<?php include 'alert.php'?>

<div class="header-div animated fadeInDown">
	<div class="header-div-in">
        <a href="<?php echo $website_url?>" title="<?php echo $thename?>">
        <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" class="animated zoomIn" alt="<?php echo $thename?>" /></div></a>
        <a href="tel:+2348083533750" title="Call Customer Care">
        <button class="btn" id="social-link"><i class="bi-telephone-outbound"></i></button></a>
        <a href="https://api.whatsapp.com/send?text=Hello Always Online Classes &phone=+2348083533750" target="_blank" title="Whatsapp">
        <button class="btn" id="social-link"><i class="bi-whatsapp"></i></button></a>
         <a href="https://api.whatsapp.com/send?text=Hello Always Online Classes &phone=+2348083533750" target="_blank" title="Whatsapp">
        <button class="btn">GET IN TOUCH</button></a>
        <div class="contact-div">
            <div class="contact" id="email">CALL US<br /><span>+234 808 353 3750</span></div>
            <div class="contact" id="email">EMAIL US<br /><span>info@alwaysonlineclasses.com</span></div>
            <div class="contact" id="working">WORKING HOURS<br /><span>Mon - Fri (8:00am - 5:00pm)</span></div>
        </div>
        <br clear="all" />
    </div>
</div>


<div class="slide-div animated fadeIn">
	<div class="inner-div  animated fadeInDown">
    	<div class="text-div">
        	<h1 class="animated zoomIn"><span>WEBSITE</span> UNDER CONSTRUCTION</h1>
            <p>Embrace the advantages of remote learning, personalized instruction, and interactive digital classrooms on SSCE, GCE, NABTEB Exams and more</p>
        </div>

        <div class="count-down-div  animated fadeInDown">
            <div class="div-in">
                <div id="countdown" class="ClassyCountdownDemo"></div>
            </div>
        </div>
    </div>
</div>







<div class="live-help-div" title="Chat With Us Now" onclick="_open_live_chat()">
    <div class="pix-div">
    	<img src="<?php echo $website_url?>/all-images/images/cutomercare.jpg" alt="Customer Care"/>
    </div>
    Live Help
</div>

















<script src="<?php echo $website_url?>/js/jquery-v3.6.1.min.js"></script>
<script src="<?php echo $website_url?>/js/scripts.js"></script>   
<!-- jQuery Classy Countdown Scripts and CSS -->
<script src="<?php echo $website_url?>/js/classycountdown/js/jquery.knob.js"></script> 
<script src="<?php echo $website_url?>/js/classycountdown/js/jquery.throttle.js"></script> 
<script src="<?php echo $website_url?>/js/classycountdown/js/jquery.classycountdown.js"></script> 
<!-- Classy Countdown Script -->
<script type="text/javascript">
$(document).ready(function() {
  $('#countdown').ClassyCountdown({
      theme: "flat-colors-very-wide",
      end: $.now() + 10000
  });
});
</script>



<!--Start of Tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ea9f80210362a7578bd97a5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>-->
<!--End of Tawk.to Script-->

</body>
</html>