<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>




<?php if ($page=='load_user_wallet'){?>
	<div class="caption-div animated zoomIn ">
    		<div  class="title-div"><i class="bi-credit-card"></i> Load Wallet <div class="close" onclick="_alert_close()">X</div></div>
            <div class="div-in animated fadeInRight">
            	<div class="alert alert-success">Hi <span><strong>Afolabi Abayomi</strong></span>, Kindly enter the amount to load your wallet.</div>
            <div class="title">Enter Amount (₦):<span>*</span></div>
            <input class="text_field" id="amount" placeholder="0.00" title="Amount" type="number" onkeypress="return isNumber(event)"/>
            <button class="btn" type="button"  title="LOAD WALLET"  onclick="_load_user_wallet()" id="load_wallet_btn"><i class="bi-credit-card"></i> LOAD WALLET</button>
        </div>
    </div>
<?php } ?>



<?php if ($page=='user_subcription'){?>
	<div class="caption-div animated zoomIn">
    		<div  class="title-div"><i class="bi-credit-card"></i> Subcription <div class="close" onclick="_alert_close()">X</div></div>
            <div class="div-in animated fadeInRight">
                <div class="alert alert-success">Hi <span><strong>Afolabi Abayomi</strong></span>, you want to subcribe for <strong>Euclidean Geometry</strong> video for <strong>₦<span id=""> 2,000.00</span></strong> .</div>
            
                <div class="title">SELECT PAYMENT METHOD: <span>*</span></div>
                <select id="reg_status_id" class="text_field selectinput" title="SELECT PAYMENT METHOD">
                    <script>_get_select_status('1,2');</script>
                    <option value="" >SELECT PAYMENT METHOD</option>
                    <option value="" class="option_text">PAY WITH CARD</option>
                    <option value="" class="option_text">PAY WITH WALLET</option>
                </select>
                <button class="btn" type="button"  title="Confirm"  onclick="_load_user_wallet()" id="load_wallet_btn"><i class="bi-credit-card"></i> MAKE PAYMENT</button>
            </div>
    </div>
<?php } ?>





<?php if ($view_content=='load_user_wallet_success'){?>
	<div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
				<div class="img"><img src="all-images/images/success.gif" /></div>
            <h2>TRANSACTION SUCCESSFUL</h2>
            You have successfully fund your wallet.
            <a href="wallet" title="My Wallet">
             <button class="btn" type="button"><i class="fa fa-eye"></i> Go to My Wallet </button></a>
        </div>
    </div>
<?php } ?>



<?php if ($page=='add_more_exam'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> ADD EXAM</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">

 
                <div class="radio-input-div">
                        <div class="alert alert-success">
                            <div class="title-div">REGISTERED EXAM</div>
                            <br clear="all">
                            <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>WAEC</span>
                                </div>
                            </label>

                            <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>NECO</span>
                                </div>
                            </label>
                        </div>

                        <div class="alert" style="margin-top:30px">
                            <div class="title-div">ADD EXAM:</div>
                            <br clear="all">
                            <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>JAMB</span>
                                </div>
                            </label>

                            <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>UTME</span>
                                </div>
                            </label>

                            <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>PUTME</span>
                                </div>
                            </label>

                            <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>IJMB</span>
                                </div>
                            </label>

                            <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>JUPEB</span>
                                </div>
                            </label>

                            <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>JUPEB</span>
                                </div>
                            </label>



                        </div>
                </div>
                    <button class="action-btn" type="button" title="SUBMIT" id="SUBMIT_btn" onclick="_reg_and_updt_staff('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<?php } ?>







<?php if ($page=='subscription_video'){?>
    <div class="page-creation-panel">
        <div class="title-div">
            <div class="div-in"><i class="bi-video"></i> VIDEO <button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button></div>
        </div>
        <iframe src="<?php echo $website_url?>/user/play-video/" style="width:100%; height:100%;" frameborder="0" ></iframe>  
 <!-- <iframe src="https://afootechglobal.com" style="width:100%; height:100%" frameborder="0" ></iframe>   -->

  </div>
</div>
<?php } ?>


<?php if ($page=='app_settings'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="back_icon" style="display:none; cursor:pointer;" ><i class="bi-arrow-left" style="cursor:pointer;" onclick="_prev_page('account_settings_id');" ></i> &nbsp;&nbsp;</span>
        <span id="panel-title"><span id="header_icon"> <i class="bi-gear"></i> </span id="app_text"> APP SETTINGS</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">
            <div class="setting_detail" id="account_settings_id">   

                <div class="settings-div" onclick="_next_page('channge_password','back_icon','password');">
                    <div class="div-in">
                        <div class="icon-div">
                          <i class="bi-lock"></i>
                        </div>
                        <div class="text-div">
                            <h4 id="password">CHANGE PASSWORD</h4>
                            <span>Manage and change password</span>
                            <i class="bi-chevron-right"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="setting_detail" id="channge_password">   
                 <div class="alert">Fill all fields to change your <span>PASSWORD</span>  </div>
                    <div class="title"> OLD PASSWORD: <span>*</span></div>
                    <input id="bank_name" type="text" class="text_field" placeholder="OLD PASSWORD" title="OLD PASSWORD" value="<?php echo $bank_name; ?>" />
                    <div class="title"> CREATE PASSWORD: <span>*</span></div>
                    <input id="account_name" type="text" class="text_field" placeholder="CREATE PASSWORD" title="CREATE PASSWORD" value="<?php echo $account_name; ?>" />
                    <div class="title"> CONFIRMED PASSWORD: <span>*</span></div>
                    <input id="account_number" type="text" class="text_field" placeholder="CONFIRMED PASSWORD" title=" CONFIRMED PASSWORD" value="<?php echo $account_number; ?>" />
                    <button class="action-btn" type="button" title="SUBMIT" id="SUBMIT_btn" onclick="_reg_and_updt_staff('<?php echo $page?>','');"> <i class="bi-check"></i> UPDATE PASSWORD </button>
                
            </div>

        </div>
    </div> 
</div>
<?php } ?>
