<?php include 'config.php';?>

<?php
$action=$_POST['action'];

switch ($action){


	case 'get_page':
		$page=$_POST['page'];
		include 'page-content.php';
	break;

	case 'reset_password':
		$staff_id=$_POST['staff_id'];
		$page='reset_password';
		require_once('page-content.php');
	break;

}
?>