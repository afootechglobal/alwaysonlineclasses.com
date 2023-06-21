<?php include 'config.php';?>

<?php
$action=$_POST['action'];

switch ($action){


	case 'get_page':
		$page=$_POST['page'];
		include 'page-content.php';
	break;

}
?>