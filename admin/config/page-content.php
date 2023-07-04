<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>
<?php if($page=='login'){?>
    
    <div class="fill-form-div animated fadeIn" id="view_login">

        <div class="title-div"><i class="bi-envelope"></i> EMAIL ADDRESS: <span>*</span></div> 
        <input type="email" class="text-field" placeholder="ENTER YOUR EMAIL ADDRESS" id="email" />

        <div class="title-div"><i class="bi-lock"></i> PASSWORD: <span>*</span></div> 
        <input type="password" class="text-field" placeholder="ENTER YOUR PASSWORD" id="password" /><br/>

        <span class="title-in"> <input type="checkbox"/> Keep me login</span>
        <button class="btn" type="button" id="login_btn" onclick="_log_in();"><i class="bi-check"></i> Log-In</button> 

        <div class="notification-div footer-div">
        Forget Password? <span class="footer-in" id="reset" onclick="_next_page('reset_password_info','reset');">RESET PASSWORD</span>
        </div>
    </div>

    <div class="fill-form-div" id="reset_password_info">
        <div class="notification-div">
            Provide your <span>Email Address</span> to reset your password
        </div>
        <div class="title-div"><i class="bi-envelope"></i> EMAIL ADDRESS: <span>*</span></div> 
        <input type="email" id="reset_pass_email" class="text-field" placeholder="ENTER YOUR EMAIL ADDRESS" />
    
        <!-- <button class="btn" type="button" id="reset_password_btn" onclick="_proceed_reset_password()"> PROCEED <i class="bi-arrow-right"></i></button> -->
        <button class="btn" type="button" id="reset_password_btn" onclick="_get_page('reset_password');"> PROCEED <i class="bi-arrow-right"></i></button>
        
        <div class="notification-div footer-div">
           Have you already have an account? <span class="footer-in"  id="flogin" onclick="_next_page('view_login','flogin');">LOG-IN</span>
        </div>
    </div>

    <script>

		superplaceholder({
			el: email,
				sentences: [ 'ENTER YOUR EMAIL ADDRESS', 'e.g afootechglobal@gmail.com', 'info@pec.com.ng', 'alwaysonlineclasses@gmail.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});

        superplaceholder({
			el: reset_pass_email,
				sentences: [ 'ENTER YOUR EMAIL ADDRESS', 'e.g afootechglobal@gmail.com', 'info@pec.com.ng', 'alwaysonlineclasses@gmail.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});


        // $(".hide").on('click', function() {
        //         $(this).toggleClass("bi bi-eye-slash-fill");
        //         var input = $($(this).attr("password"));
        //         if (input.attr("type") == "password") {
        //             input.attr("type", "text");
        //         } else {
        //             input.attr("type", "password");
        //         }
        //     });

    </script>
<?php }?>






<?php if ($page=='reset_password'){?>
<div class="overlay-off-div">
        <div class="slide-back-div sb-container animated fadeInUp">
            <div class="header-top"><h2>RESET PASSWORD</h2> <button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button></div>
            <div class="slide-in ">
                <div class="fill-form-div container-div" >
                    <div class="notification-div"><i class="bi-person"></i> Dear <span id="username"></span>, an <span>OTP</span> has been sent to your email address (<span id="useremail"></span>) to reset your password.</div>
                        
                    <div class="title-div"> ENTER OTP: <span>*</span> <div id="otp_info" style="float:right;font-size:12px;display:none;color:#f00"><span>OTP not accepted!</span></div></div>
                    <input id="reset_password_otp" type="text" class="text-field" onkeypress="isNumber_Check()" placeholder="ENTER OTP" title-div="Enter OTP"/>

                    <div class="notification-div alert-otp" style="margin-bottom:0px;"><span>OTP</span> not received? <span id="resend" onclick="_resend_otp('resend','<?php echo $staff_id?>')"><i class="bi-send"></i> RESEND OTP</span></div>

                    <div class="title-div"> CREATE PASSWORD: <span>*</span></div>
                    <input type="text" id="reset_password" class="text-field" placeholder="CREATE PASSWORD" title="CREATE PASSWORD"  />


                    <div class="title-div"> COMFIRMED PASSWORD: <span>*</span></div>
                    <input type="text" id="comfirmed_password" class="text-field" placeholder="COMFIRMED PASSWORD" title="COMFIRMED PASSWORD" />
                        
                
                    <div class="pswd_info">At least 8 charaters required including upper & lower cases and special characters and numbers.</div>
                    <button class="btn" type="button"  title-div="Reset" id="comfirmed_reset_btn" onclick="_comfirmed_reset_password('<?php echo $staff_id?>')"><i class="bi-check"></i> RESET PASSWORD </button>
                </div>
            </div>
        </div>
</div>
    
 <?php } ?>



 <?php if($page=='password_reset_successful'){?>
        <div class="reg-successful-div animated bounceInDown">
            <div class="gif">
                <img src="<?php echo $website_url?>/all-images/images/successful.gif" alt="successful gif">
            </div>
            <h3>PASSWORD RESET SUCCESSFUL </h3>
            <button onClick="window.location.reload();" type="button">OKAY, LOGIN</button> 
        </div>
<?php }?>
