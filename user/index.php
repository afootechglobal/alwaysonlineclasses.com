<?php include 'config/session_validation.php'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title>User Portal | <?php echo $thename;?></title>
</head>
<body>
<?php include 'header.php'?>
<?php include 'side-bar.php'?>
<div class="page-content">
    <div class="the-title-container" data-aos="fade-down" data-aos-duration="2000">
		<?php $callclass->_admin_title_pane($user_role_name);?>
		<div class="user-desc" id="user-desc">
			<div class="pix-div"><img src="<?php echo $website_url?>/uploaded_files/user_pix/friends.png" alt="Profile image"/></div>
			<div class="detail">
				Welcome Back!
				<h1>Afolabi Abayomi</h1>
				<span><i class="fa fa-clock-o"></i> Last Login Date </span> | <span>4844848</span>
			</div>
		</div>
    </div>

<div id="page-content">
<?php $view_content='dashboard';?>
<?php require_once 'content/page-content.php'?>
</div>
</div>
</body>
</html>
