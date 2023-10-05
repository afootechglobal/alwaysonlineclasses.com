


<?php if ($page=='staff_reg'){ ?>
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
                <input  id="reg_fullname" type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" />

                <div class="title">EMAIL ADDRESS: <span>*</span></div>
                <input id="reg_email" type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" />

                <div class="title">PHONE NUMBER: <span>*</span><div id="mobile_info" style="float:right;font-size:12px;display:none;color:#f00"><span>Mobile not accepted!</span></div></div>
                <input id="reg_mobile" type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER"  />
               
                <div class="title">HOME ADDRESS: <span>*</span></div>
                <input id="reg_address" type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS"  />

                <div class="title">SELECT ROLE: <span>*</span></div>
                <select id="reg_role_id" class="text_field select_field" title="SELECT ROLE">
                    <option value="" selected="selected">SELECT ROLE</option>
                    <?php if($role_id>2){?>
                        <script>_get_select_role('reg_role_id','1,2,3');</script>
                        <?php }else{?>
                        <script>_get_select_role('reg_role_id','1,2');</script>
                    <?php }?>
                </select>
            
                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <option value="" selected="selected">SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                </select> 
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_staff('');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<?php } ?>






<?php if ($page=='my_profile'){?>
        <?php include 'staff-profile.php';?>
<?php } ?>


<?php if ($page=='staff_profile'){
    ?>
<div class="overlay-off-div">
    <div class="user-profile-div animated fadeInUp" >
        <div class="top-panel-div">
            <i class="bi-person"></i> ADMINISTRATIVE PROFILE</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
        <div class="profile-content-div sb-container">

    
            <div class="bg-img">
                
                <div class="mini-profile">
                    <label>
                        <div class="img-div" id="current_user_passport1">
                            <img src="<?php echo $website_url;?>/uploaded_files/staff_pix/friends.png" id="passportimg4" alt="profile picture"/>                                
                        </div> 
                        <input type="file" id="passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG" onchange="Test.UpdatePreview(this);"/>

                    </label>

                    <div class="text-div">
                        <div class="name" id="staff_login_fullname"></div>
                        <div class="text">
                            STATUS: <strong id="staff_status_name"> </strong> | LAST LOGIN DATE: <strong id="staff_last_login"> </strong>
                        </div>                 
                    </div>
                </div>
            </div>

            <div class="user-in">
                <div class="title">BASIC INFORMATION</div>
                        
                <div class="profile-segment-div col-3">
                    <div class="segment-title">FULLNAME:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_fullname" type="text" class="text_field text_field2" placeholder="FULLNAME" title="FULLNAME"/>
                    </div>
                </div>


                <div class="profile-segment-div col-4">
                    <div class="segment-title">EMAIL:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_email" type="text" class="text_field text_field2" placeholder="EMAIL" title="EMAIL"/>
                    </div>
                </div>

                <div class="profile-segment-div col-3">
                    <div class="segment-title">HOME ADDRESS:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_address" type="text" class="text_field text_field2" placeholder="HOME ADDRESS" title="HOME ADDRESS"/>
                    </div>
                </div>

                

                <div class="profile-segment-div col-4"><div id="mobile_info" style="float:right;font-size:12px;display:none;color:#f00"><span>Mobile not accepted!</span></div>
                    <div class="segment-title">PHONE NUMBER:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_mobile" type="text" class="text_field text_field2" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                    </div>
                </div>

            </div>
        
        
            <div class="user-in">
                <div class="title">ACCOUNT INFORMATION</div>
                
                <div class="profile-segment-div col-5">
                    <div class="segment-title">STAFF ID:</div>
                    <div class="text-field-div">
                        <input id="staff_id" type="text" class="text_field" readonly="readonly" placeholder="STAFF ID" title="STAFF ID"/>
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>


                <div class="profile-segment-div col-6">
                    <div class="segment-title">DATE OF REGISTRATION:</div>
                    <div class="text-field-div">
                        <input id="created_time" type="text" readonly="readonly" class="text_field" placeholder="Date Of Registration" title="Date Of Registration"/>
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>

                
                <div class="profile-segment-div col-7">
                    <div class="segment-title">LAST LOGIN DATE:</div>
                    <div class="text-field-div">
                        <input id="last_login" type="text" class="text_field" readonly="readonly" placeholder="Last Login Date" title="Last Login Date" />
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>
            </div>   


            <div class="user-in">
                <div class="title">ADMINISTRATIVE INFORMATION</div>
                <div class="profile-segment-div col-6">
                    <div class="segment-title">STAFF ROLE:</div>
                    <div class="text-field-div no-border">
                        <select class="text_field text_field2"  id="updt_role_id" style="background:#fff;">                                       
                        <option value="" >SELECT ROLE </option>
                            <script>_get_select_role('updt_role_id','1,2,3');</script>
                      </select>
                    </div>
                </div> 


                <div class="profile-segment-div col-7">
                    <div class="segment-title">STAFF STATUS:</div>
                    <div class="text-field-div no-border">
                        <select class="text_field text_field2" readonly="readonly" id="updt_status_id" style="background:#fff;" >                       
                        <option value="" >SELECT STATUS </option>
                        <script> _get_select_status('updt_status_id','1,2');</script>
                     </select>
                    </div>
                </div>
                <button class="btn" type="button" id="update_btn" onclick="_update_staff_profile('<?php echo $ids?>');"> UPDATE PROFILE <i class="bi-check"></i></button>     
            </div> 
        </div>
                
    </div> 
</div> 

<script> _upload_staff_pix_('<?php echo $ids?>');</script>
<script>_get_staff_profile('<?php echo $ids?>');</script>
<?php } ?>



