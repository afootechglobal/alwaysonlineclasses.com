<?php include 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include 'meta.php'?>
<title><?php echo $thename?>  | Student Login</title>
<meta name="keywords" content="Student Login - <?php echo $thename?>" />
<meta name="description" content="Student Login <?php echo $thename?>"/>
</head>
<body>
<?php include 'alert.php'?>

    <section class="login-section">
      
        <div class="login-side-div"></div>

            <div class="div-in">
                <div class="side-in-div  animated zoomIn">
                    <div class="side-text">
                        <a href="<?php echo $website_url ?>"><div class="logo-div"><img src="<?php echo $images_pix_url?>/logo.png" alt=""></div></a>
                            <h1>Welcome To Always Online Classes</h1>
                            <p>Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB.</p>
                        </div>
                         
                        <div class="social-div">
                            <div class="icon-div"><i class="bi-facebook"></i></div>
                            <div class="icon-div"><i class="bi-instagram"></i></div>
                            <div class="icon-div"><i class="bi-twitter"></i></div>
                            <div class="icon-div"><i class="bi bi-linkedin"></i></div>
                        </div>

                        <div class="acute-angle"></div>
                </div>

                <div class="log-in-div">
                    <div class="form-div animated fadeInRight">
                    <a href="<?php echo $website_url ?>"><div class="logo-div"><img src="<?php echo $images_pix_url?>/logo.png" alt=""></div></a>
                    <br clear="all"/>
                            <ul class="form-header">
                                <h1 id="page-title">Log-In</h1>
                            </ul>

                          <div  id="more-info">
                            <?php $page='login';?>
                            <?php include 'config/page-content.php';?>
                        </div>
                    </div>

                </div>


    </section>
   
</body>
</html>


