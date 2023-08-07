<?php if ($view_content=='dashboard'){?>

<div style="text-align:center">

            <div class="statistics-back-div">
            
                <div class="statistics-div balance-div" onclick="_get_page('active-user-list', 'active-users')" >
                    <div class="in-div">
                        <i class="bi-wallet2"></i>
                        <div class="amount-div">
                        <span>₦</span> <span id="balance">0.00 </span> 
                        </div>
                        WALLET BALANCE
                        <div class="load">LOAD WALLET</div>
                    </div>
                </div>
                
                
                <div class="statistics-div" onClick="_get_page('active_properties','active_properties')">
                    <div class="in-div">
                    <i class="bi-pencil-square"></i>
                        <span>0</span><br />
                        EXAM
                    </div>
                </div>

                <div class="statistics-div" onClick="_get_page('active_properties','active_properties')">
                    <div class="in-div">
                    <i class="bi-lock"></i>
                        <br>
                        CHANGE PASSWORD
                    </div>
                </div>
                
                
           
            </div>
            
             
 </div>           

<script>
get_notification_number();
</script>
          
<?php }?>












<?php if ($view_content=='system_alert'){?>
<div class="search-div" data-aos="fade-in" data-aos-duration="700">
<input id="all_search_txt" onkeyup="_fetch_random_alert_search('system_alert')" type="text" class="text_field full" placeholder="Type here to search..." title="Type here to search" />
</div>

<div class="chart-div-notifications">
<div class="text"><i class="fa fa-line-chart"></i> Showing Notifications for</div> 

<div class="text" onclick="select_search()">
<span id="srch-text">Last 30 Days</span>&nbsp;<i class="fa fa-sort-down (alias)"></i>
<div class="srch-select">
<div id="srch-unreal" onclick="get_alert_report('srch-unreal', 'system_alert', 'unread');">Unread Alerts</div>
<div id="srch-today" onclick="get_alert_report('srch-today', 'system_alert', 'view_today_search');">Today</div>
<div id="srch-week" onclick="get_alert_report('srch-week', 'system_alert', 'view_thisweek_search');">This Week</div>
<div id="srch-7" onclick="get_alert_report('srch-7', 'system_alert', 'view_7days_search');">Last 7 Days</div>
<div id="srch-month" onclick="get_alert_report('srch-month', 'system_alert', 'view_thismonth_search');">This Month</div>
<div id="srch-30" onclick="get_alert_report('srch-30', 'system_alert', 'view_30days_search');">Last 30 Days</div>
<div id="srch-90" onclick="get_alert_report('srch-90', 'system_alert', 'view_90days_search');">Last 90 Days</div>
<div id="srch-year" onclick="get_alert_report('srch-year', 'system_alert', 'view_thisyear_search');">This Year</div>
<div id="srch-1year" onclick="get_alert_report('srch-1year', 'system_alert', 'view_1year_search');">Last 1 Year</div>
<div onclick="srch_custom('Custom Search')">Custom Search</div>
</div>
</div>

<div class="text">
<div class="custom-srch-div">
<input id="datepicker-from" type="text" class="srchtxt" placeholder="From" title="Select Date From" />
<input id="datepicker-to" type="text" class="srchtxt" placeholder="To" title="Select Date To"/>
<button type="button" class="btn" onclick=" _fetch_custom_alert_report('system_alert','custom_search')">Apply</button>
</div>
</div>
<br clear="all" />
</div>

<div class="system-alert-div">
<?php 
			/// get presentation values
	$day30= date('F d Y', strtotime('today - 30 days'));
	$today= date('F d Y');	
	
	/// get chat values
		$db_day30= date('Y-m-d', strtotime('today - 30 days'));
		$db_today= date('Y-m-d');
		$view_report='';
		$check_code='alert-list';
		include 'sub-codes.php';
?>
</div>


<script language="javascript">
$('#datepicker-from').datetimepicker({
	lang:'en',
	timepicker:false,
	format:'Y-m-d',
	formatDate:'Y-M-d',
});

$('#datepicker-to').datetimepicker({
	lang:'en',
	timepicker:false,
	format:'Y-m-d',
	formatDate:'Y-M-d',
});
 </script>
<?php }?>