<?php if ($page=='user_profile'){?>
<div class="overlay-off-div">
    <div class="user-profile-div animated fadeInUp" >
        <div class="top-panel-div">
            <i class="bi-person"></i> USER PROFILE</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
        <div class="profile-content-div sb-container">

    
            <div class="bg-img">
                
                <div class="mini-profile">
                    <label>
                        <div class="img-div" id="current_user_passport3">
                            <img src="<?php echo $website_url;?>/uploaded_files/staff_pix/friends.png" id="passportimg3" alt="profile picture"/>                                
                        </div> 

                        <input type="file" id="passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG" onchange="Staff.UpdatePreview(this);"/>
                    </label>

                    <div class="text-div">
                        <div class="name" id="user_login_fullname"></div>
                        <div class="text">
                            STATUS: <strong id="user_status_name"> </strong> | LAST LOGIN DATE: <strong id="user_last_login"> </strong>
                        </div>                 
                    </div>
                </div>
            </div>

            <div class="user-in">
                <div class="title">BASIC INFORMATION</div>
                        
                <div class="profile-segment-div col-3">
                    <div class="segment-title">FULLNAME:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_fullname" type="text" class="text_field text_field2" placeholder="FULLNAME" title="FULLNAME"/>
                    </div>
                </div>


                <div class="profile-segment-div col-4">
                    <div class="segment-title">EMAIL:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_email" type="text" class="text_field text_field2" placeholder="EMAIL" title="EMAIL"/>
                    </div>
                </div>

                <div class="profile-segment-div col-3">
                    <div class="segment-title">HOME ADDRESS:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_address" type="text" class="text_field text_field2" placeholder="HOME ADDRESS" title="HOME ADDRESS"/>
                    </div>
                </div>

                

                <div class="profile-segment-div col-4">
                    <div class="segment-title">PHONE NUMBER:<div id="mobile_info" style="float:right;font-size:12px;display:none;color:#f00"><span>Mobile not accepted!</span></div></div>
                    <div class="text-field-div no-border">
                        <input id="updt_mobile" type="text" class="text_field text_field2" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                    </div>
                </div>

            </div>
        
        
            <div class="user-in">
                <div class="title">ACCOUNT INFORMATION</div>
                
                <div class="profile-segment-div col-6">
                    <div class="segment-title">USER ID:</div>
                    <div class="text-field-div">
                        <input id="users_id" type="text" class="text_field" readonly="readonly" placeholder="USER ID" title="USER ID"/>
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>


                <div class="profile-segment-div col-7">
                    <div class="segment-title">DATE OF REGISTRATION:</div>
                    <div class="text-field-div">
                        <input id="created_time" type="text" readonly="readonly" class="text_field" placeholder="Date Of Registration" title="Date Of Registration"/>
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>

                
                <div class="profile-segment-div col-6">
                    <div class="segment-title">LAST LOGIN DATE:</div>
                    <div class="text-field-div">
                        <input id="last_login" type="text" class="text_field" readonly="readonly" placeholder="Last Login Date" title="Last Login Date" />
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>

                <div class="profile-segment-div col-7">
                    <div class="segment-title">USER STATUS:</div>
                    <div class="text-field-div no-border">
                        <select class="text_field text_field2" readonly="readonly" id="updt_status_id" style="background:#fff;width:100%" >                       
                            <option value="">SELECT STATUS</option>
                            <script> _get_select_status('updt_status_id','1,2');</script>
                        </select>
                    </div>
                </div>
                <button class="btn" type="button" id="update-user-btn" onclick="_update_user_profile('<?php echo $ids; ?>');"> UPDATE PROFILE <i class="bi-check"></i></button>     
  
            </div>   
            
        </div>
    </div> 
</div> 
<script> _upload_user_pix_('<?php echo $ids?>');</script>
<script>_get_user_profile('<?php echo $ids?>');</script>
<?php }?>





