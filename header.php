<?php  include 'alert.php'?>

<header class="animated fadeInDown animated">   
    <div class="header-div-in">
        <div class="inner-div">
            <div class="logo-div">
                <a href="<?php echo $website_url ?>"><img src="<?php echo $website_url?>/all-images/images/logo.PNG" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a> 
            </div>

            <ul>                          
                <a href="<?php echo $website_url ?>/" title="Home Page"><li <?php if ($page=="index.php") { ?>class="active" <?php }?>> HOME</li></a>        
                <a href="<?php echo $website_url ?>/about" title="About Us"><li <?php if ($page=="about.php") { ?>class="active" <?php }?>>ABOUT US</li></a>        
                <a href="<?php echo $website_url ?>/services" title="Our Exams"><li <?php if ($page=="services/index.php") { ?>class="active" <?php }?>>EXAMS</li></a>           
                <a href="<?php echo $website_url ?>/blog" title="Our Blog"><li <?php if ($page=="blog.php") { ?>class="active" <?php }?>>BLOG</li></a>
                <a href="<?php echo $website_url ?>/faq" title="Frequently Ask Question"><li <?php if ($page=="faq.php") { ?>class="active" <?php }?>>FAQ</li></a>   
                <a href="<?php echo $website_url ?>/contact" title="Contact Us"><li <?php if ($page=="contact.php") { ?>class="active" <?php }?>>CONTACT US</li></a> 
            </ul>
            
            <a href="<?php echo $website_url ?>/login" title="SIGN UP / LOGIN">
            <button class="sign-up" title="SIGN UP / LOGIN">SIGN UP / LOGIN</button></a>
        </div>     
    </div>
</header>