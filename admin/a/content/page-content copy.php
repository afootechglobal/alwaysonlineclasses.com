<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>



<?php if ($page=='staff_registration'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW STAFF</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW STAFF</span></div>

                <div class="title">FULL NAME: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="reg_fullname"/>

                <div class="title">EMAIL ADDRESS: <span>*</span></div>
                <input type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" id="reg_email" />

                <div class="title">PHONE NUMBER: <span>*</span></div>
                <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="reg_mobile" />
               
                <div class="title">HOME ADDRESS: <span>*</span></div>
                <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="reg_address" />

                <div class="title">SELECT ROLE: <span>*</span></div>
                <select id="reg_role_id" class="text_field select_field" title="SELECT ROLE">
                
                    <script>_get_select_role('1,2');</script>
                </select>

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <script>_get_select_status('1,2');</script>
                </select> 
                    <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_and_updt_staff('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<?php } ?>





<?php if ($page=='staff_registration'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW STAFF</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW STAFF</span></div>

                <div class="title">FULL NAME: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="reg_fullname"/>

                <div class="title">EMAIL ADDRESS: <span>*</span></div>
                <input type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" id="reg_email" />

                <div class="title">PHONE NUMBER: <span>*</span></div>
                <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="reg_mobile" />
               
                <div class="title">HOME ADDRESS: <span>*</span></div>
                <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="reg_address" />

                <div class="title">SELECT ROLE: <span>*</span></div>
                <select id="reg_role_id" class="text_field select_field" title="SELECT ROLE">
                
                    <script>_get_select_role('1,2');</script>
                </select>

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <script>_get_select_status('1,2');</script>
                </select> 
                    <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_and_updt_staff('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<?php } ?>



<?php if ($page=='staff_login_profile'){?>

<div class="main-dashboard-div animated fadeIn" >
   <div class="info_div">
       
             <legend style="text-align:left;font-weight: bold;padding:15px 0px 15px 10px">ADMIN/STAFF PROFILE</legend>
           <div class="individual-input">     
                   <div class="title">STAFF ID: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_staff_id" readonly="" require=""/>
               </div>

               <div class="individual-input">     
                   <div class="title">FULL NAME: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_fullname"/>
               </div>

               <div class="individual-input">     
                   <div class="title">EMAIL ADDRESS: <span>*</span></div>
                   <input type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" id="updt_email" />
               </div>

               <div class="individual-input"> 
                   <div class="title">PHONE NUMBER: <span>*</span></div>
                   <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="updt_mobile" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT COUNTRY: <span>*</span></div>
                   <select id="updt_country_id" class="text_field select_field" title="SELECT COUNTRY">
                   <script>_get_select_country();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">HOME ADDRESS: <span>*</span></div>
                   <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="updt_address" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT POSITION: <span>*</span></div>
                   <select id="updt_position_id" class="text_field select_field" title="SELECT POSTION" >
                   <script>_get_select_position();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT ROLE: <span>*</span></div>
                   <select id="updt_role_id" class="text_field select_field" title="SELECT ROLE">
                   <script>_get_select_role('1,2,3');</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT STATUS: <span>*</span></div>
                        <select id="updt_status_id" class="text_field select_field" title="SELECT STATUS">
                                <script>_get_select_status('1,2');</script>     
                        </select>
               </div> 
              
            <legend style="text-align:center;padding:15px 0px 15px 10px">Click to Upload Pix <i class="bi-upload" ></i></legend>
           
            <label>
                <div class="pix-div">
                    <div class="pix-in">
                        <div id="profile_login_pix"><img id="passport-one" src="all-images/images/friends.png" alt="Profile pix"  /></div>
                        <input type="file" id="passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG" onchange="staff_login_profile_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
           <script> _upload_pix_('<?php echo $staff_id?>');</script>

       </div>
       <button class="update_btn"  type="button" id="update_btn"  onClick="_reg_and_updt_staff('<?php echo $page?>','<?php echo $staff_id?>')" title="UPDATE PROFILE"><i class="bi-check"></i> UPDATE PROFILE</button>
  

    </div> 
<?php } ?>











<?php if ($page=='staff_profile'){?>

<div class="main-dashboard-div animated fadeIn" >
   <div class="info_div">
       
             <legend style="text-align:left;font-weight: bold;padding:15px 0px 15px 10px">ADMIN/STAFF PROFILE</legend>
           <div class="individual-input">     
                   <div class="title">STAFF ID: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_staff_id" readonly="" require=""/>
               </div>

               <div class="individual-input">     
                   <div class="title">FULL NAME: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_fullname"/>
               </div>

               <div class="individual-input">     
                   <div class="title">EMAIL ADDRESS: <span>*</span></div>
                   <input type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" id="updt_email" />
               </div>

               <div class="individual-input"> 
                   <div class="title">PHONE NUMBER: <span>*</span></div>
                   <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="updt_mobile" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT COUNTRY: <span>*</span></div>
                   <select id="updt_country_id" class="text_field select_field" title="SELECT COUNTRY">
                   <script>_get_select_country();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">HOME ADDRESS: <span>*</span></div>
                   <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="updt_address" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT POSITION: <span>*</span></div>
                   <select id="updt_position_id" class="text_field select_field" title="SELECT POSTION" >
                   <script>_get_select_position();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT ROLE: <span>*</span></div>
                   <select id="updt_role_id" class="text_field select_field" title="SELECT ROLE">
                   <script>_get_select_role('1,2,3');</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT STATUS: <span>*</span></div>
                   <select id="updt_status_id" class="text_field select_field" title="SELECT STATUS">
                   <script>_get_select_status('1,2');</script>
                   </select>
               </div> 
              
            <legend style="text-align:center;padding:15px 0px 15px 10px">Click to Upload Pix <i class="bi-upload" ></i></legend>
           
            <label>
                <div class="pix-div">
                    <div class="pix-in">
                        <div id="profile_pix"><img id="passport-four" src="all-images/images/friends.png"  /></div>
                        <input type="file" id="passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG" onchange="staff_profile_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
           <script> _upload_staff_pix_('<?php echo $staff_id?>'); </script>

       </div>
       <button class="update_btn"  type="button" id="update_btn"  onClick="_reg_and_updt_staff('<?php echo $page?>','<?php echo $staff_id?>')" title="UPDATE PROFILE"><i class="bi-check"></i> UPDATE PROFILE</button>
  

    </div> 
<?php } ?>









<?php if ($page=='view_paymwent'){ ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="fa fa-plus"></i> PAYMENT REPORT </span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">
                <div class="title">TRANSACTION ID:</div>
                <input  type="text" class="text_field" placeholder="PAYMENT ID" title="PAYMENT ID" id="pay_id" require="" readonly=""/>

                <div class="title">MEMBER NAME: </div>
                <input type="email"  class="text_field" placeholder="MEMBER NAME" title="MEMBER NAME" id="pay_name" require="" readonly=""/>

                <div class="title">PHONE NUMBER:</div>
                <input type="text"  class="text_field"  placeholder="PHONE NUMBER" title="PHONE NUMBER" id="pay_mobile" require="" readonly=""/>

                <div class="title">PAYMENT PURPOSE: <span>*</span></div>
                <input type="text"  class="text_field" placeholder="PAYMENT PURPOSE" title="PAYMENT PURPOSE" id="pay_purpose" require="" readonly=""/>

                <div class="title">AMOUNT PAID:</div>
                <input type="text"  class="text_field" placeholder="AMOUNT PAID" title="AMOUNT PAID" id="amount_paid" require="" readonly=""/>
                
                <div class="title">PAYMENT STATUS: </div>
                <input type="text"  class="text_field" placeholder="PAYMENT STATUS" title="PAYMENT STATUS" id="pay_status" require="" readonly=""/>
              
                <div class="title">PAYMENT DATE:</div>
                <input type="text"  class="text_field" placeholder="PAYMENT DATE" title="PAYMENT DATE" id="pay_date" require="" readonly=""/>
                <script>_get_payment_detail('<?php echo $id?>','<?php echo $status_id?>');</script>
        </div>
    </div> 
</div>
<?php } ?>






<?php if ($page=='change_password'){ ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="bi-lock"></i> CHANGE PASSWORD </span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">
         <div class="alert">Enter <span>Old Password</span> and create <span>New Password <i class="fa fa-lock"></i></span> </div>

            <div class="title">OLD PASSWORD: <span>*</span></div>
            <input type="password" id="old_password" name="old_password" class="text_field"  placeholder="ENTER OLD PASSWORD" title="ENTER YOUR OLD PASSWORD">

            <div class="title">CREATE NEW PASSWORD: <span>*</span></div>
            <input type="password" id="new_password" name="new_password" onkeyup="_check_password2()" required class="text_field"  placeholder="CREATE NEW PASSWORD" title="CREATE NEW PASSWORD">

            <div class="title" style="float:left;">COMFIRMED NEW PASSWORD:<span >*</span>  <div id='message' style="float:right;margin-left:10px"></div></div>
            <input type="password"  id="comfirmed_password" onkeyup="_check_password3()" name="comfirmed_password" required class="text_field" placeholder="COMFIRMED NEW PASSWORD" title="COMFIRMED NEW PASSWORD">
           
            <div class="pswd_info" style="color:#8c8d8d">At least 8 charaters required including upper & lower cases and special characters and numbers.</div>
            <button class="action-btn" id="update_btn" type="button" style="float:left;" onClick="_update_password('<?php echo $staff_id ?>')" title="CHANGE PASSWORD"><i class="fa fa-exchange"></i> CHANGE PASSWORD</button>
        </div>
    </div> 
</div>
<?php } ?>