<?php if ($page=='add_and_update_subject'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">
                <?php if($ids==''){?>
                    <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW SUBJECT</span>
              <?php  }else{?>
                <span id="panel-title"><i class="bi-pencil-square"></i> UPDATE SUBJECT</span>
              <?php }?>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Subject Pix <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Upload Exam Pix">
                    <div class="img-in" >
                        <div id="view_pix"><img id="exam-pix" src="<?php echo $website_url?>/uploaded_files/subject_pix/default.png" alt="exam-pix"  /></div>
                        <input type="file" id="subject_passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG,.wepb" onchange="exam_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW SUBJECT</span></div>

                <div class="title">SUBJECT NAME: <span>*</span></div>
                <input id="subject_name" type="text"  class="text_field" placeholder="SUBJECT NAME" title="SUBJECT NAME"/>
                
                <div class="title">SUBJECT URL: <span>*</span></div>
                <input id="subject_url" type="text"  class="text_field" placeholder="SUBJECT URL" title="SUBJECT URL"/>
                  
                <div class="title">SEO KEYWORDS: <span>*</span></div>
                <textarea id="seo_keywords" class="text_field textarea" rows="2" maxlength="160" title="SEO KEYWORDS" placeholder="SEO KEYWORDS"></textarea>

                <div class="title">SEO DESCRIPTION: <span>*</span></div>
                <textarea id="seo_description" class="text_field textarea" rows="2" maxlength="160" title="SEO DESCRIPTION" placeholder="SEO DESCRIPTION"></textarea>

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <option value=""> SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                </select> 
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_and_update_subject('<?php echo $page?>', '<?php echo $ids?>');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<?php if($ids!=''){?>
<script>_fetch_each_subject('<?php echo $ids?>');</script>
<?php }?>
<?php } ?>





