<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>

<?php if ($page=='login'){?>
    
    <div class="fill-form-div animated fadeIn" id="view_login">

        <div class="title-div"> EMAIL ADDRESS: <span>*</span></div> 
        <input type="email" class="text-field" placeholder="ENTER YOUR EMAIL ADDRESS" id="email" />


        <div class="title-div"> PASSWORD: <span>*</span></div> 
        <div class="password-container">
             <input type="password" id="password" onkeyup="_show_password_visibility('password','login_pass')" class="text-field pass-text-field" placeholder="ENTER YOUR PASSWORD" id="password" /><br/>
             <div id="login_pass" onclick="_togglePasswordVisibility('password','login_pass')">
                <i class="bi-eye-slash password-toggle"></i>
            </div>
        </div>
        <span class="title-in"> <input type="checkbox"/> Keep me login</span>
        <span class="title-in reset-password" id="reset" onclick="_next_page('procced_reset_password_info','reset');">Forgot Password? </span>
   
        <button class="btn" type="button" id="login_btn" onclick="_log_in();"><i class="bi-check"></i> Log-In</button>

        <div class="notification-div login-footer-div">
           Don't have an account? <span class="footer-in" onclick="_get_page('signup');" >Sign-Up </span>
        </div>
    </div>

    <div class="fill-form-div" id="procced_reset_password_info">
        <div class="alert alert-success">
            Provide your <span>Email Address</span> to reset your password
        </div>
        <div class="title-div"><i class="bi-envelope"></i> EMAIL ADDRESS: <span>*</span></div> 
        <input type="email" id="reset_pass_email" class="text-field" placeholder="ENTER YOUR EMAIL ADDRESS" />
    
        <button class="btn" type="button" id="reset_password_btn" onclick="_proceed_reset_password();"> PROCEED <i class="bi-arrow-right"></i></button>
        
        <div class="notification-div login-footer-div">
           Have you already have an account? <span class="footer-in"  id="flogin" onclick="_next_page('view_login','flogin');">Log-In</span>
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




    </script>
<?php } ?>






<?php if ($page=='reset_password'){?>
<div class="overlay-off-div">
        <div class="slide-back-div">
            <div class="header-top"><h2>RESET PASSWORD</h2> <button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button></div>
            <div class="slide-in ">
                <div class="fill-form-div container-div animated fadeIn">
                    <div class="alert alert-success"><i class="bi-person"></i> Dear <span id="username"></span>, an <span>OTP</span> has been sent to your email address (<span id="useremail"></span>) to reset your password. Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to confirm.</div>
                   
                    <div class="title-div"> ENTER OTP: <span>*</span> <div id="otp_info" style="float:right;font-size:12px;display:none;color:#f00"><span>OTP not accepted!</span></div></div>
                    <input id="reset_password_otp" type="tel" class="text-field" onkeypress="isNumber_Check()" placeholder="ENTER OTP" title="Enter OTP"/>

                    <div class="alert" style="margin-bottom:0px;"><span>OTP</span> not received? <span id="resend" onclick="_resend_otp('resend','<?php echo $user_id?>')"><i class="bi-send"></i> RESEND OTP</span></div>

                    <div class="title-div"> CREATE PASSWORD: <span>*</span></div>
                    <div class="password-container">
                        <input  type="password" id="create_reset_password" onkeyup="_show_password_visibility('create_reset_password','toggle_create_reset_password')" class="text-field" placeholder="CREATE PASSWORD" title="CREATE PASSWORD"  />
                        <div id="toggle_create_reset_password"  onclick="_togglePasswordVisibility('create_reset_password','toggle_create_reset_password')">
                            <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div>
                    <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>

                    <div class="title-div"> COMFIRMED PASSWORD: <span>*</span> <span id="message">Password Not Matched!</span></div>
                    <div class="password-container">
                        <input type="password" id="confirmed_reset_password" onkeyup="_check_password_match('create_reset_password','confirmed_reset_password','toggle_confirmed_reset_password')" class="text-field" placeholder="COMFIRMED PASSWORD" title="COMFIRMED PASSWORD" />
                        <div id="toggle_confirmed_reset_password" onclick="_togglePasswordVisibility('confirmed_reset_password','toggle_confirmed_reset_password')">
                            <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div> 
                    <button class="btn" type="button"  title-div="Reset" id="comfirmed_reset_btn" onclick="_comfirmed_reset_password('<?php echo $user_id?>')"><i class="bi-check"></i> Reset Password </button>
                </div>

                
            </div>
        </div>
</div>  
 <?php } ?>













