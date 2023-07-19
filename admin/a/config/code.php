<?php include '../../../config/config.php';?>

<?php
$action=$_POST['action'];

switch ($action){


	case 'get_page':
		$page=$_POST['page'];
		include '../content/page-content.php';
	break;



}
?>