<?php if ($page=='add_and_update_exam'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">
                <?php if($ids==''){?>
                    <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW EXAM</span>
                <?php  }else{?>
                <span id="panel-title"><i class="bi-pencil-square"></i> UPDATE EXAM</span>
                <?php }?>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Exam Logo <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Upload Exam Pix">
                    <div class="img-in">
                        <div id="view_exam"><img id="exam-pix" src="<?php echo $website_url?>/uploaded_files/exam_pix/default.png" alt="Exam pix"  /></div>
                        <input type="file" id="exam_passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG" onchange="exam_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">

                    <div class="alert">Kindly fill the form below to <span>ADD NEW EXAM</span></div>

                    <div class="title">EXAM ABBREVIATION: <span>*</span></div>
                    <input id="abbreviation" type="text" class="text_field" placeholder="EXAM ABBREVIATION" title="EXAM ABBREVIATION" />

                    <div class="title">EXAM NAME: <span>*</span></div>
                    <input id="exam_name" type="text"  class="text_field" placeholder="EXAM NAME" title="EXAM NAME"  />
                    
                    <div class="title">EXAM URL: <span>*</span></div>
                    <input id="exam_url" type="text"  class="text_field" placeholder="EXAM URL" title="EXAM URL"  />
                  
                    <div class="title">SEO KEYWORDS: <span>*</span></div>
                    <textarea id="seo_keywords" class="text_field textarea" rows="2" maxlength="160" title="SEO KEYWORDS" placeholder="SEO KEYWORDS"></textarea>

                    <div class="title">SEO DESCRIPTION: <span>*</span></div>
                    <textarea id="seo_description" class="text_field textarea" rows="2" maxlength="160" title="SEO DESCRIPTION" placeholder="SEO DESCRIPTION"></textarea>

                    <div class="title">SELECT SUBJECT: <span>*</span></div>
                        <div class="subject-info-div">
                            <div class="div-in" id="subject_name_with_check">

                                <!-- <label for="">
                                    <input type="checkbox" class="child" name="subject_id[]" data-value="GEOGRAPHY"/>
                                    <span>GEOGRAPHY</span>
                                </label> -->
                                
                            </div>
                           
                        </div>
                   
                
                    <div class="title">SELECT STATUS: <span>*</span></div>
                    <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                        <option value=""> SELECT STATUS</option>
                        <script>_get_select_status('reg_status_id','1,2');</script>
                    </select> 
                    <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_and_update_exam('<?php echo $page?>', '<?php echo $ids?>');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<?php if($ids!=''){?>
<script>_fetch_each_exam('<?php echo $ids?>');</script>
<?php }else{ ?>
    <script> _get_fetch_all_subject('subject_name_with_check');</script>
<?php } ?>
<?php } ?>












<?php if ($page=='topics_reg'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <?php if($ids==''){?>
                <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW TOPIC</span>
            <?php  }else{?>
            <span id="panel-title"><i class="bi-pencil-square"></i> UPDATE TOPIC</span>
            <?php }?>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container">
         <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW TOPIC</span></div>

                <div class="title">TOPIC NAME: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="TOPIC NAME" title="TOPIC NAME" id="topic_name"/>

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <option value=""> SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                 </select> 
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_and_update_topic('<?php echo $ids?>','<?php echo $other_ids?>','<?php echo $other_ids1?>');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<?php if($ids!=''){?>
<script>_get_fetch_each_topic('<?php echo $ids?>','<?php echo $other_ids1?>');</script>
<?php }?>
<?php } ?>










