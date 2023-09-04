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

		<div class="page-div-in">
			<?php $callclass->_admin_title_panel($website_url);?>

			<div id="page-content">
				<?php $page='dashboard';?>
				<?php require_once 'content/page-content.php'?>
			</div>
		</div>
	</div>


</body>
</html>
