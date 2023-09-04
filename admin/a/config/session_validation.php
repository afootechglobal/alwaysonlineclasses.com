<?php require_once '../../config/config.php';?>
<?php

	//$role_id=$_SESSION['role_id'];
?>
<?php if(empty($login_staff_id)){
    session_destroy();
    ?>
<script>
window.parent(location="../../admin/");
</script>
<?php } ?>

<?php
class allClass{
	function _admin_title_info(){?>
    <div class="page-title-div dashbord-title animated fadeInDown animated animated">
        <div class="div-in">
            <div class="title-side-div">
                <span id="page-title"><i class="bi-speedometer2"></i> Admin Dashboard Overview</span>
                <div class="user-name" >Hi, <span id="login_user_fullname"></span></div>
            </div>  
        </div>
    </div>
<?php }





}//end of class
$callclass=new allClass();
?>