<?php if ($page=='sub_topics_reg'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp ">
        <div class="fly-title-div">
            <div class="in">
                <?php if($ids==''){?>
                    <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW SUB TOPIC</span>
                <?php  }else{?>
                    <span id="panel-title"><i class="bi-pencil-square"></i> UPDATE SUB TOPIC</span>
                <?php }?>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Sub Topic Image <i class="bi-upload"></i></legend>
            <label>
                <div class="img-div" title="Click To Sub Topic Video">
                    <div class="img-in">
                        <div id="view_sub_topic"><img id="exam-pix" src="<?php echo $website_url?>/uploaded_files/sub_topic_pix/default.png" alt="Exam pix"/></div>
                        <input type="file" id="sub_topic_passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG," onchange="exam_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label> 
        </div>
        

        <div class="container-back-div container-back-div2 sb-container">
            <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW SUB-TOPIC</span></div>

                <div class="title">SUB-TOPIC NAME: <span>*</span></div>
                <input id="sub_topic_name" type="text"  class="text_field" placeholder="SUB-TOPIC NAME" title="SUB-TOPIC NAME"  />

                <div class="title">SUB-TOPIC URL: <span>*</span></div>
                <input id="sub_topic_url" type="text"  class="text_field" placeholder="SUB-TOPIC URL" title="SUB-TOPIC URL"/>

                <div class="title">SUBSCRIPTION PRICE (N): <span>*</span><div id="mobile_info" style="float:right;font-size:12px;display:none;color:#f00"><span>Subsription Price not accepted!</span></div></div>
                <input  type="number" class="text_field" placeholder="SUBSCRIPTION PRICE" onkeypress="isNumber_Check()" title="SUBSCRIPTION PRICE" id="subscription_price"/>

                <div class="title">SEO KEYWORDS: <span>*</span></div>
                <textarea id="seo_keywords" class="text_field textarea" rows="2" maxlength="160" title="SEO KEYWORDS" placeholder="SEO KEYWORDS"></textarea>

                <div class="title">SEO DESCRIPTION: <span>*</span></div>
                <textarea id="seo_description" class="text_field textarea" rows="2" maxlength="160" title="SEO DESCRIPTION" placeholder="SEO DESCRIPTION"></textarea>

                <div class="right-div">
                    <div class="sub-title">SUBSCRIPTION DURATION: <span>*</span></div> 
                     <select id="subscription_duration_id" name="dropdown" class="drop_down">
                        <option value="">SELECT SUBSCRIPTION DURATION</option>
                        <script>_get_select_duration('subscription_duration_id');</script>
                    </select> 
                </div>

                <div class="left-div">
                        <div class="status-title">SELECT STATUS: <span>*</span></div>
                        <select id="reg_status_id" class="text_field select_field status_text_field" title="SELECT STATUS">
                            <option value=""> SELECT STATUS</option>
                            <script>_get_select_status('reg_status_id','1,2');</script>
                        </select> 
                </div>

                <br clear="all"/>
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_and_update_sub_topic('<?php echo $ids?>','<?php echo $other_ids?>','<?php echo $other_ids1?>');"> <i class="bi-check"></i> SUBMIT </button>
               <br clear="all"/>
            </div>
        </div> 
    </div>
</div>
<?php if($ids!=''){?>
<script>_get_fetch_each_sub_topic('<?php echo $ids?>','<?php echo $other_ids?>','<?php echo $other_ids1?>');</script>
<?php }?>
<?php } ?>






<?php if ($page=='video_reg'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp ">
        <div class="fly-title-div">
            <div class="in">
                <?php if($ids==''){?>
                    <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW VIDEO</span>
                <?php  }else{?>
                    <span id="panel-title"><i class="bi-pencil-square"></i> UPDATE VIDEO</span>
                <?php }?>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Video <i class="bi-upload"></i></legend><br/><br/><br/>
            <label>
                <div class="img-div video-div" title="Click To Sub Topic Video">
                    <div id="view_sub_topic_video"><video src="" id="videoDisplay" name="sub_video" autoplay="" muted="" loop="" class="video-slide"></video></div>
                    <input class="" name="sub_video" id="video" onchange="showVideo(this)" type="file" style="display:none;">                 
                </div>
               
            </label> 
      
            <legend >Click to Upload Video Image <i class="bi-upload"></i></legend>
            <label>
                <div class="img-div bottom-image-div" title="Click To Sub Topic Video">
                    <div class="img-in">
                        <div id="view_sub_topic_video_view"><img id="exam-pix" src="<?php echo $website_url?>/uploaded_files/sub_topic_pix/default.png" alt="Exam pix"/></div>
                        <input type="file" id="video_passport"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG," onchange="exam_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label> 
        </div>
        

        <div class="container-back-div container-back-div2 sb-container">
            <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW VIDEO</span></div>

                <div class="title">VIDEO TITILE: <span>*</span></div>
                <input id="video_title" type="text"  class="text_field" placeholder="VIDEO TITILE" title="VIDEO TITILE"/>

                <div class="title">VIDEO OBJECTIVE: <span>*</span></div>
                <textarea id="video_objective" class="text_field textarea" rows="2"   maxlength="160" title="VIDEO OBJECTIVE" placeholder="VIDEO OBJECTIVE"></textarea>

                <div class="title">VIDEO DURATION: <span>*</span></div>
                <input id="video_duration_id" type="text"  class="text_field" placeholder="VIDEO DURATION" title="VIDEO DURATION"/>
               
                <div class="title">SELECT VIDEO VOLUME: <span>*</span></div>
                <select id="video_volume_id" class="text_field select_field" title="SELECT STATUS">
                    <option value="">SELECT VIDEO VOLUME</option>
                    <script>_get_select_video_volume('video_volume_id');</script>
                </select> 

                <div class="title">SELECT PRICING: <span>*</span></div>
                <select id="subscription_pricing_id" class="text_field select_field" title="SELECT STATUS">
                    <option value="">SELECT PRICING</option>
                    <script>_get_select_video_pricing('subscription_pricing_id');</script>
                </select> 

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <option value=""> SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                </select> 
             
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_and_update_sub_topic_video('<?php echo $ids?>','<?php echo $other_ids?>','<?php echo $other_ids1?>');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<?php if($ids!=''){?>
<script>_get_fetch_each_sub_video_topic('<?php echo $ids?>','<?php echo $other_ids?>','<?php echo $other_ids1?>');</script>
<?php }?>
<?php } ?> 