<?php if ($view_content=='read_alert'){?>
<div class="fly-title-div  animated fadeInRight">
    <div class="in">
        <span id="panel-title"><i class="fa fa-bell-o"></i> Notification Details</span>
        <div class="close" title="Close" onclick="alert_close();">X</div>
    </div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
    <div class="inner-div">
    
    <?php
		$query=mysqli_query($conn,"SELECT * FROM alert_tab WHERE alert_id='$alert_id'");
		$fetch=mysqli_fetch_array($query);
		$alert_detail = $fetch['alert_detail'];
			$fatch_array=$callclass->_get_alert_detail($conn, $alert_id);
			$array = json_decode($fatch_array, true);
			$userid= $array[0]['user_id'];
			$name= trim(ucwords(strtolower($array[0]['name'])));
			$ipaddress= $array[0]['ipaddress'];
			$computer= $array[0]['computer'];
			$seen_status= $array[0]['seen_status'];
			$date= $array[0]['date'];
		
			mysqli_query($conn,"UPDATE `alert_tab` SET seen_status='$user_role_id'+1 WHERE alert_id='$alert_id'");
    ?>
    
    <div class="alert">
        User ID: <span><?php echo $userid;?></span><br />
        Action Performed By: <span><?php echo $name;?></span><br />
        IP Address Used: <span><?php echo $ipaddress;?></span><br />
        Computer Used: <span><?php echo $computer;?></span><br />
    </div>
    
    <div class="alert">
        Alert ID: <span><?php echo $alert_id;?></span><br />
        Date: <span><?php echo $date;?></span><br />
    </div>
    
    <div class="title">Alert Details:</div>
    <div class="alert alert-success"><?php echo $alert_detail;?></div>
    
    <button class="btn" onclick="alert_close();"> <i class="fa fa-check"></i> OK </button>
    </div>
</div>

<?php } ?>











<?php if ($page=='exam_category'){?>

            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_users_list('<?php echo $status_id;?>')" type="text" class="text_field full" placeholder="Type here to search..." title="Type here to search" />
            </div>
         <div class="alert alert-success"> <span><i class="bi-pencil-square"></i></span> EXAM'S LIST <button class="btn" onClick="_get_form('add_exam')"><i class="fa fa-plus"></i> CREATE A NEW ADMIN</button></div>
            <div class="animated fadeIn" id="search-content">
           
            <br clear="all" />
            </div>
<?php } ?>


<?php if ($view_content=='add_exam'){?>

                <div class="fly-title-div  animated fadeInRight">
                <div class="in">
                <span id="panel-title"><i class="fa fa-lock"></i> ADD EXAM</span>
                <div class="close" title="Close" onclick="alert_close();">X</div>
                </div>
                </div>
                <div class="container-back-div overflow animated fadeInRight" >
                              <div class="inner-div">
                                
                                <div class="alert">Fill the form below to <span>create a new administrator.</span></div>
                                
                                   <div class="title">FULLNAME</div>
                                       <input id="fullname" type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME"/>
                                   <div class="title">PHONE NUMBER</div>
                                      <input id="phone" type="text" class="text_field" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                                   <div class="title">EMAIL ADDRESS</div>
                                      <input id="email" type="text" class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS"/>
                                   <div class="title">SELECT ADMINISTRATIVE ROLE</div>
                                     <select id="role_id"  class="text_field selectinput">
                                     <option value="" selected="selected">SELECT HERE</option>
                                           <?php 
                                       $query= mysqli_query($conn,"SELECT * FROM role_tab");
                                      while($sel=mysqli_fetch_array($query)){
                                      $role_id=$sel['role_id'];
                                      $role_name=$sel['role_name'];
                                       ?>
                                         <option value="<?php echo $role_id;?>"><?php echo strtoupper($role_name);?></option>
                                          <?php }?>
                                    </select>
                                   <div class="title">SELECT USER STATUS</div>
                                     <select id="status_id"  class="text_field selectinput">
                                     <option value="" selected="selected">SELECT HERE</option>
                                           <?php 
                                       $query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('A','S')");
                                      while($sel=mysqli_fetch_array($query)){
                                      $status_id=$sel['status_id'];
                                      $status_name=$sel['status_name'];
                                       ?>
                                         <option value="<?php echo $status_id;?>"><?php echo strtoupper($status_name);?></option>
                                          <?php }?>
                                    </select>
                                     <button class="btn" type="button" title="Submit" id="create-user-btn" onclick="_create_user();"> <i class="fa fa-check"></i>  SUBMIT </button>
                        </div>
                </div>
<?php } ?>