<?php if($page=='signup'){?>
    <div class="overlay-off-div">
    <div class="slide-back-div">
             <div class="header-top"><h2>SIGN-UP</h2> <button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button></div>

            <div class="slide-in">

                <div class="fill-form-div container-div animated fadeIn">
                    
                    <div class="title-div">FULL NAME: <span>*</span></div>
                    <input  type="text" id="fullname" class="text-field" placeholder="FULL NAME" title="FULL NAME" />
                    
                    <div class="input-div">
                        <div class="title-div">EMAIL ADDRESS: <span>*</span></div>
                        <input type="email" id="reg_email" class="text-field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS"  />
                    </div>

                    <div class="input-div">
                        <div class="title-div"> PHONE NUMBER: <span>*</span></div>
                        <input type="tel" id="reg_mobile" class="text-field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER"  />
                    </div>

                    <div class="input-div">
                        <div class="title-div">SELECT EXAM: <span>*</span></div>
                        <div class="div" id="fetch_exam">
                                 <!-- <label>
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>WAEC</span>
                                </label> -->
                        </div>
                    </div> 
                    
                    <div class="input-div">
                        <div class="title-div"> CREATE PASSWORD: <span>*</span></div>
                        <div class="password-container">
                            <input type="password" id="reg_password"  onkeyup="_show_password_visibility('reg_password','toggle_reg_password')" class="text-field" placeholder="CREATE PASSWORD" title="CREATE PASSWORD"  />
                            <div id="toggle_reg_password"  onclick="_togglePasswordVisibility('reg_password','toggle_reg_password')">
                                <i class="bi-eye-slash password-toggle"></i>
                            </div>
                        </div>
                    </div>
  
                    <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>
                    
                    <div class="input-div">
                        <div class="title-div"> COMFIRMED PASSWORD: <span>*</span> <span id="message">Password Not Matched!</span></div>
                        <div class="password-container">
                            <input type="password" id="reg_com_password" onkeyup="_check_password_match('reg_password','reg_com_password','toggle_reg_com_password')" class="text-field" placeholder="COMFIRMED PASSWORD" title="COMFIRMED PASSWORD" />
                            <div id="toggle_reg_com_password"  onclick="_togglePasswordVisibility('reg_com_password','toggle_reg_com_password')">
                                <i class="bi-eye-slash password-toggle"></i>
                            </div>
                        </div>
                    </div>

                    
                    <?php $page='view_proceed_btn'; include 'page-content'; ?>  

                    <?php if($page=='view_proceed_btn'){?>
                        <div id="get_page_id">
                             <button class="btn" type="button" id="reg_btn" onclick="_user_reg_check('user_otp_authentication');">PROCEED <i class="bi-arrow-right"></i></button>  
                        </div>
                     <?php }?>
              
                   

                    <div class="notification-div login-footer-div">
                        Have you already have an account? <span class="in"  onclick="_alert_close()">Log-In </span>
                    </div>
                   
                </div>
               
            </div>
        </div>
        </div>



    <script>
         superplaceholder({
			el: reg_email,
				sentences: [ 'ENTER YOUR EMAIL ADDRESS', 'e.g afootechglobal@gmail.com', 'info@pec.com.ng', 'alwaysonlineclasses@gmail.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
    </script>
       <script>_get_fetch_all_exam();</script>
<?php }?>

         


<?php if($page=='view_otp_authentication'){?>
    <div class="animated fadeIn">
        <div class="notification-div"><i class="bi-person"></i> Dear <span id="verify_user_fullname"></span>, an <span>OTP</span> has been sent to your email address (<span id="verify_user_email"></span>) to continue your registration. Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to confirm.</div>
        <div class="title-div">ENTER OTP: <span>*</span> <div id="otp_info" style="float:right;font-size:12px;display:none;color:#f00"><span>OTP not accepted!</span></div></div>
        <input type="text" id="reg_otp_authentication" onkeypress="isNumber_Check()" class="text-field" placeholder="ENTER OTP" title="ENTER OTP" />  
        <div class="notification-div alert-otp" style="margin-bottom:0px;"><span>OTP</span> not received? <span id="resend" onclick="_resend_otp_authentication('resend')"><i class="bi-send"></i> RESEND OTP</span></div>
        <button class="btn" type="button" id="verify_btn" onclick="_user_reg_check('user_registration');"><i class="bi-check"></i> VERIFY & SUBMIT</button> 
    </div>
 <?php }?>
                      







 <?php if($page=='password_reset_successful'){?>
    <div class="overlay-off-div">
        <div class="successful-div animated bounceInDown">
            <div class="success-in">
                <div class="gif">
                    <img src="<?php echo $website_url?>/user/login/all-images/images/success.gif" alt="successful gif">
                </div>
                <h3>PASSWORD RESET SUCCESSFUL </h3>
                <!-- <button onClick="window.location.reload();" type="button">OKAY</button> <br> -->
                <button onClick="_alert_close2('view_login','flogin')" type="button">OKAY</button> <br>
            </div> 
        </div>
    </div>
<?php }?>


<?php if($page=='registration_successful'){?>
    <div class="overlay-off-div">
        <div class="successful-div animated bounceInDown">
            <div class="success-in">
                <div class="gif">
                    <img src="<?php echo $website_url?>/user/login/all-images/images/success.gif" alt="successful gif">
                </div>
                <h3 >REGISTRATION SUCCESSFUL </h3>
                <button onClick="_alert_close2('view_login','flogin')" type="button">OKAY</button> <br>
            </div> 
        </div>
    </div> 
<?php }?>