<?php if ($page=='blog_detail'){?>

<div class="page-creation-panel">
        <div class="title-div">
            <div class="div-in"><i class="bi-newspaper"></i> BLOG DETAILS <button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button></div>
        </div>
        
    <div class="page-content-div">
            <div class="page-summary-div">
                <div class="div-in">
                    <div class="blog-div summary">
                        <div class="img-div"><img src="<?php echo $website_url?>/uploaded_files/blog_pix/blog1.webp" alt="Blog Name"></div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text"><span>ANNOUNCEMENT</span> </div>
                            </div>
                            <h2>Group Of Students Sharing Their Ideas</h2>
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>24 Apr 2023</span> </div>
                                <div class="text no-border"><span>396</span> VIEWS</div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
                
            
        <div class="page-details-div">
              <li class="active-li" id="page_content" onclick="_check_page_content('page_content','page-content', 'BLOG073')">PAGE CONTENT </li>
            <div class="page-form-back-div sb-container" >

                    <div class="page-form-div">
                        <div class="page-title">SEO CONTENT</div>
                        <div class="form-div">
                            <div class="form-input-div">
                                <div class="title">PAGE URL <span>*</span></div>
                                    <input id="page_url" type="text" class="text_field" placeholder="page-url" title="PAGE URL">
                                <div class="title">PAGE TITLE <span><em>(Not more than 60 words)</em></span></div>
                                    <input id="page_title" type="text" maxlength="60" class="text_field" placeholder="PAGE TITLE" title="PAGE TITLE">
                                <div class="title">SEO KEYWORDS <span>*</span></div>
                                    <textarea id="seo_keywords" class="text_field" placeholder="SEO Keywords" title="SEO KEYWORDS"></textarea>
                                <div class="title">SEO DESCRIPTION <span><em>(Not more than 167 words)</em></span></div>
                                    <textarea id="seo_description" class="text_field" maxlength="167" placeholder="SEO Description" title="SEO DESCRIPTION"></textarea>
                            </div>
                            <label>
                                <div class="pix-div"><img src="<?php echo $website_url?>/uploaded_files/blog_pix/blog1.webp" alt="Blog Name"></div>
                                <input type="file" id="seo_flyer" accept=".jpg, .JPG, .png, .PNG, .jpeg, .JPEG" onchange="SeoFlyer.UpdatePreview(this);" style="display:none;">
                            </label>				
                        </div>
                    </div>
                

                    <div class="page-form-div">
                        <div class="page-title">FULL PAGE CONTENT</div>
                        <div class="form-div">
                            <script src="js/TextEditor.js" referrerpolicy="origin"></script>
                            <script>tinymce.init({selector:'#page_content_text',  // change this value according to your HTML
                            plugins: "link"
                            });</script>
                            <textarea class="text_field" style="width: 100%; display: none;" rows="27" id="page_content_text" title="TYPE FULL PAGE CONTENT HERE" placeholder="TYPE FULL PAGE CONTENT HERE" aria-hidden="true">5teiuguihgiuihgtertwetefr</textarea>
                         
                        </div>
                        <button class="btn" id="save-page-content-btn" onclick="_save_page_content('BLOG073')"><i class="fa fa-save"></i> SAVE</button><br clear="all">
                    </div>
                



            </div>
        
        </div>
    </div>
</div>


<?php } ?>






