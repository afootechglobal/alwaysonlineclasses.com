<?php
ini_set('session.use_only_cookies', 1); // secure cookie
session_start(); // start session
session_regenerate_id(); // regenerating for security issues

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$ip_address=$_SERVER['REMOTE_ADDR']; //ip used
$sysname=gethostname();//computer used
$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);


$thename='alwaysonlineclasses.com'; 
$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//$website_url='http://192.168.0.186/alwaysonlineclasses.com';
//$website_url='http://192.168.34.51/alwaysonlineclasses.com';
$website_url='http://localhost/alwaysonlineclasses.com';
//$website_url='https://alwaysonlineclasses.com';


$body_pix_url=$website_url.'/all-images/body-pix';
$images_pix_url=$website_url.'/all-images/images';
$plugin_pix_url=$website_url.'/all-images/plugin';

?>



<?php
	///// to keep php variable and session
	$login_staff_id=$_SESSION['staff_id'];
	$access_key=$_SESSION['access_key'];
	//$staff_id=$_SESSION['staff_id'];
	$role_id=$_SESSION['role_id'];
?>


<script>
	////// for javascript /////

	//// connect to local Website or local IP  ///
	//var website_url="http://alwaysonlineclasses.com";
	//var website_url="http://192.168.43.204/sowapp.com";

	
	var website_url='http://localhost/alwaysonlineclasses.com'; /// website url
	//var website_url='http://192.168.0.186/alwaysonlineclasses.com';

	//var api="http://192.168.0.186/aoc_api/"; /// website url
	var api="http://localhost/aoc_api/?access_key=<?php echo $access_key?>"; /// website url


	var index_local_url=website_url+"/config/code"	/// For index local_url ///

	var user_portal_url=website_url+"/user/config/code" /// user portal url


	var admin_login_local_url=website_url+"/admin/config/code" /// admin login local url

	var admin_portal_url=website_url+"/admin/a" /// admin portal url
	var admin_local_portal_url=website_url+"/admin/a/config/code" /// admin local portal url

</script>
