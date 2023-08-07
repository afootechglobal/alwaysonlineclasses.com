<?php require_once '../../config/config.php';?>



<?php
class allClass{
	function _admin_title_info(){?>
    <div class="page-title-div dashbord-title animated fadeInDown animated animated">
        <div class="div-in">
            <div class="title-side-div">
                <span id="page-title"><i class="bi-speedometer2"></i> Admin Dashboard Overview</span>
                <div class="user-name" id="user_name">Hi, Afolabi Taiwo</div>
            </div>  
        </div>
    </div>
<?php }





}//end of class
$callclass=new allClass();
?>