<?php if ($page=='blog_reg'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">
                <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW BLOG</span>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Blog Pix <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Blog Pix">
                    <div class="img-in">
                        <div id="profile_login_pix"><img id="blog_pix" src="<?php echo $website_url?>/uploaded_files/exam_pix/default.png" alt="Exam pix"  /></div>
                        <input type="file" id="blog_pix"  style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG" onchange="blog_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">

                    <div class="alert">Kindly fill the form below to <span>ADD NEW BLOG</span></div>

                    <div class="title">BLOG TITLE: <span>*</span></div>
                    <input id="blog_title" type="text"  class="text_field" placeholder="BLOG TITLE" title="BLOG TITLE"  />

                    <div class="title">BLOG DESCRIPTION: <span>*</span></div>
                    <textarea id="blog_desc" class="text_field textarea" rows="2"   maxlength="160" title="BLOG DESCRIPTION" placeholder="BLOG DESCRIPTION"></textarea>
                    
                    <div class="title">SELECT STATUS: <span>*</span></div>
                    <select id="status_id" class="text_field select_field" title="SELECT STATUS">
                      <option value=""> SELECT STATUS</option>
                      <script>_get_select_status('1,2');</script>
                    </select> 
                        <button class="action-btn" type="button" title="SUBMIT" id="update_btn" onclick="_reg_and_updt_staff('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>

<?php } ?>





