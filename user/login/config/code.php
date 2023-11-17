<?php include '../../../config/config.php';?>

<?php
$action=$_POST['action'];

switch ($action){


	case 'get_page':
		$page=$_POST['page'];
		include 'page-content.php';
	break;

	case 'get_page_with_id':
		$page=$_POST['page'];
		include 'page-content.php';
	break;

	case 'reset_password':
		$user_id=$_POST['user_id'];
		$page=$action;
		require_once('page-content.php');
	break;

	case 'login':
		$_SESSION['user_id']=trim($_POST['user_id']);
		$_SESSION['access_key']=trim($_POST['access_key']);
	break;

}
?>