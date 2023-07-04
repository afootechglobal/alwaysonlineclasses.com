<?php
ini_set('session.use_only_cookies', 1); // secure cookie
session_start(); // start session
session_regenerate_id(); // regenerating for security issues

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$ip_address=$_SERVER['REMOTE_ADDR']; //ip used
$sysname=gethostname();//computer used
$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

$thename='Student-login'; 
$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$website_url='http://localhost/admin';
//$website_url='https://afootechglobal.com';

$body_pix_url=$website_url.'/all-images/body-pix';
$images_pix_url=$website_url.'/all-images/images';

?>



<script>
	////// for javascript /////


//// For all API's /////////


	//// connect to local Website or local IP  ///
	//var website_url="http://sowapp.fumlasproperties.com";
	var website_url="http://localhost/admin";
	//var website_url="http://192.168.43.204/sowapp.com";


	//// connect to local api or IP ///
	//var api="http://sowapp.fumlasproperties.com/sowapp_api/";
	//var api="http://localhost/sowapp_api/";
	//var api="http://192.168.43.204/sowapp_api"; 


	var index_local_url=website_url+"/config/code.php"	/// For index local_url ///


	

















	//// End API's //////////////
</script>