<?php if ($view_content=='change-user-password-form'){?>

                <div class="fly-title-div  animated fadeInRight">
                <div class="in">
                <span id="panel-title"><i class="fa fa-lock"></i> CHANGE PASSWORD</span>
                <div class="close" title="Close" onclick="alert_close();">X</div>
                </div>
                </div>
                <div class="container-back-div overflow animated fadeInRight" >
                              <div class="inner-div">
                                
                                <div class="alert">Enter the <span>OLD PASSWORD</span> and create your <span>NEW PASSWORD</span></div>
                                
                                   <div class="title">OLD PASSWORD</div>
                                       <input id="oldpass" type="password" class="text_field" placeholder="ENTER OLD PASSWORD" title="OLD PASSWORD"/>
                                   <div class="title">NEW PASSWORD</div>
                                      <input id="newpass" type="password" class="text_field" placeholder="CREATE NEW PASSWORD" title="NEW PASSWORD"/>
                                   <div class="title">CONFIRM NEW PASSWORD</div>
                                      <input id="cnewpass" type="password" class="text_field" placeholder="CONFIRM NEW PASSWORD" title="CONFIRM NEW PASSWORD"/>
                                     <button class="btn" type="button" title="Submit" id="update-user-password-btn" onclick="_update_user_password();"> <i class="fa fa-refresh"></i> CHANGE PASSWORD </button>
                        </div>
                </div>
<?php } ?>
























<?php if (($view_content=='active_properties')||($view_content=='sold_properties')||($view_content=='completed_properties')||($view_content=='pending_properties')){?>
<?php 
	$all_search_txt='';
	if ($view_content=='active_properties'){
	$status_id='FS';
	$title='ACTIVE PROPERTIES';
	}elseif($view_content=='sold_properties'){
	$status_id='SD';
	$title='SOLD PROPERTIES';
	}elseif($view_content=='completed_properties'){
	$status_id='CMP';
	$title='COMPLETED PROPERTIES';
	}else{
	$status_id='P';
	$title='PENDING PROPERTIES';
	}
?>
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_property_list('<?php echo $status_id;?>')" type="text" class="text_field full" placeholder="Type here to search..." title="Type here to search" />
            </div>
         <div class="alert alert-success"> <span><i class="fa fa-home"></i></span> <?php echo $title;?> <button class="btn" onClick="_get_form_with_id('add-property-form','')"><i class="fa fa-plus"></i> ADD NEW PROPERTY</button></div>
            <div class="animated fadeIn" id="search-content">
            <?php
			$check_code='property-list';
			require_once 'sub-codes.php';
			 ?>
            <br clear="all" />
            </div>
<?php } ?>







<?php if ($view_content=='add-property-form'){?>

<div class="fly-title-div  animated fadeInRight">
    <div class="in">
        <span id="panel-title"><i class="fa fa-plus-square"></i> ADD NEW PROPERTY</span>
        <div class="close" title="Close" onclick="alert_close();">X</div>
    </div>
</div>


<div class="container-back-div overflow animated fadeInRight" >
    <div class="inner-div" id="form-content">
		<?php $check_code='property_basic_details';?>
        <?php include 'sub-codes.php'?>
    </div>
</div>                

<?php } ?>











<?php if ($view_content=='news_letter'){?>
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_news_letter_list()" type="text" class="text_field full" placeholder="Type here to search..." title="Type here to search" />
            </div>
         <div class="alert alert-success"> <span><i class="fa fa-envelope"></i></span> NEWSLETTER SUBSCRIBERS <button class="btn" onclick="exportTableToExcel('transaction-table','collectionExportReport')"><i class="fa fa-file-excel-o"></i> EXPORT</button></div>
            <div class="animated fadeIn" id="search-content">
            <?php
			$check_code='news_letter_list';
			require_once 'sub-codes.php';
			 ?>
            <br clear="all" />
            </div>
<?php } ?>












<?php if ($view_content=='app_settings'){
	  $array=$callclass->_get_backend_settings_detail($conn, 'BK_ID001');
	  $fetch = json_decode($array, true);
	  $smtp_host=$fetch[0]['smtp_host'];
	  $smtp_username=$fetch[0]['smtp_username'];
	  $smtp_password=$fetch[0]['smtp_password'];
	  $smtp_port=$fetch[0]['smtp_port'];
	  $sender_name=$fetch[0]['sender_name'];
	  $support_email=$fetch[0]['support_email'];
?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-gears"></i> SETTINGS</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                
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
                    <div class="title"> SUPPORT EMAIL:</div>
                    <input id="support_email" type="text" class="text_field" placeholder="SUPPORT EMAIL" title="SUPPORT EMAIL" value="<?php echo $support_email; ?>" />
                </div>
                                
                    <button class="btn"  type="button" title="UPDATE SETTINGS" onclick="_update_settings()"> <i class="fa fa-check"></i> UPDATE SETTINGS</button>

        </div>
</div>
<?php } ?>


<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">
$(".sb-container").scrollBox();
</script>
  
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
