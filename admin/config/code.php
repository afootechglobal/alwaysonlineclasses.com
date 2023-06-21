<?php include '../../config/config.php';?>

<?php
$action=$_POST['action'];

switch ($action){


	case 'get_page':
		$page=$_POST['page'];
		include require_once('page-content.php');
	break;



}
?>