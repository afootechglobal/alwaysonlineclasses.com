<?php include '../../../config/config.php';?>

<?php
$action=$_POST['action'];

switch ($action){

	case 'logout':
		session_destroy();
        ?>
      <script>
            window.parent(location="../../../admin/");
      </script>
      <?php
  	break; 

	case 'get_page':
		$page=$_POST['page'];
		$ids=$_POST['ids'];
		include '../content/page-content.php';
	break;

	case 'get_form':
		$page=$_POST['page'];
		include '../content/form.php';
	break;

	case 'get_form_with_id':
		$ids=$_POST['ids'];
		$page=$_POST['page'];
		include '../content/form.php';
	break;
	
	case 'unlink_passport':
		$db_passport=$_POST['db_passport'];

		if($db_passport=='friends.png'){
			/// do nothing
		}else{
		 unlink("../../../uploaded_files/staff_pix/".$db_passport);
		}
		
	break;

	case 'upload_pix_file':
		$passport=$_POST['passport'];
		move_uploaded_file($_FILES["passport"]["tmp_name"], "../../../uploaded_files/staff_pix/".$passport);
	break;

	case 'upload_subject_pix':
		$subject_picture=$_POST['subject_picture'];
		$old_passport=$_POST['old_passport'];
		if($db_passport== 'default_pix.jpg'){
			/// do nothing
		}else{
		unlink("../../../uploaded_files/subject_pix/".$old_passport);

		$allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "gif", "png", "webp");
		$extension = pathinfo($subject_picture, PATHINFO_EXTENSION);
		if (in_array($extension, $allowedExts)){				 //////////array 
			move_uploaded_file($_FILES["subject_picture"]["tmp_name"], "../../../uploaded_files/subject_pix/".$subject_picture);
		}
		}
		
	break;

	case 'upload_exam_pix':
		$exam_logo=$_POST['exam_logo'];
		$old_passport=$_POST['old_passport'];
		if($db_passport== 'default_pix.jpg'){
			/// do nothing
		}else{
		unlink("../../../uploaded_files/exam_pix/".$old_passport);
		
		$allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "gif", "png", "PNG", "webp");
		$extension = pathinfo($exam_logo, PATHINFO_EXTENSION);
		if (in_array($extension, $allowedExts)){				 //////////array 
			move_uploaded_file($_FILES["exam_logo"]["tmp_name"], "../../../uploaded_files/exam_pix/".$exam_logo);
		}
		}
		
	break;
}
?>