<?php if ($page=='faqs_reg'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div animated fadeInRight">
        <div class="fly-title-div">
            <div class="in">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW FAQ</span>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>


        <div class="container-back-div sb-container">
            <div class="inner-div">

            <div class="alert">Kindly fill the form below to <span>ADD NEW FAQ</span></div>

            <div class="title">SELECT FAQ CATEGORY: <span>*</span></div>
            <select id="cat_id" class="text_field select_field" title="SELECT FAQ's CATEGORY">
                <option value=""> SELECT FAQ CATEGORY</option>
                <script>_get_faq_cat('cat_id');</script>
            </select>

            <div class="title">FAQ QUESTION: <span>*</span></div>
            <input  type="text" class="text_field" placeholder="Type Question Here" title="Question" id="question" title="FULL NAME"/>
                        
            <div class="title">FAQ ANSWER: <span>*</span></div>
                <script src="js/TextEditor.js" referrerpolicy="origin"></script>
                <script>tinymce.init({selector:'#answer',  // change this value according to your HTML
                    plugins: "link"
                });</script>
                <textarea class="text_field" style="width:100%;" rows="20" id="answer" title="Type Answer Here" placeholder="Type Answer Here"></textarea>

            <div class="title">SELECT STATUS: <span>*</span></div>
            <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <option value="">SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
            </select> 

            <button class="action-btn" type="button" title="SUBMIT" id="SUBMIT_btn" onclick="_reg_and_updt_staff('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>
               
            </div>
        </div> 
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

                <div class="settings-div"  onclick="_next_page('account_detail','back_icon','account');">
                    <div class="div-in">
                        <div class="icon-div">
                           <i class="bi-bank" ></i> 
                        </div>
                        <div class="text-div">
                            <h4 id="account">ACCOUNT DETAILS</h4>
                            <span>Manage your account information</span>
                            <i class="bi-chevron-right"></i>
                        </div>
                    </div>
                </div>

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


            <div class="setting_detail" id="account_detail">   
                 <div class="alert alert-success"><span>BANK ACCOUNT DETAILS</span>
                    <div class="title"> BANK NAME:</div>
                    <input id="bank_name" type="text" class="text_field" placeholder="BANK NAME" title="BANK NAME" value="<?php echo $bank_name; ?>" />
                    <div class="title"> ACCOUNT NAME:</div>
                    <input id="account_name" type="text" class="text_field" placeholder="ACCOUNT NAME" title="ACCOUNT NAME" value="<?php echo $account_name; ?>" />
                    <div class="title"> ACCOUNT NUMBER:</div>
                    <input id="account_number" type="text" class="text_field" placeholder="ACCOUNT NUMBER" title=" ACCOUNT NUMBER" value="<?php echo $account_number; ?>" />
                </div>

                <div class="alert alert-success"><span>SMTP DETAILS</span>
                    <div class="title"> SENDER NAME:</div>
                    <input id="sender_name" type="text" class="text_field" placeholder="SENDER NAME" title="SENDER NAME" value="<?php echo $sender_name; ?>" />
                    <div class="title"> SMTP HOST:</div>
                    <input id="smtp_host" type="text" class="text_field" placeholder="SMTP HOST" title="SMTP HOST" value="<?php echo $smtp_host; ?>" />
                    <div class="title"> SMTP USERNAME:</div>
                    <input id="smtp_username" type="text" class="text_field" placeholder="SMTP USERNAME" title="SMTP USERNAME" value="<?php echo $smtp_username; ?>" />
                    <div class="title"> SMTP PASSWORD:</div>
                    <input id="smtp_password" type="text" class="text_field" placeholder=" SMTP PASSWORD" title=" SMTP PASSWORD" value="<?php echo $smtp_password; ?>" />
                    <div class="title"> SMTP PORT:</div>
                    <input id="smtp_port" type="text" class="text_field" placeholder="SMTP PORT" title="SMTP PORT" value="<?php echo $smtp_port; ?>" />
                </div>
                <button class="action-btn" type="button" title="SUBMIT" id="SUBMIT_btn" onclick="_reg_and_updt_staff('<?php echo $page?>','');"> <i class="bi-check"></i> UPDATE ACCOUNT </button>
            </div>




            <div class="setting_detail" id="channge_password">   
                 <div class="alert">Fill all fields to change your <span>PASSWORD</span>  </div>
                 <div class="title">OLD PASSWORD: <span>*</span></div>
                <input type="password" id="old_password" name="old_password" class="text_field"  placeholder="ENTER OLD PASSWORD" title="ENTER YOUR OLD PASSWORD">

                <div class="title">CREATE NEW PASSWORD: <span>*</span></div>
                <input type="password" id="new_password" name="new_password" onkeyup="_check_password2()" required class="text_field"  placeholder="CREATE NEW PASSWORD" title="CREATE NEW PASSWORD">

                <div class="title" style="float:left;">COMFIRMED NEW PASSWORD:<span >*</span>  <div id='message' style="float:right;margin-left:10px"></div></div>
                <input type="password"  id="confirmed_password" onkeyup="_check_password3()" name="confirmed_password" required class="text_field" placeholder="COMFIRMED NEW PASSWORD" title="COMFIRMED NEW PASSWORD">
            
                <div class="pswd_info" style="color:#8c8d8d">At least 8 charaters required including upper & lower cases and special characters and numbers.</div>
                <button class="action-btn" id="update_btn" type="button" style="float:left;" onclick="_update_user_password('<?php echo $staff_id ?>');" title="CHANGE PASSWORD"><i class="fa fa-exchange"></i> CHANGE PASSWORD</button>
                
            </div>

        </div>
    </div> 
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



<?php if ($page=='access_key_validation_info'){ ?>
    <div class="validation-div animated ZoomIn">
        <div class="div-in">
            <div class="img-div"><img src="<?php echo $website_url?>/all-images/images/warning.gif" alt="Profile image"></div>
            <h4>Invalid AccessToken. Please LogIn Again</h4>
            <form method="post" action="config/code" name="logoutform">
            <input type="hidden" name="action" value="logout"/>
            <button class="btn">Okay, Log-In</button>
            </form>
        </div>
    </div>
<?php } ?>


<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>
