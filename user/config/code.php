<?php require_once '../../config/config.php';?>
<?php
  	$action=$_POST['action'];
switch ($action){

case 'get_page':
	$page=$_POST['page'];
	require_once '../content/page-content.php';
break;

case 'get_form':
		$page=$_POST['page'];
		require_once '../content/forms.php';
break;

  }?>
