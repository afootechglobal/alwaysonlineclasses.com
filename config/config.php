<?php
ini_set('session.use_only_cookies', 1); // secure cookie
session_start(); // start session
session_regenerate_id(); // regenerating for security issues

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$ip_address=$_SERVER['REMOTE_ADDR']; //ip used
$sysname=gethostname();//computer used
$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

$thename='alwaysonlineclasses'; 



//$website_url='https://alwaysonlineclasses.com';
$website_url='http://localhost/projects/alwaysonlineclasses.com';
//$website_url='http://192.168.43.159/projects/alwaysonlineclasses.com';

$admin_login_url=$website_url.'/admin/';
$body_pix_url=$website_url.'/all-images/body-pix';
$images_pix_url=$website_url.'/all-images/images';
$plugin_pix_url=$website_url.'/all-images/plugin';

?>



<?php
	///// to keep php variable and session
	$login_staff_id=$_SESSION['staff_id'];
	$access_key=$_SESSION['access_key'];
	$login_user_id=$_SESSION['user_id'];
	$role_id=$_SESSION['role_id'];
?>

<script>
	//var website_url='https://alwaysonlineclasses.com'; /// online url link
	var website_url='http://localhost/projects/alwaysonlineclasses.com'; /// local url link
	//var website_url='http://192.168.43.159/projects/alwaysonlineclasses.com'; /// ip url link


	//var api_base ="https://alwaysonlineclasses.com/alwaysonlineclasses.com/api";  /// online api_base link
	var api_base ="http://localhost/projects/alwaysonlineclasses.com/api";   // local api_base link
	//var api_base ="http://192.168.43.159/projects/alwaysonlineclasses.com/api"; /// ip api_base link
	///////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	var index_local_url=website_url+"/config/code";	/// For index local_url //
	var user_portal_url=website_url+"/user/config/code"; /// user portal url
	var admin_login_local_url=website_url+"/admin/config/code"; /// admin login local url
	var admin_portal_url=website_url+"/admin/a";/// admin portal url
	var admin_local_portal_url=website_url+"/admin/a/config/code"; /// admin local portal url
	var user_login_local_url=website_url+"/user/login/config/code"	/// For user login local url
	var user_portal_url=website_url+"/user/portal/" /// user portal url
	var user_local_portal_url=website_url+"/user/portal/config/code" /// user local portal url
	///////////////////////////////////////////////////////////////////////////////////////////////////
	var api=api_base+"/?access_key=<?php echo $access_key?>"; /// admin_api url
	var index_api=api_base+"/index_api/"; /// index_api url
	var user_api=api_base+"/user/?access_key=<?php echo $access_key?>"; /// user_api url
	

</script>