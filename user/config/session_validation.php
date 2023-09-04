
<?php include '../config/config.php';?>



<?php
class allClass{
    function _admin_title_panel($website_url){?>
        <div class="the-title-div">
            <h2 id="page-title"> <i class="bi-speedometer2"></i> Dashboard</h2>

            <div class="user-desc">
                <div class="div-in">
                    <div class="pix-div"><img src="<?php echo $website_url?>/uploaded_files/user_pix/friends.png" alt="Profile image"/></div>
                    <div class="detail">
                        <h3>Afolabi Abayomi</h3>
                        <span><i class="fa fa-clock-o"></i> Last Login Date </span> - <span>2023-08-10 12:00:00</span>
                    </div>
                    
                    <div class="amount-div">
                        <div class="price">₦ 2,345</div>
                        <button class="btn" onClick="_get_form('load_user_wallet','load_wallet')" id="load_wallet"><i class="bi bi-wallet2"></i> Load Wallet</button>
                    </div>
                    
                </div>
            </div>   
		</div>
<?php }







}//end of class
$callclass=new allClass();
?>