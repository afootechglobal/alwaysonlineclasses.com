<?php require_once '../../../config/config.php';?>
<?php
  	$action=$_POST['action'];
switch ($action){

case 'get_page':
	$view_content=$_POST['page'];
	require_once '../content/page-content.php';
break;

case 'get_form':
		$view_content=$_POST['page'];
		require_once '../content/page-content.php';
break;

  }?>
