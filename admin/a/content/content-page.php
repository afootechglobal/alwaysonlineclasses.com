<?php if ($view_content=='dashboard'){?>
    
            <div class="chart-div-notifications">
                    <div class="text"><i class="fa fa-line-chart"></i> Showing Matrix for</div> 
                    
                    <div class="text" onclick="select_search()">
                    <span id="srch-text">Last 30 Days</span>&nbsp;<i class="fa fa-sort-down (alias)"></i>
                    <div class="srch-select">
                    <div id="srch-today" onclick="get_dashboard_report('srch-today', 'view_today_search');">Today</div>
                    <div id="srch-week" onclick="get_dashboard_report('srch-week', 'view_thisweek_search');">This Week</div>
                    <div id="srch-7" onclick="get_dashboard_report('srch-7', 'view_7days_search');">Last 7 Days</div>
                    <div id="srch-month" onclick="get_dashboard_report('srch-month', 'view_thismonth_search');">This Month</div>
                    <div id="srch-30" onclick="get_dashboard_report('srch-30', 'view_30days_search');">Last 30 Days</div>
                    <div id="srch-90" onclick="get_dashboard_report('srch-90', 'view_90days_search');">Last 90 Days</div>
                    <div id="srch-year" onclick="get_dashboard_report('srch-year', 'view_thisyear_search');">This Year</div>
                    <div id="srch-1year" onclick="get_dashboard_report('srch-1year', 'view_1year_search');">Last 1 Year</div>
                    <div onclick="srch_custom('Custom Search')">Custom Search</div>
                    </div>
                    </div>
                    
                    <div class="text">
                      <div class="custom-srch-div">
                        <input id="datepicker-from" type="text" class="srchtxt" placeholder="From" title="Select Date From" />
                        <input id="datepicker-to" type="text" class="srchtxt" placeholder="To" title="Select Date To"/>
                        <button type="button" class="btn" onclick=" _fetch_custom_dashboard_report('dashboard_report','custom_search')">Apply</button>
                      </div>
                    </div>
                    <br clear="all" />
              </div>
              
                <div class="chart-div">
                    <div id="chart-report-div">
                        <div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>
                    </div>
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
				
				_chart_for_trend();
                 </script>
    
<?php }?>











<?php if ($page=='clients_matrix'){?>
            <div id="chartContainer1" style="width:100%; height:200px; margin:auto;"></div>
            
            <script type="text/javascript">
            var options = {
            title: {
            text: "" /*My Performance*/
            },
            data: [{
            type: "pie",
            startAngle: 45,
            showInLegend: "False",
            legendText: "{label}",
            indexLabel: "{label} ({y})",
            yValueFormatString:"#,##0.#"%"",
            dataPoints: [
			      { label: "Wrought Nickel", y: 789},
            { label: "Nickel Chromium", y: 693},
            { label: "Nickel Molybdenum ", y: 389},
            // { label: "Companies", y: <?php //echo $total_active_companies;?>},
            // { label: "Employee", y: <?php ///echo $total_active_staff;?>},
            ]
            }]
            };
            $("#chartContainer1").CanvasJSChart(options);
            </script>

<?php }?>


<?php if ($page=='order_matrix'){?>


            <div id="chartContainer2" style="width:100%; height:200px; margin:auto;"></div>
            
            <script type="text/javascript">
            var options = {
            title: {
            text: "" /*My Performance*/
            },
            data: [{
            type: "pie",
            startAngle: 45,
            showInLegend: "False",
            legendText: "{label}",
            indexLabel: "{label} ({y})",
            yValueFormatString:"#,##0.#"%"",
            dataPoints: [
            // { label: "Active Order", y: <?php //echo $total_active_order;?>},
            // { label: "Pending Order", y: <?php //echo $total_pending_order;?>},
            // { label: "Expired Order", y: <?php //echo $total_expired_order;?>},
            { label: "Wrought Nickel", y: 789},
            { label: "Nickel Chromium", y: 693},
            { label: "Nickel Molybdenum ", y: 389},
            ]
            }]
            };
            $("#chartContainer2").CanvasJSChart(options);
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
<div class="container-back-div sb-container animated fadeInRight" >
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
					 mysqli_query($conn,"UPDATE `alert_tab` SET seen_status=1 WHERE alert_id='$alert_id'");
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
     
                     <button class="action-btn" onclick="alert_close();"> <i class="fa fa-check"></i> OK </button>
     </div>
</div>

<?php } ?>





























<?php if ($view_content=='users'){?>
<div class="search-div" data-aos="fade-in" data-aos-duration="700">
<!--------------------------------network search select------------------------->
 <select id="status_id"  class="text_field select" onchange="_fetch_users_list()">
 <option value="" selected="selected">ALL USER STATUS</option>
       <?php 
   $status_query= mysqli_query($conn,"SELECT distinct(a.status_id),b.`status_name` FROM users_tab a, status_tab b where a.status_id=b.status_id");
  while($status_sel=mysqli_fetch_array($status_query)){
  $status_id=$status_sel['status_id'];
  $status_name=$status_sel['status_name'];
   ?>
     <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
      <?php }?>
</select>
<!--------------------------------all search select------------------------->
<input id="all_search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
</div>
         <div class="alert alert-success"> <span><i class="fa fa-users"></i></span> ADMINISTRATOR'S LIST <button class="btn" onClick="_get_form('create-user-form')"><i class="fa fa-plus"></i> CREATE A NEW ADMIN</button></div>
            <div class="animated fadeIn" id="search-content">
            <?php 
			$status_id='';
			$all_search_txt='';
			$check_code='user-list';
			require_once 'sub-codes.php';
			 ?>
            <br clear="all" />
            </div>
<?php }?>




<?php if ($view_content=='create-user-form'){?>

                <div class="fly-title-div  animated fadeInRight">
                <div class="in">
                <span id="panel-title"><i class="fa fa-lock"></i> CREATE A NEW ADMIN</span>
                <div class="close" title="Close" onclick="alert_close();">X</div>
                </div>
                </div>
                <div class="container-back-div sb-container animated fadeInRight" >
                              <div class="inner-div" id="get-form-content">
                                
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
                                     <button class="action-btn" type="button" title="Submit" id="create-user-btn" onclick="_create_user();"> <i class="fa fa-check"></i>  SUBMIT </button>
                        </div>
                </div>

<script src="js/superplaceholder.js"></script> 
<script>
		superplaceholder({
			el: project_email,
				sentences: [ 'Enter Email Address', 'e.g info@afootechglobal.com', 'support@tecnoverng.prg', 'helo@mtnnigeria.com'],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
</script>

<?php } ?>



<?php if ($view_content=='user-profile'){?>
            <?php include 'users-profile.php'?>
<?php } ?>

<?php if ($view_content=='change-user-password-form'){?>

                <div class="fly-title-div  animated fadeInRight">
                <div class="in">
                <span id="panel-title"><i class="fa fa-lock"></i> CHANGE PASSWORD</span>
                <div class="close" title="Close" onclick="alert_close();">X</div>
                </div>
                </div>
                <div class="container-back-div sb-container animated fadeInRight" >
                              <div class="inner-div">
                                
                                <div class="alert">Enter the <span>OLD PASSWORD</span> and create your <span>NEW PASSWORD</span></div>
                                
                                   <div class="title">OLD PASSWORD</div>
                                       <input id="oldpass" type="password" class="text_field" placeholder="ENTER OLD PASSWORD" title="OLD PASSWORD"/>
                                   <div class="title">NEW PASSWORD</div>
                                      <input id="newpass" type="password" class="text_field" placeholder="CREATE NEW PASSWORD" title="NEW PASSWORD"/>
                                   <div class="title">CONFIRM NEW PASSWORD</div>
                                      <input id="cnewpass" type="password" class="text_field" placeholder="CONFIRM NEW PASSWORD" title="CONFIRM NEW PASSWORD"/>
                                     <button class="action-btn" type="button" title="Submit" id="update-user-password-btn" onclick="_update_user_password();"> <i class="fa fa-refresh"></i> CHANGE PASSWORD </button>
                        </div>
                </div>
<?php } ?>




























































<?php if ($view_content=='active_partners'){
	$status_id='A';
	?>
<div class="tab-div">
      <button class="tab-btn active-tab" onClick="_get_page('active_partners', 'partners')">ACTIVE</button>
      <button class="tab-btn" onClick="_get_page('suspended_partners', 'partners')">SUSPENDED</button>
</div>

    <div class="search-div" data-aos="fade-in" data-aos-duration="700">
    <input id="all_search_txt" onkeyup="_fetch_patrners_list('<?php echo $status_id?>')" type="text" class="text_field full" placeholder="Type here to search..." title="Type here to search" />
    </div>
    
    <div class="company-list-back-div" id="search-content">
            <?php $all_search_txt='';?>
            <?php $check_code='patrners-list';?>
            <?php require_once 'sub-codes.php'?>
    </div>
<?php }?>

<?php if ($view_content=='suspended_partners'){
	$status_id='S';
	?>
<div class="tab-div">
      <button class="tab-btn" onClick="_get_page('active_partners', 'partners')">ACTIVE</button>
      <button class="tab-btn active-tab" onClick="_get_page('suspended_partners', 'partners')">SUSPENDED</button>
</div>

    <div class="search-div" data-aos="fade-in" data-aos-duration="700">
    <input id="all_search_txt" onkeyup="_fetch_patrners_list('<?php echo $status_id?>')" type="text" class="text_field full" placeholder="Type here to search..." title="Type here to search" />
    </div>
    
    <div class="company-list-back-div" id="search-content">
            <?php $all_search_txt='';?>
            <?php $check_code='patrners-list';?>
            <?php require_once 'sub-codes.php'?>
    </div>
<?php }?>




<?php if($view_content=='company_details'){
					$company_id=$_POST['ids'];
					
			 $fetch=$callclass->_get_company_staff_detail($conn, $company_id, $user_email);
 			  $array = json_decode($fetch, true);
				$cs_status_id= $array[0]['status_id'];
				
					$fetch_company=$callclass->_get_company_detail($conn, $company_id);
					$company_array = json_decode($fetch_company, true);
					$company_name=$company_array[0]['company_name'];
					$company_email=$company_array[0]['company_email'];
					if ($company_email==''){$company_email='xxx xxxx xx';}
					$company_website=$company_array[0]['company_website'];
					if ($company_website==''){$company_website='xxx xxxx xx';}
					$company_country_id=$company_array[0]['company_country_id'];
					$company_state_id=$company_array[0]['company_state_id'];
					$company_city=$company_array[0]['company_city'];
					$company_status=$company_array[0]['company_status'];
					
					$fetch=$callclass->_get_country_detail($conn, $company_country_id);
					$array = json_decode($fetch, true);
					$country_name=$array[0]['country_name'];
					
					$fetch=$callclass->_get_state_detail($conn, $company_country_id,$company_state_id);
					$array = json_decode($fetch, true);
					$state_name=$array[0]['state_name'];
	?>

<div class="caption-div company-details animated fadeInUp">
    		<div class="title-div">Company Details<div class="close" onclick="alert_close()"><i class="fa fa-close"></i></div></div>
            
            <div class="company-profile-div">
            	<div class="profile-cover-div">
                	<div class="action-div">
                    <?php if($company_status=='A'){?>
                     <button class="btn decline" onclick="_partner_action('suspend_partner','<?php echo $company_id?>')"><i class="fa fa-close"></i> Supend Company</button>
                     <?php }else{?>
                     <button class="btn active" onclick="_partner_action('activate_partner','<?php echo $company_id?>')"><i class="fa fa-check"></i> Activate Company</button>
                     <?php }?>
                     <button class="btn" onclick="_get_company_order_history('<?php echo $company_id?>')"><i class="fa fa-history"></i> Order History</button>
                  </div>
                </div>
                
                <div class="profile-summary">
                	<div class="pix-div"><img src="../../uploaded_files/company_logo/default.jpg" alt="Raysoft logo" /></div>
                    <div class="text-div">
                        <div class="name"><?php echo ucwords(strtolower($company_name))?></div>
                        <div class="text"><?php echo strtoupper($country_name)?> <strong>|</strong> <?php echo strtoupper($state_name)?> <strong>|</strong> <?php echo $company_city?></div>
                        <div class="text"><i class="fa fa-envelope"></i> <?php echo $company_email?> <strong>|</strong> <i class="fa fa-globe"></i> <?php echo $company_website?></div>
                    </div>
                </div>
                
                <div class="team-back-div">
                	<div class="title">Team Member</div><br clear="all" />
                
                <?php 
				
				$no=0;
				$query=mysqli_query($conn,"SELECT * FROM company_staff_tab WHERE company_id='$company_id' AND status_id='A'");
				 while($fetch=mysqli_fetch_array($query)){
					 $no++;
					 $user_id=$fetch['user_id'];
					 $role_id=$fetch['role_id'];
					 $fetch=$callclass->_get_user_detail($conn, $user_id);
					  $array = json_decode($fetch, true);
						$fullname= $array[0]['fullname'];
						$email= $array[0]['email'];
						$phone= $array[0]['mobile'];
						if ($phone==''){$phone='xxx xxxx xx';}
				 ?>
                    <div class="team-list">
                    	<div class="pix-div"><img src="../../uploaded_files/company_logo/default.jpg" alt="Raysoft logo" /></div>
                        <div class="text-div">
                            <div class="name" onclick="_get_company_staff_profile_form('<?php echo $user_id;?>','<?php echo $company_id;?>')"><?php echo ucwords(strtolower($fullname))?></div>
                            <div class="text"><i class="fa fa-envelope"></i> <?php echo $email?> <strong>|</strong> <i class="fa fa-phone"></i> <?php echo $phone?> <strong>|</strong> <?php if ($role_id>1){?><button class="btn">Admin</button><?php }else{?><button class="btn">Team</button><?php }?></div>
                        </div>
                    </div>
					<?php }?>
                    
                    <?php if ($no==0){?>
            	<div class="alert"><span><i class="fa fa-warning (alias)"></i></span> You do not have any <strong>pending invitation</strong>.</div>
					<?php }?>
                    
                </div>
            
            </div>
    </div>

<?php }?>




<?php if ($view_content=='company_staff_profile'){
				$query=mysqli_query($conn,"SELECT * FROM company_staff_tab WHERE company_id='$company_id' AND user_id='$user_id'");
				$fetch=mysqli_fetch_array($query);
					 $role_id=$fetch['role_id'];
					 $status_id=$fetch['status_id'];
					 
					 $fetch=$callclass->_get_user_detail($conn, $user_id);
					  $array = json_decode($fetch, true);
						$first_name= $array[0]['first_name'];
						$last_name= $array[0]['last_name'];
						$email= $array[0]['email'];
						$phone= $array[0]['mobile'];
						if ($phone==''){$cphone='***********';}else{$cphone=$phone;}
						
					$fetch_role=$callclass->_get_role_detail($conn, $role_id);
					  $array = json_decode($fetch_role, true);
						$role_name= $array[0]['rolename'];
								
								if ($status_id=='A'){
								$status_name= 'ACTIVATED';
								}else{
								$status_name= 'SUSPENDED';
								}
					$fetch_company=$callclass->_get_company_detail($conn, $company_id);
					$company_array = json_decode($fetch_company, true);
					$company_name=$company_array[0]['company_name'];
					$company_country_id=$company_array[0]['company_country_id'];
					$company_state_id=$company_array[0]['company_state_id'];
					$company_city=$company_array[0]['company_city'];
					$company_status=$company_array[0]['company_status'];
					
					$fetch=$callclass->_get_country_detail($conn, $company_country_id);
					$array = json_decode($fetch, true);
					$country_name=$array[0]['country_name'];
					
					$fetch=$callclass->_get_state_detail($conn, $company_country_id,$company_state_id);
					$array = json_decode($fetch, true);
					$state_name=$array[0]['state_name'];
					
					$fetch_role=$callclass->_get_status_detail($conn, $company_status);
					  $array = json_decode($fetch_role, true);
						$company_status= $array[0]['statusname'];
						
	?>
<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-user-circle"></i> COMPANY STAFF PROFILE </span><div class="close" title="Close" onclick="_get_form_with_id('company_details','<?php echo $company_id?>')">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
    <div class="inner-div">
        <div class="alert alert-success">
        <span>COMPANY'S DETAILS:</span><br clear="all" />
            <div class="cart-bill">COMPANY ID:<div class="span"><?php echo $company_id?></div><br clear="all" /></div>
            <div class="cart-bill">COMPANY NAME:<div class="span"><?php echo strtoupper($company_name)?></div><br clear="all" /></div>
            <div class="cart-bill">LOCATION:<div class="span"><?php echo strtoupper($country_name)?> <strong>|</strong> <?php echo strtoupper($state_name)?> <strong>|</strong> <?php echo $company_city?></div><br clear="all" /></div>
            <div class="cart-bill">STATUS:<div class="span"><?php echo strtoupper($company_status)?></div><br clear="all" /></div>
       </div>
     
     
        <div class="alert alert-success">
        <span>EMPLOYEE'S DETAILS:</span><br clear="all" />
            <div class="cart-bill">FIRST NAME:<div class="span"><?php echo strtoupper($first_name)?></div><br clear="all" /></div>
            <div class="cart-bill">LAST NAME:<div class="span"><?php echo strtoupper($last_name)?></div><br clear="all" /></div>
           <div class="cart-bill">EMAIL ADDRESS:<div class="span"><?php echo $email?></div><br clear="all" /></div>
           <div class="cart-bill">PHONE NUMBER:<div class="span"><?php echo $cphone?></div><br clear="all" /></div>
       </div>
       
       
       <div class="title">SELECT ADMINISTRATIVE ROLE</div>
         <select id="role_id"  class="text_field selectinput">
         <option value="<?php echo $role_id;?>" selected="selected"><?php echo $role_name;?></option>
               <?php 
           $query= mysqli_query($conn,"SELECT * FROM role_tab WHERE role_id IN (1,2)");
          while($sel=mysqli_fetch_array($query)){
          $role_id=$sel['role_id'];
          $role_name=$sel['role_name'];
           ?>
             <option value="<?php echo $role_id;?>"><?php echo strtoupper($role_name);?></option>
              <?php }?>
        </select>

         <div class="title">SELECT USER STATUS</div>
           <select id="status_id"  class="text_field selectinput">
           <option value="<?php echo $status_id;?>" selected="selected"><?php echo $status_name;?></option>
                 <?php 
             $query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('A','S')");
            while($sel=mysqli_fetch_array($query)){
            $status_id=$sel['status_id'];
            $status_name=$sel['status_name'];
             ?>
               <option value="<?php echo $status_id;?>"><?php echo strtoupper($status_name);?></option>
                <?php }?>
          </select>
       
      <button class="btn blue" onclick="_update_company_staff_profile('<?php echo $company_id; ?>','<?php echo $user_id; ?>')"><i class="fa fa-check"></i> UPDATE EMPLOYEE'S PROFILE</button>
   </div>
</div>
<?php } ?>



























<?php if ($view_content=='publications'){
			$create='BLOG';
			$cat_id='';
			$status_id='';
			$user_id='';
			$all_search_txt='';
			?>
<div class="tab-div">
      <button class="tab-btn active-tab" onClick="_get_page('publications', 'publications')">ARTICLES</button>
      <button class="tab-btn" onClick="_get_page('marketing_videos', 'publications')">VIDEOS</button>
      <button class="tab-btn" onclick="_get_page('training_panel', 'publications')">TRAINING</button>
      <button class="tab-btn" onclick="_get_page('journal_panel', 'publications')">JOURNAL</button>
      <button class="tab-btn" onclick="_get_form('page_contents')">PAGE CONTENTS</button>
</div>

         <div class="alert alert-success" style="margin-bottom:0px;"> <span><i class="fa fa-newspaper-o"></i></span> PUBLICATIONS / ARTICLES <button class="btn" onClick="_get_form('create-article')"><i class="fa fa-plus"></i> CREATE A NEW ARTICLE</button></div>

            
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
                 <select id="user_id"  class="text_field select" onchange="_fetch_publish_list('fetch_blog_list')">
                 <option value="" selected="selected">All Users</option>
                       <?php 
                   $user_query= mysqli_query($conn,"SELECT distinct(user_id) FROM blog_tab");
                  while($user_sel=mysqli_fetch_array($user_query)){
                  $users_id=$user_sel[0];
						$fatch=$callclass->_get_staff_detail($conn, $users_id);
						  $array = json_decode($fatch, true);
							$fullname= $array[0]['fullname'];
                   ?>
                     <option value="<?php echo $users_id;?>"><?php echo $fullname;?></option>
                      <?php }?>
                </select>
                
                 <select id="cat_id"  class="text_field select" onchange="_fetch_publish_list('fetch_blog_list')">
                 <option value="" selected="selected">All Categories</option>
                       <?php 
                   $cat_query= mysqli_query($conn,"SELECT distinct(cat_id) FROM blog_tab");
                  while($cat_sel=mysqli_fetch_array($cat_query)){
                  $cat_ids=$cat_sel[0];
						$fatch=$callclass->_get_category_detail($conn, $cat_ids);
						  $array = json_decode($fatch, true);
							$cat_names= $array[0]['cat_name'];
                   ?>
                     <option value="<?php echo $cat_ids;?>"><?php echo $cat_names;?></option>
                      <?php }?>
                </select>
                
                 <select id="status_id"  class="text_field select" onchange="_fetch_publish_list('fetch_blog_list')">
                 <option value="" selected="selected">All Status</option>
                       <?php 
                   $status_query= mysqli_query($conn,"SELECT distinct(status_id) FROM blog_tab ORDER BY status_id ASC");
                  while($status_sel=mysqli_fetch_array($status_query)){
                  $status_ids=$status_sel[0];
				  if ($status_ids=='PUB'){$status_name='ACTIVE';}else{$status_name='INACTIVE';}
                   ?>
                     <option value="<?php echo $status_ids;?>"><?php echo $status_name;?></option>
                      <?php }?>
                </select>
                
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_publish_list('fetch_blog_list')" type="text" class="text_field full" placeholder="Type here to search..." title="Type here to search" />
            </div>
            

<div class="blog-back-div animated fadeIn" id="search-content">
<?php $check_code='blog-list';?>
<?php include 'sub-codes.php'?>
</div>
<?php } ?>



<?php if($view_content=='create-article'){?>

<div class="caption-div blog-pane animated fadeInUp">
    		<div class="title-div">Create New Article<div class="close" onclick="alert_close()"><i class="fa fa-close"></i></div></div>
<div class="blog-pane-div-in">
<div class="pad-blog-content">
<div class="left-div">
                <div class="alert">Fill this form to create a <span>NEW BLOG</span></div>
                    <div class="title"> SELECT BLOG CATEGORY:</div>
                            <select id="blog-cat"  class="text_field selectinput">
                             <option value="" selected="selected">Select Blog Categoty</option>
							   <?php 
                           $cat_query= mysqli_query($conn,"SELECT * FROM categories_tab WHERE links='BLOG'");
                          while($cat_sel=mysqli_fetch_array($cat_query)){
                          $cat_id=$cat_sel['cat_id'];
                          $cat_desc=$cat_sel['cat_desc'];
                           ?>
                             <option value="<?php echo $cat_id;?>"><?php echo $cat_desc;?></option>
                              <?php }?>
                            </select>     
                                           
                    <div class="title"> BLOG TITLE:</div>
                    <input id="blog-title" type="text" class="text_field" placeholder="Type Blog Title Here..." maxlength="70" title="Type Blog Title Here" />
                    
                    <div class="title"> BLOG SUMMARY:</div>
                    <textarea class="text_field" rows="2"  id="blog-summ" maxlength="160" title="Blog Summary" placeholder="Blog Summary"></textarea>
                      
                    <div class="title"> UPLOAD SOCIAL MEDIA THUMBNAIL:</div>
                    <div id="thumbnail">
                    <label>
                    <img src="uploaded_files/blog-pix/thumbnail.jpg" id="thumbnail-pix"/>
                    <input type="file" name="inputfile" id="blog-pix" accept=".jpg"  onchange="Blogpix.UpdatePreview(this);" style="display:none;"/>
                    </label>
                    </div>
</div>



<div class="right-div">
                    <div class="title"> BLOG DETAILS:</div>
					<script src="js/TextEditor.js" referrerpolicy="origin"></script>
                      <script>tinymce.init({selector:'#blog-text',  // change this value according to your HTML
                        plugins: "link"
                      });</script>
                    <textarea class="text_field" style="width:100%;" rows="20" id="blog-text" title="Type Blog Detail Here" placeholder="Type Blog Detail Here"></textarea>

                    <div class="title"> SELECT BLOG STATUS:</div>
                            <select id="blog-status"  class="text_field selectinput">
                             <option value="" selected="selected">Select Blog Status</option>
									   <?php 
                                   $status_query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('PUB', 'UNP')");
                                  while($status_sel=mysqli_fetch_array($status_query)){
                                  $status_id=$status_sel['status_id'];
                                  $status_name=$status_sel['status_name'];
                                   ?>
                                     <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
                                      <?php }?>
                            </select>
                      <div class="btn-div">     
                     <button class="btn" onclick="_blog_reg('blog_reg','');"> <i class="fa fa-check"></i> SUBMIT </button>
                     </div>
</div>
</div>
</div>
    </div>

<?php }?>




<?php if ($view_content=='get_blog_details'){
            $blogquery=mysqli_query($conn,"SELECT * FROM blog_tab  WHERE blog_id='$blog_id'")or die ('cannot select blog_tab');
            $blog_sel=mysqli_fetch_array($blogquery);
					$blog_id=$blog_sel['blog_id'];
					$blog_detail=$blog_sel['detail'];
 			$blog_array=$callclass->_get_blog_detail($conn, $blog_id);
 			  $b_array = json_decode($blog_array, true);
					$blog_cat_id=$b_array[0]['blog_cat_id'];
						$fatch=$callclass->_get_category_detail($conn, $blog_cat_id);
						  $array = json_decode($fatch, true);
							$blog_cat_name= $array[0]['cat_name'];
					$blog_title=$b_array[0]['blog_title'];
					$blog_summ=$b_array[0]['blog_summ'];
					$blog_status_id=$b_array[0]['blog_status_id'];
						$fatch=$callclass->_get_status_detail($conn, $blog_status_id);
						  $array = json_decode($fatch, true);
							$blog_status_name= $array[0]['statusname'];
					$user_id=$b_array[0]['user_id'];
					$user_name=$b_array[0]['user_name'];
					$blog_pix=$b_array[0]['blog_pix'];
					$blog_views=$b_array[0]['blog_views'];
					$blog_date_of_reg=date('d M Y h : i : s', strtotime($b_array[0]['blog_date_of_reg']));
					$blog_last_updated=date('d M Y h : i : s', strtotime($b_array[0]['blog_last_updated']));
?>
<div class="caption-div blog-pane animated fadeInUp">
    		<div class="title-div">Create New Article<div class="close" onclick="alert_close()"><i class="fa fa-close"></i></div></div>
<div class="blog-pane-div-in">
<div class="pad-blog-content">
<div class="left-div">
                <div class="alert">Fill this form to create a <span>NEW BLOG</span></div>
                    <div class="title"> SELECT BLOG CATEGORY:</div>
                            <select id="blog-cat"  class="text_field selectinput">
                             <option value="<?php echo $blog_cat_id;?>" selected="selected"><?php echo $blog_cat_name;?></option>
							   <?php 
                           $cat_query= mysqli_query($conn,"SELECT * FROM categories_tab WHERE links='BLOG'");
                          while($cat_sel=mysqli_fetch_array($cat_query)){
                          $cat_id=$cat_sel['cat_id'];
                          $cat_desc=$cat_sel['cat_desc'];
                           ?>
                             <option value="<?php echo $cat_id;?>"><?php echo $cat_desc;?></option>
                              <?php }?>
                            </select>     
                                           
                    <div class="title"> BLOG TITLE:</div>
                    <input id="blog-title" value="<?php echo $blog_title;?>" type="text" class="text_field" placeholder="Type Blog Title Here..." maxlength="70" title="Type Blog Title Here" />
                    
                    <div class="title"> BLOG SUMMARY:</div>
                    <textarea class="text_field" rows="2"  id="blog-summ" maxlength="160" title="Blog Summary" placeholder="Blog Summary"><?php echo $blog_summ;?></textarea>
                     
                    <div class="title"> UPLOAD SOCIAL MEDIA THUMBNAIL:</div>
                    <div id="thumbnail">
                    <label>
                    <img src="uploaded_files/blog-pix/<?php echo $blog_pix; ?>" id="thumbnail-pix"/>
                    <input type="file" name="inputfile" id="blog-pix" accept=".jpg"  onchange="Blogpix.UpdatePreview(this);" style="display:none;"/>
                    </label>
                    </div>
</div>



<div class="right-div">
                    <div class="title"> BLOG DETAILS:</div>
					<script src="js/TextEditor.js" referrerpolicy="origin"></script>
                      <script>tinymce.init({selector:'#blog-text',  // change this value according to your HTML
                        plugins: "link"
                      });</script>
                    <textarea class="text_field" style="width:100%;" rows="20" id="blog-text" title="Type Blog Detail Here" placeholder="Type Blog Detail Here"><?php echo $blog_detail; ?></textarea>

                    <div class="title"> SELECT BLOG STATUS:</div>
                            <select id="blog-status"  class="text_field selectinput">
                             <option value="<?php echo $blog_status_id;?>" selected="selected"><?php echo $blog_status_name;?></option>
									   <?php 
                                   $status_query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('PUB', 'UNP')");
                                  while($status_sel=mysqli_fetch_array($status_query)){
                                  $status_id=$status_sel['status_id'];
                                  $status_name=$status_sel['status_name'];
                                   ?>
                                     <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
                                      <?php }?>
                            </select>
                      <div class="btn-div">     
                     <button class="btn" onclick="_blog_reg('blog_update','<?php echo $blog_id;?>');"> <i class="fa fa-check"></i> UPDATE </button>
                     </div>
</div>
</div>
</div>
    </div>

<?php }?>





<?php if ($view_content=='page_contents'){
            $query=mysqli_query($conn,"SELECT content_text FROM page_content_tab  WHERE content_id='PC0001'");
            $fetch=mysqli_fetch_array($query);
					$content_text=$fetch['content_text'];
					$updated_by=$fetch['updated_by'];
					$date=$fetch['date'];
		 $array=$callclass->_get_staff_detail($conn, $updated_by);
 			  $u_array = json_decode($user_array, true);
				$users_name= $u_array[0]['fullname'];
?>
<div class="caption-div blog-pane page-content-pane animated fadeInUp">
    		<div class="title-div">Page Contents<div class="close" onclick="alert_close()"><i class="fa fa-close"></i></div></div>
<div class="blog-pane-div-in">


<div class="right-div">
                <div class="alert">Select <span>page title</span> to view its <span>CONTENTS</span></div>
                    <div class="title"> SELECT PAGE TITLE:</div>
                            <select id="content-id"  class="text_field selectinput" onchange="_get_content_for_title()">
							   <?php 
                           $query= mysqli_query($conn,"SELECT content_id, content_title FROM page_content_tab");
                          while($fetch=mysqli_fetch_array($query)){
                          $content_id=$fetch['content_id'];
                          $content_title=$fetch['content_title'];
                           ?>
                             <option value="<?php echo $content_id;?>"><?php echo $content_title;?></option>
                              <?php }?>
                            </select>     
                    <div class="title"> PAGE CONTENTS:</div>
                    <div id="page-content">
					<script src="js/TextEditor.js" referrerpolicy="origin"></script>
                      <script>tinymce.init({selector:'#content-text',  // change this value according to your HTML
                        plugins: "link"
                      });</script>
                    <textarea class="text_field" style="width:100%;" rows="15" id="content-text" title="Type Page Content Here" placeholder="Type Page Content Here"><?php echo $content_text; ?></textarea>
                        <div class="alert">Last Update By: <span><?php echo $users_name;?></span> | <span><?php echo $date;?></span></div>
                      <div class="btn-div">     
                     <button class="btn" onclick="_update_page_content()" id="update-page-btn"> <i class="fa fa-check"></i> UPDATE CONTENT </button>
                     </div>
                     </div>
</div>
</div>
    </div>

<?php }?>

<?php if ($view_content=='get_content_for_title'){
            $query=mysqli_query($conn,"SELECT * FROM page_content_tab  WHERE content_id='$content_id'");
            $fetch=mysqli_fetch_array($query);
					$content_text=$fetch['content_text'];
					$updated_by=$fetch['updated_by'];
					$date=$fetch['date'];
		 $array=$callclass->_get_staff_detail($conn, $updated_by);
 			  $fetch = json_decode($array, true);
				$users_name= $fetch[0]['fullname'];
?>

					<script src="js/TextEditor.js" referrerpolicy="origin"></script>
                      <script>tinymce.init({selector:'#content-text',  // change this value according to your HTML
                        plugins: "link"
                      });</script>
                    <textarea class="text_field" style="width:100%;" rows="15" id="content-text" title="Type Page Content Here" placeholder="Type Page Content Here"><?php echo $content_text; ?></textarea>
                        <div class="alert">Last Update By: <span><?php echo $users_name;?></span> | <span><?php echo $date;?></span></div>
                      <div class="btn-div">     
                     <button class="btn" onclick="_update_page_content()" id="update-page-btn"> <i class="fa fa-check"></i> UPDATE CONTENT </button>
                     </div>
<?php }?>




<?php if ($view_content=='marketing_videos'){
			$status_id='';
			$all_search_txt='';
			?>
<div class="tab-div">
      <button class="tab-btn" onClick="_get_page('publications', 'publications')">ARTICLES</button>
      <button class="tab-btn active-tab" onClick="_get_page('marketing_videos', 'publications')">VIDEOS</button>
      <button class="tab-btn" onclick="_get_page('training_panel', 'publications')">TRAINING</button>
      <button class="tab-btn" onclick="_get_page('journal_panel', 'publications')">JOURNAL</button>
      <button class="tab-btn" onclick="_get_form('page_contents')">PAGE CONTENTS</button>
</div>

         <div class="alert alert-success" style="margin-bottom:0px;"> <span><i class="fa fa-newspaper-o"></i></span> PUBLICATIONS / VIDEOS <button class="btn" onClick="_get_form('video-form')"><i class="fa fa-plus"></i> ADD A NEW VIDEO</button></div>

            
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
                 <select id="status_id"  class="text_field select" onchange="_fetch_video_list()">
                 <option value="" selected="selected">All video Status</option>
                       <?php 
                   $status_query= mysqli_query($conn,"SELECT distinct(status_id) FROM videos_tab ORDER BY status_id ASC");
                  while($status_sel=mysqli_fetch_array($status_query)){
                  $status_ids=$status_sel[0];
				  if ($status_ids=='PUB'){$status_name='ACTIVE';}else{$status_name='INACTIVE';}
                   ?>
                     <option value="<?php echo $status_ids;?>"><?php echo $status_name;?></option>
                      <?php }?>
                </select>
                
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_video_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
            </div>
            

<div class="blog-back-div animated fadeIn" id="search-content">
<?php $check_code='video-list';?>
<?php include 'sub-codes.php'?>
</div>
<?php } ?>




<?php if ($view_content=='video-form'){?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-youtube"></i> ADD A NEW VIDEO</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert">Fill the form below to <span>ADD</span> new video</div>
                
                    <div class="title"> VIDEO TITLE:</div>
                    <input id="video_title" type="text" class="text_field" placeholder="Type Video Title Here..." maxlength="70" title="Type Video Title Here" />
                    <div class="title"> VIDEO EMBED URL:</div>
                    <textarea id="video_url" class="text_field" placeholder="Paste URL here" title="QUOTE DETAILS" rows="4"  onkeyup="_fetch_youtube_video()"></textarea>
                <div class="alert alert-success" id="iframe">
                <div class="iframe">
                <!--youtube url here-->
               </div>
               </div>
                    <div class="title"> VIDEO STATUS:</div>
                             <select id="_status_id"  class="text_field selectinput">
                             <option value="" selected="selected">SELECT STATE</option>
									   <?php 
                                   $status_query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('PUB', 'UNP')");
                                  while($status_sel=mysqli_fetch_array($status_query)){
                                  $status_id=$status_sel['status_id'];
                                  $status_name=$status_sel['status_name'];
                                   ?>
                                     <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
                                      <?php }?>
                            </select>
                    <button class="action-btn" id="reg-video-btn" type="button" title="Submit" onclick="_reg_video();"> <i class="fa fa-check"></i> SUBMIT </button>
        </div>
</div>
<?php } ?>



<?php if ($view_content=='video_details'){ $video_id = $_POST['ids'];?>
			<?php
            $videos_query=mysqli_query($conn,"SELECT video_url FROM videos_tab  WHERE video_id='$video_id'")or die (mysqli_error($conn));
            $video_sel=mysqli_fetch_array($videos_query);
					$video_url=$video_sel['video_url'];
						 $video_array=$callclass->_get_video_detail($conn, $video_id);
							  $v_array = json_decode($video_array, true);
								$video_title= $v_array[0]['video_title'];
								$status_id= $v_array[0]['status_id'];
									if($status_id=='PUB'){$status='active';}else{$status='inactive';}
						$status_fetch=$callclass->_get_status_detail($conn, $status_id);
						  $status_array = json_decode($status_fetch, true);
							$status_name= $status_array[0]['statusname'];
								$staff_id= $v_array[0]['staff_id'];
									 $user_array=$callclass->_get_user_detail($conn, $staff_id);
										  $u_array = json_decode($user_array, true);
											$fullname= $u_array[0]['fullname'];
								$date= $v_array[0]['date'];
					
					$date=date('d M Y h : i : s', strtotime($date));
?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-youtube"></i> UPDATE VIDEO</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert">Fill the form below to <span>UPDATE</span> this video</div>
                
                    <div class="title"> VIDEO TITLE:</div>
                    <input id="video_title" type="text" class="text_field" placeholder="Type Video Title Here..." maxlength="70" value="<?php echo $video_title;?>" title="Type Video Title Here" />
                    <div class="title"> VIDEO EMBED URL:</div>
                    <textarea id="video_url" class="text_field" placeholder="Paste URL here" title="QUOTE DETAILS" rows="4"  onkeyup="_fetch_youtube_video()"><?php echo $video_url;?></textarea>
                <div class="alert alert-success" id="iframe" style="display:block"><div class="iframe">
                <?php echo $video_url;?>
               </div></div>
                    <div class="title"> VIDEO STATUS:</div>
                             <select id="_status_id"  class="text_field selectinput">
                             <option value="<?php echo $status_id;?>" selected="selected"><?php echo $status_name;?></option>
									   <?php 
                                   $status_query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('PUB', 'UNP')");
                                  while($status_sel=mysqli_fetch_array($status_query)){
                                  $status_id=$status_sel['status_id'];
                                  $status_name=$status_sel['status_name'];
                                   ?>
                                     <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
                                      <?php }?>
                            </select>
                      <?php if ($user_role_id==3){?>      
                    <button class="action-btn red" id="delete-video-btn" type="button" title="Submit" onclick="_delete_video('<?php echo $video_id;?>');"> <i class="fa fa-trash"></i> DELETE VIDEO </button>
                      <?php }?>
                    <button class="action-btn" id="update-video-btn" type="button" title="Submit" onclick="_update_video('<?php echo $video_id;?>');"> <i class="fa fa-check"></i> UPDATE VIDEO </button>
        </div>
</div>
<?php } ?>










<?php if ($view_content=='training_panel'){
			$status_id='';
			$all_search_txt='';
			mysqli_query($conn,"UPDATE `training_tab` SET status_id='CLS' WHERE training_end_date<=NOW()")or die (mysqli_error($conn));
			?>
<div class="tab-div">
      <button class="tab-btn" onClick="_get_page('publications', 'publications')">ARTICLES</button>
      <button class="tab-btn" onClick="_get_page('marketing_videos', 'publications')">VIDEOS</button>
      <button class="tab-btn active-tab" onclick="_get_page('training_panel', 'publications')">TRAINING</button>
      <button class="tab-btn" onclick="_get_page('journal_panel', 'publications')">JOURNAL</button>
      <button class="tab-btn" onclick="_get_form('page_contents')">PAGE CONTENTS</button>
</div>

         <div class="alert alert-success" style="margin-bottom:0px;"> <span><i class="fa fa-newspaper-o"></i></span> PUBLICATIONS / TRAINING <button class="btn" onClick="_get_form('training-form')"><i class="fa fa-plus"></i> ADD A NEW TRAINING</button></div>

            
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
                 <select id="status_id"  class="text_field select" onchange="_fetch_training_list()">
                 <option value="" selected="selected">All Training Status</option>
                       <?php 
                   $status_query= mysqli_query($conn,"SELECT distinct(status_id) FROM training_tab ORDER BY status_id ASC");
                  while($status_sel=mysqli_fetch_array($status_query)){
                  $status_ids=$status_sel[0];
					$training_status=$callclass->_get_status_detail($conn, $status_ids);
					$status_array = json_decode($training_status, true);
					$status_name= $status_array[0]['statusname'];
                   ?>
                     <option value="<?php echo $status_ids;?>"><?php echo $status_name;?></option>
                      <?php }?>
                </select>
                
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_training_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
            </div>
            

<div class="blog-back-div animated fadeIn" id="search-content">
<?php $check_code='training_list';?>
<?php include 'sub-codes.php'?>
</div>
<?php } ?>






<?php if ($view_content=='training-form'){?>
<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-universal-access"></i> REGISTER TRAINING</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
            <div class="inner-div" id="container-more-content">
    <div class="alert alert-success"> - Fill this form to  <span>ADD NEW TRAINING</span></div>
    <div class="title">TRAINING TYPE</div>
    <select id="training-type-id"  class="text_field selectinput">
     <option value="" selected="selected">SELECT TRAINING TYPE</option>
               <?php 
           $status_query= mysqli_query($conn,"SELECT * FROM training_type_tab");
          while($status_sel=mysqli_fetch_array($status_query)){
          $training_type_id=$status_sel['training_type_id'];
          $training_type_name=$status_sel['training_type_name'];
           ?>
             <option value="<?php echo $training_type_id;?>"><?php echo $training_type_name;?></option>
              <?php }?>
    </select>
    <div class="title">TRAINING TITLE</div>
    <input id="training-title" type="text" class="text_field" placeholder="TRAINING TITLE" title="TRAINING TITLE"/>
<!--=================================================================================================-->              
        <div class="title">UPLOAD TRAINING BROCHURE</div>
        <div class="video-div note_div"><iframe src="" style="border:none; margin:0px; width:100%; height:250px;" id="note-preview"> </iframe></div>
        <div class="alert" style="margin-bottom:0px;"> <span>Note:</span> Maximum size of lesson note should not be more than <span>300kb</span> to avoid browser crash</div>
        <label>
        <input type="file" required name="notefile" class="text_field" id="up_note" style="display:none;" accept=".pdf"  /> 
        <div class="upload-btn" id="upload-note-btn"> <i class="fa fa-upload"></i> CLICK HERE TO UPLOAD BROCHURE</div>
        </label>
<!--=================================================================================================--> 
    <div class="title">TRAINING VENUE/URL</div>
    <input id="training-venue" type="text" class="text_field" placeholder="TRAINING VENUE/URL" title="TRAINING VENUE/URL"/>
    <div class="title">NUMBER OF SEATS</div>
    <input id="training-seats" type="number"  onkeypress="return isNumber(event)" class="text_field" placeholder="NUMBER OF SEATS" title="NUMBER OF SEATS"/>
   <div class="segment">
        <div class="title">TRAINING START DATE</div>
        <input id="training-start-date" type="date" class="text_field" placeholder="TRAINING DATE" title="TRAINING TITLE"/>
    </div>
   <div class="segment">
        <div class="title">TRAINING START TIME</div>
        <input id="training-start-time" type="time" class="text_field" placeholder="TRAINING TIME" title="TRAINING TITLE"/>
    </div>
   <div class="segment">
        <div class="title">TRAINING END DATE</div>
        <input id="training-end-date" type="date" class="text_field" placeholder="TRAINING DATE" title="TRAINING TITLE"/>
    </div>
   <div class="segment">
        <div class="title">TRAINING END TIME</div>
        <input id="training-end-time" type="time" class="text_field" placeholder="TRAINING TIME" title="TRAINING TITLE"/>
    </div>
    
    <div class="title">TRAINING AMOUNT ($)</div>
    <input id="training-amount" type="number"  class="text_field" placeholder="TRAINING AMOUNT ($)" title="TRAINING AMOUNT ($)"/>




        <div class="title">UPLOAD THUMBNAIL</div>
        <div class="video-div note_div"><img src="uploaded_files/training/pix/thumbnail.jpg" id="thumbnail" /></div>
        <div class="alert"  style="margin-bottom:0px;"><span>NOTE:</span> You are to upload a picture that describe this training</div>
    <label>
        <input type="file" class="text_field" id="note_pix" style="display:none;" accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="Thumbnail.UpdatePreview(this);"/> 
        <div class="upload-btn"> <i class="fa fa-upload"></i> CLICK HERE TO UPLOAD THUMBNAIL</div>
    </label>
    <div class="title">TRAINING STATUS</div>
    <select id="training-status"  class="text_field selectinput">
     <option value="" selected="selected">SELECT STATUS</option>
               <?php 
           $status_query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('A', 'S')");
          while($status_sel=mysqli_fetch_array($status_query)){
          $status_id=$status_sel['status_id'];
          $status_name=$status_sel['status_name'];
           ?>
             <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
              <?php }?>
    </select>

	<div class="progress-div" style="display:none;">
        <div class="alert success"><img src="all-images/images/wait.gif" width="15" height="15" /> <span>UPLOAD IN PROGRESS...</span><br/> Please DO NOT close this panel as the process takes some time.</div>
        <div class="ajax-progress"></div>
    </div>
    <button class="action-btn" type="button" title="ADD" id="register_training_btn" onclick="_register_training()"> <i class="fa fa-plus-square"></i> ADD TRAINING </button>
<script type="text/javascript" language="javascript">
$(function(){
    $('#up_note').on('change', function(){
		var file = this.files[0];
		var reader = new FileReader();
		reader.onload = viewer.load;
		reader.readAsDataURL(file);
		viewer.setProperties(file);
		$('#upload-note-btn').html('<img src="all-images/images/ajax-loader.gif"/>').fadeIn(500);
  }); 
      var viewer = {
		  load : function(e){
			 $('#note-preview').attr('src', e.target.result);
		$('#upload-note-btn').html('<i class="fa fa-upload"></i> CLICK HERE TO UPLOAD BROCHURE').fadeIn(500);
		  },
	  }
});
</script>
       	 	</div>
</div>
<?php } ?>











<?php if ($view_content=='update-training'){
		$training_id=$ids;
		$fetch=$callclass->_get_training_detail($conn, $training_id);
		$array = json_decode($fetch, true);
		$training_title=$array[0]['training_title'];
		$training_desc=$array[0]['training_desc'];
		$training_pix=$array[0]['training_pix'];
		$training_start_date=$array[0]['training_start_date'];
		$training_start_time=$array[0]['training_start_time'];
		$training_end_date=$array[0]['training_end_date'];
		$training_end_time=$array[0]['training_end_time'];
		$training_type_id=$array[0]['training_type_id'];
		$training_venue=$array[0]['training_venue'];
		$training_amount=$array[0]['training_amount'];
		$training_seat=$array[0]['training_seat'];
		$staff_id=$array[0]['staff_id'];
		$status_id=$array[0]['status_id'];
		$date=$array[0]['date'];
		
		$fetch=$callclass->_get_training_type_detail($conn, $training_type_id);
		$array = json_decode($fetch, true);
		$training_type_name=$array[0]['training_type_name'];
	?>
<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-universal-access"></i> UPDATE TRAINING</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
            <div class="inner-div" id="container-more-content">
    <div class="alert alert-success"> - Fill this form to  <span>UPDATE THIS TRAINING DETAILS</span></div>
    <div class="title">TRAINING TYPE</div>
    <select id="training-type-id"  class="text_field selectinput">
     <option value="<?php echo $training_type_id;?>" selected="selected"><?php echo $training_type_name;?></option>
               <?php 
           $status_query= mysqli_query($conn,"SELECT * FROM training_type_tab");
          while($status_sel=mysqli_fetch_array($status_query)){
          $training_type_id=$status_sel['training_type_id'];
          $training_type_name=$status_sel['training_type_name'];
           ?>
             <option value="<?php echo $training_type_id;?>"><?php echo $training_type_name;?></option>
              <?php }?>
    </select>
    <div class="title">TRAINING TITLE</div>
    <input id="training-title" type="text" class="text_field" placeholder="TRAINING TITLE" title="TRAINING TITLE" value="<?php echo $training_title;?>"/>
<!--=================================================================================================-->              
        <div class="title">UPLOAD TRAINING BROCHURE</div>
        <div class="video-div note_div"><iframe src="uploaded_files/training/note/<?php echo $training_desc;?>" style="border:none; margin:0px; width:100%; height:250px;" id="essay" name="essay"> </iframe></div>
        <div class="alert" style="margin-bottom:0px;"> <span>Note:</span> Maximum size of lesson note should not be more than <span>300kb</span> to avoid browser crash</div>
        <label>
        <input type="file" required name="notefile" class="text_field" id="up_note" style="display:none;" accept=".pdf"  /> 
        <div class="upload-btn" id="upload-note-btn"> <i class="fa fa-upload"></i> CLICK HERE TO UPLOAD BROCHURE</div>
        </label>
<!--=================================================================================================--> 
    <div class="title">TRAINING VENUE/URL</div>
    <input id="training-venue" type="text" class="text_field" placeholder="TRAINING VENUE/URL" title="TRAINING VENUE/URL" value="<?php echo $training_venue;?>"/>
    <div class="title">NUMBER OF SEATS</div>
    <input id="training-seats" type="number"  onkeypress="return isNumber(event)" class="text_field" placeholder="NUMBER OF SEATS" title="NUMBER OF SEATS" value="<?php echo $training_seat;?>"/>

   <div class="segment">
        <div class="title">TRAINING START DATE</div>
        <input id="training-start-date" type="date" class="text_field" placeholder="TRAINING START DATE" title="TRAINING START DATE" value="<?php echo $training_start_date;?>"/>
    </div>
   <div class="segment">
        <div class="title">TRAINING START TIME</div>
        <input id="training-start-time" type="time" class="text_field" placeholder="TRAINING START TIME" title="TRAINING START TIME" value="<?php echo $training_start_time;?>"/>
    </div>
   <div class="segment">
        <div class="title">TRAINING END DATE</div>
        <input id="training-end-date" type="date" class="text_field" placeholder="TRAINING END DATE" title="TRAINING END DATE" value="<?php echo $training_end_date;?>"/>
    </div>
   <div class="segment">
        <div class="title">TRAINING END TIME</div>
        <input id="training-end-time" type="time" class="text_field" placeholder="TRAINING END TIME" title="TRAINING END TIME" value="<?php echo $training_end_time;?>"/>
    </div>

    <div class="title">TRAINING AMOUNT ($)</div>
    <input id="training-amount" type="number"  class="text_field" placeholder="TRAINING AMOUNT ($)" title="TRAINING AMOUNT ($)" value="<?php echo $training_amount;?>"/>
        <div class="title">UPLOAD THUMBNAIL</div>
        <div class="video-div note_div"><img src="uploaded_files/training/pix/<?php echo $training_pix;?>" id="thumbnail" /></div>
        <div class="alert"  style="margin-bottom:0px;"><span>NOTE:</span> You are to upload a picture that describe this training</div>
    <label>
        <input type="file" class="text_field" id="note_pix" style="display:none;" accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="Thumbnail.UpdatePreview(this);"/> 
        <div class="upload-btn"> <i class="fa fa-upload"></i> CLICK HERE TO UPLOAD THUMBNAIL</div>
    </label>
    <div class="title">TRAINING STATUS</div>
    <select id="training-status"  class="text_field selectinput">
     <option value="" selected="selected">SELECT STATUS</option>
               <?php 
           $status_query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('A', 'S')");
          while($status_sel=mysqli_fetch_array($status_query)){
          $status_id=$status_sel['status_id'];
          $status_name=$status_sel['status_name'];
           ?>
             <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
              <?php }?>
    </select>

	<div class="progress-div" style="display:none;">
        <div class="alert success"><img src="all-images/images/wait.gif" width="15" height="15" /> <span>UPLOAD IN PROGRESS...</span><br/> Please DO NOT close this panel as the process takes some time.</div>
        <div class="ajax-progress"></div>
    </div>
    <button class="action-btn" type="button" title="UPDATE" id="register_training_btn" onclick="_update_training('<?php echo $training_id;?>')"> <i class="fa fa-plus-square"></i> UPDATE TRAINING </button>
<script type="text/javascript" language="javascript">
$(function(){
    $('#up_note').on('change', function(){
		var file = this.files[0];
		var reader = new FileReader();
		reader.onload = viewer.load;
		reader.readAsDataURL(file);
		viewer.setProperties(file);
		$('#upload-note-btn').html('<img src="all-images/images/ajax-loader.gif"/>').fadeIn(500);
  }); 
      var viewer = {
		  load : function(e){
			 $('#note-preview').attr('src', e.target.result);
		$('#upload-note-btn').html('<i class="fa fa-upload"></i> CLICK HERE TO UPLOAD BROCHURE').fadeIn(500);
		  },
	  }
});
</script>
       	 	</div>
</div>
<?php } ?>









<?php if($view_content=='training-participant'){
		$training_id=$ids;
		$fetch=$callclass->_get_training_detail($conn, $training_id);
		$array = json_decode($fetch, true);
					$training_title=$array[0]['training_title'];
					$training_desc=$array[0]['training_desc'];
					$training_pix=$array[0]['training_pix'];
					
					$training_start_date=$array[0]['training_start_date'];
					$training_start_time=$array[0]['training_start_time'];
					$training_end_date=$array[0]['training_end_date'];
					$training_end_time=$array[0]['training_end_time'];

					$training_start_date=date('d M, Y', strtotime($training_start_date));
					$training_start_time=date('h:i a', strtotime($training_start_time));
					$training_end_date=date('d M, Y', strtotime($training_end_date));
					$training_end_time=date('h:i a', strtotime($training_end_time));
					
					
					$training_type_id=$array[0]['training_type_id'];
					$training_venue=$array[0]['training_venue'];
					$training_amount=$array[0]['training_amount'];
					$training_seat=$array[0]['training_seat'];
					$staff_id=$array[0]['staff_id'];
					$status_id=$array[0]['status_id'];
					$date=$array[0]['date'];

		$fetch=$callclass->_get_training_type_detail($conn, $training_type_id);
		$array = json_decode($fetch, true);
		$training_type_name=$array[0]['training_type_name'];
	?>

<div class="caption-div company-details animated fadeInUp">
    		<div class="title-div">Training Participants<div class="close" onclick="alert_close()"><i class="fa fa-close"></i></div></div>
            
            <div class="company-profile-div">
            	<div class="training-participant-div">
                   <div class="alert alert-success">
                   TRAINING TOPIC: <span><?php echo $training_title;?></span><br />
                   START DATE: <span><?php echo $training_start_date;?></span> | <span><?php echo $training_start_time;?></span><br />
                   END DATE: <span><?php echo $training_end_date;?></span> | <span><?php echo $training_end_time;?></span><br />
                   TRAINING TYPE: <span><?php echo $training_type_name;?></span> | TRAINING VENUE/URL: <span><?php echo $training_venue;?></span><br />
                   </div>
               
                         <div class="table-div animated fadeIn" id="table-div">
                        
                                        <table class="table" cellspacing="0" id="transaction-table">
                                            <tr>
                                                <td colspan="20" class="tb-title">PARTICIPANT LIST <button class="btn" onclick="exportTableToExcel('transaction-table','collectionExportReport')">EXPORT</button></td>
                                            </tr>
                                            <tr class="tb-col">
                                                <td>SN</td>
                                                <td>TRANSACTION ID</td>
                                                <td>NAME</td>
                                                <td>COMPANY</td>
                                                <td>EMAIL</td>
                                                <td>DATE</td>
                                            </tr>
											<?php
                                            $no=0;
                                            $query=mysqli_query($conn,"SELECT * FROM training_participant_tab WHERE training_id='$training_id' AND status_id='A'");
                                                while($fetch=mysqli_fetch_array($query)){
                                                $no++;
                                                $pay_id=$fetch['pay_id'];
                                                $user_id=$fetch['user_id'];
                                                $company_id=$fetch['company_id'];
                                                $date=$fetch['date'];
												
												$user_array=$callclass->_get_user_detail($conn, $user_id);
												$u_array = json_decode($user_array, true);
												$fullname= $u_array[0]['fullname'];
												$email= $u_array[0]['email'];
												$fetch_company=$callclass->_get_company_detail($conn, $company_id);
												$company_array = json_decode($fetch_company, true);
												$company_name=$company_array[0]['company_name'];
                                           ?>
                                                                                 
                                            <tr>
                                                <td><?php echo $no?></td>
                                                <td><?php echo $pay_id?></td>
                                                <td><?php echo $fullname?></td>
                                                <td><span onclick="_get_form_with_id('company_details','<?php echo $company_id?>')"><?php echo $company_name?></span></td>
                                                <td><?php echo $email?></td>
                                                <td><?php echo $date?></td>
                                            </tr>
                                         
                                            <?php }?>
                                            <?php if ($no==0){?>
                                            <tr>
                                                <td colspan="20">
                                                    <div class="alert"><i class="fa fa-bell-o"></i> No record found</div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                        
                        </div>              
               
                </div>
            </div>
    </div>

<?php }?>









<?php if ($view_content=='journal_panel'){
			$all_search_txt='';
			?>
<div class="tab-div">
      <button class="tab-btn" onClick="_get_page('publications', 'publications')">ARTICLES</button>
      <button class="tab-btn" onClick="_get_page('marketing_videos', 'publications')">VIDEOS</button>
      <button class="tab-btn" onclick="_get_page('training_panel', 'publications')">TRAINING</button>
      <button class="tab-btn active-tab" onclick="_get_page('journal_panel', 'publications')">JOURNAL</button>
      <button class="tab-btn" onclick="_get_form('page_contents')">PAGE CONTENTS</button>
</div>

         <div class="alert alert-success" style="margin-bottom:0px;"> <span><i class="fa fa-newspaper-o"></i></span> PUBLICATIONS / JOURNAL <button class="btn" onClick="_get_form('journal-form')"><i class="fa fa-plus"></i> ADD JOURNAL LINK</button></div>

            
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
                 <select id="status_id"  class="text_field select" onchange="_fetch_journal_list()">
                 <option value="" selected="selected">All Journal Status</option>
                       <?php 
                   $status_query= mysqli_query($conn,"SELECT distinct(status_id) FROM journal_tab ORDER BY status_id ASC");
                  while($status_sel=mysqli_fetch_array($status_query)){
                  $status_ids=$status_sel[0];
					$training_status=$callclass->_get_status_detail($conn, $status_ids);
					$status_array = json_decode($training_status, true);
					$status_name= $status_array[0]['statusname'];
                   ?>
                     <option value="<?php echo $status_ids;?>"><?php echo $status_name;?></option>
                      <?php }?>
                </select>
                
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_journal_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
            </div>
            

<div class="blog-back-div animated fadeIn" id="search-content">
<?php $check_code='journal-list';?>
<?php include 'sub-codes.php'?>
</div>
<?php } ?>


<?php if ($view_content=='journal-form'){?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-newspaper-o"></i> ADD JOURNAL LINK</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert">Fill the form below to <span>ADD JOURNAL LINK</span></div>
                
                    <div class="title"> JOURNAL TITLE:</div>
                    <input id="journal_title" type="text" class="text_field" placeholder="Type Journal Title Here..." title="Type Journal Title Here" />
                    <div class="title"> JOURNAL URL:</div>
                    <textarea id="journal_url" class="text_field" placeholder="Paste URL here" title="JOURNAL URL" rows="4"></textarea>
                    <div class="title">UPLOAD JOURNAL THUMBNAIL</div>
                    <div class="video-div note_div"><img src="uploaded_files/journal-pix/thumbnail.jpg" id="thumbnail" /></div>
                    <div class="alert"  style="margin-bottom:0px;"><span>NOTE:</span> You are to upload a picture that describe this journal</div>
                <label>
                    <input type="file" class="text_field" id="journal_pix" style="display:none;" accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="Thumbnail.UpdatePreview(this);"/> 
                    <div class="upload-btn"> <i class="fa fa-upload"></i> CLICK HERE TO UPLOAD </div>
                </label>
                <div class="title">JOURNAl STATUS</div>
                <select id="journal-status"  class="text_field selectinput">
                 <option value="" selected="selected">SELECT STATUS</option>
                           <?php 
                       $status_query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('PUB', 'UNP')");
                      while($status_sel=mysqli_fetch_array($status_query)){
                      $status_id=$status_sel['status_id'];
                      $status_name=$status_sel['status_name'];
                       ?>
                         <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
                          <?php }?>
                </select>
                    <button class="action-btn" id="reg-journal-btn" type="button" title="Submit" onclick="_reg_journal('reg_journal','');"> <i class="fa fa-check"></i> SUBMIT </button>
        </div>
</div>
<?php } ?>



<?php if ($view_content=='journal_details'){
		$journal_id=$ids;
		  $get_journal=$callclass->_get_journal_detail($conn, $journal_id);
		  $fetch = json_decode($get_journal, true);
		  $journal_title=$fetch[0]['journal_title'];
		  $journal_url=$fetch[0]['journal_url'];
		  $journal_pix=$fetch[0]['journal_pix'];
		  $journal_status_id=$fetch[0]['status_id'];
		  $journal_staff_id=$fetch[0]['staff_id'];
	
	?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-newspaper-o"></i> UPDATE JOURNAL LINK</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert">Fill the form below to <span>UPDATE JOURNAL LINK</span> 
                <a href="<?php echo $journal_url;?>" target="_blank"><button class="btn"  title="Visit Site"><i class="fa fa-globe"></i></button></a>
                </div>
                
                    <div class="title"> JOURNAL TITLE:</div>
                    <input id="journal_title" type="text" value="<?php echo $journal_title;?>" class="text_field" placeholder="Type Journal Title Here..." title="Type Journal Title Here" />
                    <div class="title"> JOURNAL URL:</div>
                    <textarea id="journal_url" class="text_field" placeholder="Paste URL here" title="JOURNAL URL" rows="4"><?php echo $journal_url;?></textarea>
                    <div class="title">UPLOAD JOURNAL THUMBNAIL</div>
                    <div class="video-div note_div"><img src="uploaded_files/journal-pix/<?php echo $journal_pix;?>" id="thumbnail" /></div>
                    <div class="alert"  style="margin-bottom:0px;"><span>NOTE:</span> You are to upload a picture that describe this journal</div>
                <label>
                    <input type="file" class="text_field" id="journal_pix" style="display:none;" accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="Thumbnail.UpdatePreview(this);"/> 
                    <div class="upload-btn"> <i class="fa fa-upload"></i> CLICK HERE TO UPLOAD </div>
                </label>
                <div class="title">JOURNAl STATUS</div>
                <select id="journal-status"  class="text_field selectinput">
                 <option value="" selected="selected">SELECT STATUS</option>
                           <?php 
                       $status_query= mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id IN ('PUB', 'UNP')");
                      while($status_sel=mysqli_fetch_array($status_query)){
                      $status_id=$status_sel['status_id'];
                      $status_name=$status_sel['status_name'];
                       ?>
                         <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
                          <?php }?>
                </select>
                    <button class="action-btn" id="reg-journal-btn" type="button" title="Submit" onclick="_reg_journal('update_journal','<?php echo $journal_id;?>');"> <i class="fa fa-check"></i> SUBMIT </button>
        </div>
</div>
<?php } ?>
































































<?php if ($view_content=='assess_life'){?>
<div class="tab-div">
      <button class="tab-btn active-tab" onClick="_get_page('assess_life', 'products')">AssessLife</button>
      <button class="tab-btn">ViberateLife</button>
      <button class="tab-btn">FrequencyChecks</button>
<!--      
		<button class="tab-btn" onClick="_get_page('viberate_life', 'products')">ViberateLife</button>
      	<button class="tab-btn" onclick="_get_page('frequency_checks', 'products')">FrequencyChecks</button>
-->
</div>

    <div class="search-div" data-aos="fade-in" data-aos-duration="700">
    <input id="all_search_txt" onkeyup="_fetch_parent_alloy_list()" type="text" class="text_field full" placeholder="Type here to search..." title="Type here to search" />
    </div>
         <div class="alert alert-success"> <span><i class="fa fa-cubes"></i></span> List of Parent Alloys Under <span>AssessLife</span>
         <button class="btn" onClick="_get_form_with_id('parent-alloy-form')"><i class="fa fa-plus"></i> ADD NEW PARENT ALLOY</button></div>
    <div class="product-list-back-div" id="search-content">
            <?php $all_search_txt='';?>
            <?php $check_code='assesslife-list';?>
            <?php require_once 'sub-codes.php'?>
    </div>
<?php }?>











<?php if ($view_content=='parent-alloy-form'){?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-cubes"></i> ADD NEW PARENT ALLOY</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert">Fill the form below to <span>ADD</span> new parent alloy</div>
                
                    <div class="title"> PARENT ALLOY NAME:</div>
                    <input id="alloy_name" type="text" class="text_field" placeholder="PARENT ALLOY NAME" title="PARENT ALLOY NAME" />
                    <div class="title">UPLOAD ALLOY PICTUTE</div>
                    <div class="video-div note_div"><img src="uploaded_files/alloy-pix/thumbnail.jpg" id="thumbnail" /></div>
                    <div class="alert"  style="margin-bottom:0px;"><span>NOTE:</span> You are to upload a picture that describe this alloy</div>
                <label>
                    <input type="file" class="text_field" id="alloy_pix" style="display:none;" accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="Thumbnail.UpdatePreview(this);"/> 
                    <div class="upload-btn"> <i class="fa fa-upload"></i> CLICK HERE TO UPLOAD ALLOY PICTUTE</div>
                </label>

                    <button class="action-btn" id="add-alloy-btn" type="button" title="Submit" onclick="_add_parent_alloy();"> <i class="fa fa-check"></i> SUBMIT </button>
        </div>
</div>
<?php } ?>


<?php if ($view_content=='update-parent-alloy-form'){?>
<?php 	
	$alloy_id=$_POST['ids'];
	$fetch=$callclass->_get_alloy_detail($conn, $alloy_id);
	$array = json_decode($fetch, true);
	$alloy_name= $array[0]['alloy_name'];
	$alloy_pix= $array[0]['alloy_pix'];
?>
<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-cubes"></i> UPDATE THIS PARENT ALLOY</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert">Fill the form below to <span>UPDATE</span> new parent alloy</div>
                
                    <div class="title"> PARENT ALLOY NAME:</div>
                    <input id="alloy_name" type="text" class="text_field" placeholder="PARENT ALLOY NAME" title="PARENT ALLOY NAME" value="<?php echo $alloy_name;?>" />
                    
                    <div class="title">UPLOAD ALLOY PICTUTE</div>
                    <div class="video-div note_div"><img src="uploaded_files/alloy-pix/<?php echo $alloy_pix;?>" id="thumbnail" /></div>
                    <div class="alert"  style="margin-bottom:0px;"><span>NOTE:</span> You are to upload a picture that describe this alloy</div>
                <label>
                    <input type="file" class="text_field" id="alloy_pix" style="display:none;" accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="Thumbnail.UpdatePreview(this);"/> 
                    <div class="upload-btn"> <i class="fa fa-upload"></i> CLICK HERE TO UPLOAD ALLOY PICTUTE</div>
                </label>
                    <button class="action-btn" id="update-alloy-btn" type="button" title="Update Alloy" onclick="_update_parent_alloy('<?php echo $alloy_id; ?>');"> <i class="fa fa-check"></i> UPDATE </button>
        </div>
</div>
<?php } ?>






<?php if ($view_content=='alloy-sub-list-form'){?>
<?php $alloy_id=$_POST['ids']; ?>
<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-cubes"></i> SUB-PARENT ALLOY</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
            <div class="inner-div" id="container-more-content">
						 <?php 
						 $check_code='sub_parent_alloy';
							include 'sub-codes.php';
						 ?>
       	 	</div>
</div>
<?php } ?>














<?php if ($view_content=='fetch_alloy_list'){
	$fetch=$callclass->_get_sub_alloy_detail($conn, $alloy_sub_id);
	$array = json_decode($fetch, true);
	$alloy_id= $array[0]['alloy_id'];
	$alloy_sub_name= $array[0]['alloy_sub_name'];
		
	$fetch=$callclass->_get_alloy_detail($conn, $alloy_id);
	$array = json_decode($fetch, true);
	$alloy_name= $array[0]['alloy_name'];
	?>

         <div class="alert alert-success"> <span><i class="fa fa-cubes"></i></span> LIST OF ALLOYS UNDER <span><?php echo $alloy_name; ?></span> / <span><?php echo $alloy_sub_name; ?></span> <button class="btn" onClick="_get_form_with_id('alloy-form','<?php echo $alloy_sub_id; ?>')"><i class="fa fa-plus"></i> ADD NEW ALLOY</button></div>
    <div  id="search-content">
            <?php $all_search_txt='';?>
            <?php $check_code='fetch-alloy-list';?>
            <?php require_once 'sub-codes.php'?>
    </div>
<?php }?>



<?php if ($view_content=='alloy-form'){
   $alloy_sub_id=$_POST['ids']; 
	$fetch=$callclass->_get_sub_alloy_detail($conn, $alloy_sub_id);
	$array = json_decode($fetch, true);
	$alloy_id= $array[0]['alloy_id'];
	$alloy_sub_name= $array[0]['alloy_sub_name'];
		
	$fetch=$callclass->_get_alloy_detail($conn, $alloy_id);
	$array = json_decode($fetch, true);
	$alloy_name= $array[0]['alloy_name'];
	?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-cubes"></i> ADD NEW ALLOY</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert">Fill the form below to <span>ADD</span> new alloy under <span><?php echo $alloy_name; ?></span> / <span><?php echo $alloy_sub_name; ?></span></div>
                
                    <div class="title"> ALLOY NAME:</div>
                    <input id="alloy_name" type="text" class="text_field" placeholder="PARENT ALLOY NAME" title="PARENT ALLOY NAME" />
                    <div class="title"> ANALYTIC PRICE ($):</div>
                    <input id="alloy_price" type="number" class="text_field" placeholder="ANALYTIC PRICE ($)" title="ANALYTIC PRICE ($)" />
                    
                    <button class="action-btn" id="add-alloy-btn" type="button" title="Submit" onclick="_add_alloy('<?php echo $alloy_sub_id; ?>');"> <i class="fa fa-check"></i> SUBMIT </button>
        </div>
</div>
<?php } ?>






<?php if ($view_content=='update-alloy-form'){
   $alloy_unit_id=$_POST['ids']; 
	$fetch=$callclass->_get_alloy_unit_detail($conn, $alloy_unit_id);
	$array = json_decode($fetch, true);
	$alloy_sub_id=$array[0]['alloy_sub_id'];
	$alloy_unit_name=$array[0]['alloy_unit_name'];
	$alloy_unit_price=$array[0]['alloy_unit_price'];
	
	$fetch=$callclass->_get_sub_alloy_detail($conn, $alloy_sub_id);
	$array = json_decode($fetch, true);
	$alloy_id= $array[0]['alloy_id'];
	$alloy_sub_name= $array[0]['alloy_sub_name'];
		
	$fetch=$callclass->_get_alloy_detail($conn, $alloy_id);
	$array = json_decode($fetch, true);
	$alloy_name= $array[0]['alloy_name'];
	?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-cubes"></i> UPDATE THIS ALLOY</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert">Fill the form below to <span>UPDATE</span> this alloy under <span><?php echo $alloy_name; ?></span> / <span><?php echo $alloy_sub_name; ?></span></div>
                
                    <div class="title"> ALLOY NAME:</div>
                    <input id="alloy_name" type="text" class="text_field" placeholder="PARENT ALLOY NAME" title="PARENT ALLOY NAME" value="<?php echo $alloy_unit_name; ?>" />
                    <div class="title"> ANALYTIC PRICE ($):</div>
                    <input id="alloy_price" type="number" class="text_field" placeholder="ANALYTIC PRICE ($)" title="ANALYTIC PRICE ($)"  value="<?php echo $alloy_unit_price; ?>"/>
                    
                    <button class="action-btn" id="update-alloy-btn" type="button" title="Update Alloy" onclick="_update_alloy('<?php echo $alloy_sub_id; ?>','<?php echo $alloy_unit_id; ?>');"> <i class="fa fa-check"></i> UPDATE </button>
        </div>
</div>
<?php } ?>












<?php if ($view_content=='active_order'){
		$total_active_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='A'"));
		$total_active_order= $total_active_order[0];
		$total_pending_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='P'"));
		$total_pending_order= $total_pending_order[0];
		$total_expired_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='EX'"));
		$total_expired_order= $total_expired_order[0];
	?>
<div class="tab-div">
      <button class="tab-btn active-tab" onClick="_get_page('active_order', 'order')">ACTIVE <div class="num"><?php echo number_format($total_active_order);?></div></button>
      <button class="tab-btn" onClick="_get_page('pending_order', 'order')">PENDING <div class="num"><?php echo number_format($total_pending_order);?></div></button>
      <button class="tab-btn" onclick="_get_page('expired_order', 'order')">EXPIRED <div class="num"><?php echo number_format($total_expired_order);?></div></button>
</div>
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_order_list('A')" type="text" class="text_field full" placeholder="Search by ORDER ID..." title="Type here to search" />
            </div>
            

<div class="table-div animated fadeIn" id="search-content">

            	<table class="table" cellspacing="0">
                	<tr>
                    	<td colspan="20" class="tb-title">ACTIVE ORDER </td>
                    </tr>
                	<tr class="tb-col">
                    	<td>SN</td>
                    	<td>ORDER ID</td>
                    	<td>COMPANY NAME</td>
                    	<td>ALLOYS</td>
                    	<td>SEATS</td>
                    	<td>STATUS</td>
                    	<td>PAYMENT METHOD</td>
                    	<td>START DATE</td>
                    	<td>END DATE</td>
                    </tr>
                <?php 
				$no=0;
				$query=mysqli_query($conn,"SELECT * FROM cart_summary_tab WHERE status_id='A' ORDER BY date DESC");
				 while($fetch=mysqli_fetch_array($query)){
					 $no++;
					 $cartsession=$fetch['cart_session'];
					 
					$fetch=$callclass->_get_cart_summary_detail($conn, $cartsession);
					$array = json_decode($fetch, true);
					$company_id= $array[0]['company_id'];
					$no_of_seats= $array[0]['no_of_seats'];
					$grand_total= $array[0]['grand_total'];
					$order_status= $array[0]['status_id'];
					$seat_start_date= $array[0]['seat_start_date'];
					$seat_end_date= $array[0]['seat_end_date'];
					
					$fetch_company=$callclass->_get_company_detail($conn, $company_id);
					$company_array = json_decode($fetch_company, true);
					$company_name=$company_array[0]['company_name'];
					
					$fetch=$callclass->_get_payment_detail($conn, $cartsession);
					$array = json_decode($fetch, true);
					$fund_method_id= $array[0]['fund_method_id'];
					
					$fetch=$callclass->_get_fund_method_detail($conn, $fund_method_id);
					$array = json_decode($fetch, true);
					$fund_method_name= $array[0]['fund_method_name'];
					
					
					
						 //// count alloy
							$count_alloy_query=mysqli_query($conn,"SELECT * FROM cart_tab WHERE cart_session='$cartsession'");
							$count_alloy=mysqli_num_rows($count_alloy_query);
				 
						  if ($order_status=='P'){$class='progress';}
						  else if($order_status=='SD'){$class='hash';}
						  else if($order_status=='CL'){$class='failed';}
						  else if($order_status=='A'){$class='success';}
						  else if($order_status=='EX'){$class='failed';}
						  
						$fetch_status_name=$callclass->_get_status_detail($conn, $order_status);
						  $array_status_name = json_decode($fetch_status_name, true);
							$status_name= $array_status_name[0]['statusname'];
				 ?>
                 
                	<tr>
                    	<td><?php echo $no?></td>
                    	<td><span onclick="_get_form_with_id('order-details','<?php echo $cartsession?>')"><?php echo $cartsession?></span></td>
                    	<td><span onclick="_get_form_with_id('company_details','<?php echo $company_id?>')"><?php echo $company_name?></span></td>
                    	<td><?php echo $count_alloy?></td>
                    	<td><?php echo $no_of_seats?></td>
                    	<td class="<?php echo $class?>"><?php echo $status_name?></td>
                    	<td><?php echo $fund_method_name?></td>
                    	<td><?php echo $seat_start_date?></td>
                    	<td><?php echo $seat_end_date?></td>
                    </tr>
                 
					<?php }?>
                    <?php if ($no==0){?>
                	<tr>
                    	<td colspan="20">
                            <div class="alert"><i class="fa fa-bell-o"></i> No record found</div>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

</div>
<?php } ?>

<?php if ($view_content=='pending_order'){
		$total_active_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='A'"));
		$total_active_order= $total_active_order[0];
		$total_pending_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='P'"));
		$total_pending_order= $total_pending_order[0];
		$total_expired_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='EX'"));
		$total_expired_order= $total_expired_order[0];
	?>
<div class="tab-div">
      <button class="tab-btn" onClick="_get_page('active_order', 'order')">ACTIVE <div class="num"><?php echo number_format($total_active_order);?></div></button>
      <button class="tab-btn active-tab" onClick="_get_page('pending_order', 'order')">PENDING <div class="num"><?php echo number_format($total_pending_order);?></div></button>
      <button class="tab-btn" onclick="_get_page('expired_order', 'order')">EXPIRED <div class="num"><?php echo number_format($total_expired_order);?></div></button>
</div>
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_order_list('P')" type="text" class="text_field full" placeholder="Search by ORDER ID..." title="Type here to search" />
            </div>
            

<div class="table-div animated fadeIn" id="search-content">

            	<table class="table" cellspacing="0">
                	<tr>
                    	<td colspan="20" class="tb-title">PENDING/SAVED ORDER </td>
                    </tr>
                	<tr class="tb-col">
                    	<td>SN</td>
                    	<td>ORDER ID</td>
                    	<td>COMPANY NAME</td>
                    	<td>ALLOYS</td>
                    	<td>SEATS</td>
                    	<td>STATUS</td>
                    	<td>DATE</td>
                    </tr>
                <?php 
				$no=0;
				$query=mysqli_query($conn,"SELECT * FROM cart_summary_tab WHERE status_id ='P' ORDER BY date DESC");
				 while($fetch=mysqli_fetch_array($query)){
					 $no++;
					 $cartsession=$fetch['cart_session'];
					 
					$fetch=$callclass->_get_cart_summary_detail($conn, $cartsession);
					$array = json_decode($fetch, true);
					$company_id= $array[0]['company_id'];
					$no_of_seats= $array[0]['no_of_seats'];
					$grand_total= $array[0]['grand_total'];
					$order_status= $array[0]['status_id'];
					$seat_start_date= $array[0]['seat_start_date'];
					$seat_end_date= $array[0]['seat_end_date'];
					$date= $array[0]['date'];
					
					$fetch_company=$callclass->_get_company_detail($conn, $company_id);
					$company_array = json_decode($fetch_company, true);
					$company_name=$company_array[0]['company_name'];
						 //// count alloy
							$count_alloy_query=mysqli_query($conn,"SELECT * FROM cart_tab WHERE cart_session='$cartsession'");
							$count_alloy=mysqli_num_rows($count_alloy_query);
				 
						  if ($order_status=='P'){$class='progress';}
						  else if($order_status=='SD'){$class='hash';}
						  else if($order_status=='CL'){$class='failed';}
						  else if($order_status=='A'){$class='success';}
						  else if($order_status=='EX'){$class='failed';}
						  
						$fetch_status_name=$callclass->_get_status_detail($conn, $order_status);
						  $array_status_name = json_decode($fetch_status_name, true);
							$status_name= $array_status_name[0]['statusname'];
				 ?>
                 
                	<tr>
                    	<td><?php echo $no?></td>
                    	<td><span onclick="_get_form_with_id('order-details','<?php echo $cartsession?>')"><?php echo $cartsession?></span></td>
                    	<td><span onclick="_get_form_with_id('company_details','<?php echo $company_id?>')"><?php echo $company_name?></span></td>
                    	<td><?php echo $count_alloy?></td>
                    	<td><?php echo $no_of_seats?></td>
                    	<td class="<?php echo $class?>"><?php echo $status_name?></td>
                    	<td><?php echo $date?></td>
                    </tr>
                 
					<?php }?>
                    <?php if ($no==0){?>
                	<tr>
                    	<td colspan="20">
                            <div class="alert"><i class="fa fa-bell-o"></i> No record found</div>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

</div>
<?php } ?>



<?php if ($view_content=='expired_order'){
		$total_active_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='A'"));
		$total_active_order= $total_active_order[0];
		$total_pending_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='P'"));
		$total_pending_order= $total_pending_order[0];
		$total_expired_order=mysqli_fetch_array(mysqli_query($conn,"SELECT count(cart_session) FROM cart_summary_tab WHERE status_id='EX'"));
		$total_expired_order= $total_expired_order[0];
	?>
<div class="tab-div">
      <button class="tab-btn" onClick="_get_page('active_order', 'order')">ACTIVE <div class="num"><?php echo number_format($total_active_order);?></div></button>
      <button class="tab-btn" onClick="_get_page('pending_order', 'order')">PENDING <div class="num"><?php echo number_format($total_pending_order);?></div></button>
      <button class="tab-btn active-tab" onclick="_get_page('expired_order', 'order')">EXPIRED <div class="num"><?php echo number_format($total_expired_order);?></div></button>
</div>
            <div class="search-div" data-aos="fade-in" data-aos-duration="700">
            <!--------------------------------all search select------------------------->
            <input id="all_search_txt" onkeyup="_fetch_order_list('EX')" type="text" class="text_field full" placeholder="Search by ORDER ID..." title="Type here to search" />
            </div>
            

<div class="table-div animated fadeIn" id="search-content">

            	<table class="table" cellspacing="0">
                	<tr>
                    	<td colspan="20" class="tb-title">EXPIRED ORDER </td>
                    </tr>
                	<tr class="tb-col">
                    	<td>SN</td>
                    	<td>ORDER ID</td>
                    	<td>COMPANY NAME</td>
                    	<td>ALLOYS</td>
                    	<td>SEATS</td>
                    	<td>STATUS</td>
                    	<td>PAYMENT METHOD</td>
                    	<td>START DATE</td>
                    	<td>END DATE</td>
                    </tr>
                <?php 
				$no=0;
				$query=mysqli_query($conn,"SELECT * FROM cart_summary_tab WHERE status_id='EX' ORDER BY date DESC");
				 while($fetch=mysqli_fetch_array($query)){
					 $no++;
					 $cartsession=$fetch['cart_session'];
					 
					$fetch=$callclass->_get_cart_summary_detail($conn, $cartsession);
					$array = json_decode($fetch, true);
					$company_id= $array[0]['company_id'];
					$no_of_seats= $array[0]['no_of_seats'];
					$grand_total= $array[0]['grand_total'];
					$order_status= $array[0]['status_id'];
					$seat_start_date= $array[0]['seat_start_date'];
					$seat_end_date= $array[0]['seat_end_date'];
					
					$fetch_company=$callclass->_get_company_detail($conn, $company_id);
					$company_array = json_decode($fetch_company, true);
					$company_name=$company_array[0]['company_name'];
					$fetch=$callclass->_get_payment_detail($conn, $cartsession);
					$array = json_decode($fetch, true);
					$fund_method_id= $array[0]['fund_method_id'];
					
					$fetch=$callclass->_get_fund_method_detail($conn, $fund_method_id);
					$array = json_decode($fetch, true);
					$fund_method_name= $array[0]['fund_method_name'];
					
						 //// count alloy
							$count_alloy_query=mysqli_query($conn,"SELECT * FROM cart_tab WHERE cart_session='$cartsession'");
							$count_alloy=mysqli_num_rows($count_alloy_query);
				 
						  if ($order_status=='P'){$class='progress';}
						  else if($order_status=='SD'){$class='hash';}
						  else if($order_status=='CL'){$class='failed';}
						  else if($order_status=='A'){$class='success';}
						  else if($order_status=='EX'){$class='failed';}
						  
						$fetch_status_name=$callclass->_get_status_detail($conn, $order_status);
						  $array_status_name = json_decode($fetch_status_name, true);
							$status_name= $array_status_name[0]['statusname'];
				
				
				
				 ?>
                 
                	<tr>
                    	<td><?php echo $no?></td>
                    	<td><span onclick="_get_form_with_id('order-details','<?php echo $cartsession?>')"><?php echo $cartsession?></span></td>
                    	<td><span onclick="_get_form_with_id('company_details','<?php echo $company_id?>')"><?php echo $company_name?></span></td>
                    	<td><?php echo $count_alloy?></td>
                    	<td><?php echo $no_of_seats?></td>
                    	<td class="<?php echo $class?>"><?php echo $status_name?></td>
                    	<td><?php echo $fund_method_name?></td>
                    	<td><?php echo $seat_start_date?></td>
                    	<td><?php echo $seat_end_date?></td>
                    </tr>
                 
					<?php }?>
                    <?php if ($no==0){?>
                	<tr>
                    	<td colspan="20">
                            <div class="alert"><i class="fa fa-bell-o"></i> No record found</div>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

</div>
<?php } ?>















<!--==========================================================================================================-->

<?php if ($view_content=='order-details'){
	$cartsession=$_POST['ids'];
			$fetch=$callclass->_get_cart_summary_detail($conn, $cartsession);
			$array = json_decode($fetch, true);
			$company_id= $array[0]['company_id'];
			$num_of_seats= $array[0]['no_of_seats'];
			$order_status= $array[0]['status_id'];
			$seat_start_date= $array[0]['seat_start_date'];
			$seat_end_date= $array[0]['seat_end_date'];
			
			$discount_per_query=mysqli_query($conn,"SELECT discount  FROM discount_tab WHERE $num_of_seats BETWEEN seat_from AND seat_to")or die (mysqli_error($conn));
			$discount_per_sel=mysqli_fetch_array($discount_per_query);
			$discount_per=$discount_per_sel['discount'];

			$fetch=$callclass->_get_cart_settings_detail($conn, 'SET002'); /// setting for goods and services tax (GST). 
			$array = json_decode($fetch, true);
			$gst_per= $array[0]['setting_value'];
			
			$fetch=$callclass->_get_cart_settings_detail($conn, 'SET001'); /// setting for Provincial  sale tax (PST) 
			$array = json_decode($fetch, true);
			$pst_per= $array[0]['setting_value'];

			$fetch_company=$callclass->_get_company_detail($conn, $company_id);
			$company_array = json_decode($fetch_company, true);
			$company_name=$company_array[0]['company_name'];

			$fetch_status_name=$callclass->_get_status_detail($conn, $order_status);
			$array_status_name = json_decode($fetch_status_name, true);
			$status_name= $array_status_name[0]['statusname'];

					$fetch=$callclass->_get_payment_detail($conn, $cartsession);
					$array = json_decode($fetch, true);
					$fund_method_id= $array[0]['fund_method_id'];

					$fetch=$callclass->_get_fund_method_detail($conn, $fund_method_id);
					$array = json_decode($fetch, true);
					$fund_method_name= $array[0]['fund_method_name'];
?>
<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-shopping-cart"></i> ORDER DETAILS</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
            <div class="inner-div">
                <div class="alert alert-success">Below are  the  <span>Saved cart details</span>. Kindly confirm and <span>place order</span> to continue.</div>
        <div class="container-product-list-back-div">
                    <?php  
					$order_initial_amount=0;             
					$query=mysqli_query($conn,"SELECT DISTINCT(alloy_id) FROM cart_tab WHERE cart_session='$cartsession' ORDER BY date DESC");
					 while($fetch=mysqli_fetch_array($query)){
						 $alloy_id=$fetch['alloy_id'];
							$alloy_name_fetch=$callclass->_get_alloy_detail($conn, $alloy_id);
							$alloy_name_array = json_decode($alloy_name_fetch, true);
							$alloy_name= $alloy_name_array[0]['alloy_name'];
						 //// count alloy
							$count_alloy_query=mysqli_query($conn,"SELECT * FROM cart_tab WHERE cart_session='$cartsession' AND alloy_id='$alloy_id'");
							$count_alloy=mysqli_num_rows($count_alloy_query);
						///// get sub price
							$sub_price_query=mysqli_query($conn,"SELECT SUM(price) AS price FROM cart_tab WHERE cart_session='$cartsession' AND alloy_id='$alloy_id'");
							$sub_price_sel=mysqli_fetch_array($sub_price_query);
							$price=$sub_price_sel['price'];
							$order_initial_amount=$order_initial_amount+$price;
					?>
                                    
                                        <div  class="product-list-div">
                                            <div class="product-name"><?php echo $alloy_name; ?></div>
                                            <button class="btn"><?php echo $count_alloy; ?> Alloys</button><br clear="all" />
                                            
                    <?php 
					$no=0; 
					$cart_query=mysqli_query($conn,"SELECT * FROM cart_tab WHERE cart_session='$cartsession' AND alloy_id='$alloy_id'");
					 while($cart_fetch=mysqli_fetch_array($cart_query)){
						 $no++;
						$alloy_unit_id=$cart_fetch['alloy_unit_id'];
						$alloy_unit_price=$cart_fetch['price'];
						$fetch1=$callclass->_get_alloy_unit_detail($conn, $alloy_unit_id);
						$array1 = json_decode($fetch1, true);
						$alloy_unit_name=$array1[0]['alloy_unit_name'];
					?>
                                            <div class="product-sub-list">
                                            	<div class="num"><?php echo $no; ?></div>
                                           	 	<div class="sub-product-name"><?php echo $alloy_unit_name; ?></div>
                                                <button class="price">$ <?php echo $alloy_unit_price; ?></button><br clear="all" />
                                            </div>
                      <?php }?>                      
                                            
                                        </div>
                                    
					<?php }?>
                    </div>
                    <?php
						$seat_bill=$order_initial_amount*$num_of_seats;
						$discount_price=($discount_per/100)*$seat_bill;
						$sub_total=$seat_bill-$discount_price;
						
						$gst_price=($gst_per/100)*$sub_total;
						$pst_price=($pst_per/100)*$sub_total;
						$grand_total=$sub_total+$gst_price+$pst_price;
						?>
                                 <div class="alert alert-success">
                                 <span>CART BILLS:</span><br />
                                    <div class="cart-bill">Total Per Licence/Seat<div class="span">$ <span><?php echo number_format($order_initial_amount,2); ?></span></div></div>
                                    <div class="cart-bill">Number Of Seat <div class="span"><span><?php echo number_format($num_of_seats);?></span></div></div>
                                   <div class="cart-bill">Licence/Seat Bill <div class="span">$ <span id="seat_bill"><?php echo number_format($seat_bill,2);?></span></div></div>
                                   <div class="cart-bill">Discount Applied <span>(<span id="discount_per"><?php echo number_format($discount_per,2); ?></span>%)</span><div class="span">$ <span id="discount_price"><?php echo number_format($discount_price,2); ?></span></div></div>
                                    <div class="cart-bill">Sub-Total<div class="span">$ <span id="sub_total"><?php echo number_format($sub_total,2); ?></span></div></div>
                                    <div class="cart-bill">Good and Services Tax (GST) - <span>(<?php echo number_format($gst_per,2); ?>%)</span> <div class="span">$ <span id="gst_price"><?php echo number_format($gst_price,2); ?></span></div></div>
                                    <div class="cart-bill">Provincial  Sale Tax (PST) - <span>(<?php echo number_format($pst_per,2); ?>%)</span> <div class="span">$ <span id="pst_price"><?php echo number_format($pst_price,2); ?></span></div></div>
                                    <div class="cart-bill">Grand Total <div class="span">$ <span id="grand_total"><?php echo number_format($grand_total,2); ?></span></div></div>
                                    <div class="cart-bill">Payment Method <div class="span"><?php echo $fund_method_name; ?></div></div>
                                 </div>
                                 
                                 
									
									<?php if (($order_status=='A')||($order_status=='EX')){ //check if the order is active or expired ?>
                                 <div class="alert alert-success">
                                    <div class="cart-bill">COMPANY NAME:<div class="span"><?php echo $company_name; ?></div></div>
                                    <div class="cart-bill">ORDER STATUS:<div class="span"><?php echo $status_name;?></div></div>
                                    <div class="cart-bill">START DATE:<div class="span"><?php echo $seat_start_date;?></div></div>
                                   <div class="cart-bill">EXPIRY DATE:<div class="span"><?php echo $seat_end_date;?> <span onclick="_expand_ex_date()" id="expand_expiry_btn"><u>EXTEND</u></span></div></div>
                                </div>
                                 <div class="alert alert-success" id="expand_expiry_date" style="display:none;">
                                   <div class="title">Pick a date to extend the expiry date of this order.</div>
                                       <input id="expiry_date" type="date" class="text_field" value="<?php echo $seat_end_date;?>"/>
                                            <button class="action-btn" id="extend_date_btn" onclick="_extend_expiry_date('<?php echo $cartsession; ?>')"><i class="fa fa-clock"></i> Extend Expiry Date</button>
                                </div>
									<?php }else{?>
                                            <button class="btn red"  id="decline_order_btn" onclick="_decline_order('<?php echo $cartsession; ?>')"><i class="fa fa-close"></i> Decline Order</button>
                                            <button class="btn green" id="confirm_order_btn" onclick="_confirm_order('<?php echo $cartsession; ?>')"><i class="fa fa-check"></i> Confirm Order</button>
                                    <?php  } ?>

      	 	</div>

</div>
<?php } ?>















<?php if ($view_content=='report'){?>
            <div class="chart-div-notifications">
                    <div class="text"><i class="fa fa-line-chart"></i> Showing Matrix for</div> 
                    
                    <div class="text" onclick="select_search()">
                    <span id="srch-text">Last 30 Days</span>&nbsp;<i class="fa fa-sort-down (alias)"></i>
                    <div class="srch-select">
                    <div id="srch-today" onclick="get_payment_report('srch-today', 'payment_report', 'view_today_search');">Today</div>
                    <div id="srch-week" onclick="get_payment_report('srch-week', 'payment_report', 'view_thisweek_search');">This Week</div>
                    <div id="srch-7" onclick="get_payment_report('srch-7', 'payment_report', 'view_7days_search');">Last 7 Days</div>
                    <div id="srch-month" onclick="get_payment_report('srch-month', 'payment_report', 'view_thismonth_search');">This Month</div>
                    <div id="srch-30" onclick="get_payment_report('srch-30', 'payment_report', 'view_30days_search');">Last 30 Days</div>
                    <div id="srch-90" onclick="get_payment_report('srch-90', 'payment_report', 'view_90days_search');">Last 90 Days</div>
                    <div id="srch-year" onclick="get_payment_report('srch-year', 'payment_report', 'view_thisyear_search');">This Year</div>
                    <div id="srch-1year" onclick="get_payment_report('srch-1year', 'payment_report', 'view_1year_search');">Last 1 Year</div>
                    <div onclick="srch_custom('Custom Search')">Custom Search</div>
                    </div>
                    </div>
                    
                    <div class="text">
                    <div class="custom-srch-div">
                    <input id="datepicker-from" type="text" class="srchtxt" placeholder="From" title="Select Date From" />
                    <input id="datepicker-to" type="text" class="srchtxt" placeholder="To" title="Select Date To"/>
                    <button type="button" class="btn" onclick=" _fetch_custom_payment_report('payment_report','custom_search')">Apply</button>
                    </div>
                    </div>
                    <br clear="all" />
              </div>


            <div class="animated fadeIn" id="search-content">
<?php 
			/// get presentation values
	$day30= date('F d Y', strtotime('today - 30 days'));
	$today= date('F d Y');	
	
	/// get chat values
		$db_day30= date('Y-m-d', strtotime('today - 30 days'));
		$db_today= date('Y-m-d');
		$check_code='report';
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


























<?php if ($view_content=='app_settings'){
	  $array=$callclass->_get_backend_settings_detail($conn, 'BK_ID001');
	  $fetch = json_decode($array, true);
	  $smtp_host=$fetch[0]['smtp_host'];
	  $smtp_username=$fetch[0]['smtp_username'];
	  $smtp_password=$fetch[0]['smtp_password'];
	  $smtp_port=$fetch[0]['smtp_port'];
	  $sender_name=$fetch[0]['sender_name'];

	  $bank_name=$fetch[0]['bank_name'];
	  $account_name=$fetch[0]['account_name'];
	  $account_number=$fetch[0]['account_number'];
			$fetch=$callclass->_get_cart_settings_detail($conn, 'SET002'); /// setting for goods and services tax (GST). 
			$array = json_decode($fetch, true);
			$gst_per= $array[0]['setting_value'];
			
			$fetch=$callclass->_get_cart_settings_detail($conn, 'SET001'); /// setting for Provincial  sale tax (PST) 
			$array = json_decode($fetch, true);
			$pst_per= $array[0]['setting_value'];
	?>

<div class="fly-title-div  animated fadeInRight">
<div class="in">
<span id="panel-title"><i class="fa fa-gears"></i> SETTINGS</span>
<div class="close" title="Close" onclick="alert_close();">X</div>
</div>
</div>
<div class="container-back-div overflow animated fadeInRight" >
              <div class="inner-div">
                
                <div class="alert alert-success"><span>BANK ACCOUNT DETAILS</span>
                    <div class="title"> BANK NAME:</div>
                    <input id="bank_name" type="text" class="text_field" placeholder="BANK NAME" title="BANK NAME" value="<?php echo $bank_name; ?>" />
                    <div class="title"> ACCOUNT NAME:</div>
                    <input id="account_name" type="text" class="text_field" placeholder="ACCOUNT NAME" title="ACCOUNT NAME" value="<?php echo $account_name; ?>" />
                    <div class="title"> ACCOUNT NUMBER:</div>
                    <input id="account_number" type="text" class="text_field" placeholder="ACCOUNT NUMBER" title=" ACCOUNT NUMBER" value="<?php echo $account_number; ?>" />
                </div>
                
                
                <div class="alert alert-success"><span>TAX SETTINGS</span>
                    <div class="title"> PROVINCIAL SALES TAX (PST) ():</div>
                    <input id="pst_per" type="text" class="text_field" placeholder="PROVINCIAL  SALES TAX" title="PROVINCIAL SALES TAX" value="<?php echo $pst_per; ?>" />
                    <div class="title"> GOODS AND SERVICES TAX (GST):</div>
                    <input id="gst_per" type="text" class="text_field" placeholder="GOODS AND SERVICES TAX" title="GOODS AND SERVICES TAX" value="<?php echo $gst_per; ?>" />
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
                                
                    <button class="action-btn"  type="button" title="UPDATE SETTINGS" onclick="_update_settings()"> <i class="fa fa-check"></i> UPDATE SETTINGS</button>
        </div>
</div>
<?php } ?>



<?php if ($view_content=='company_order_history'){?>
<div class="title">Order History</div><br clear="all" />
<div class="table-div animated fadeIn" id="table-div">

            	<table class="table" cellspacing="0">
                	<tr class="tb-col">
                    	<td>SN</td>
                    	<td>ORDER ID</td>
                    	<td>ALLOYS</td>
                    	<td>SEATS</td>
                    	<td>STATUS</td>
                    	<td>START DATE</td>
                    	<td>END DATE</td>
                    </tr>
                <?php 
				$no=0;
				$query=mysqli_query($conn,"SELECT * FROM cart_summary_tab WHERE company_id='$company_id' ORDER BY date DESC");
				 while($fetch=mysqli_fetch_array($query)){
					 $no++;
					 $cartsession=$fetch['cart_session'];
					 
					$fetch=$callclass->_get_cart_summary_detail($conn, $cartsession);
					$array = json_decode($fetch, true);
					$company_id= $array[0]['company_id'];
					$no_of_seats= $array[0]['no_of_seats'];
					$grand_total= $array[0]['grand_total'];
					$order_status= $array[0]['status_id'];
					$seat_start_date= $array[0]['seat_start_date'];
					$seat_end_date= $array[0]['seat_end_date'];
					
						 //// count alloy
							$count_alloy_query=mysqli_query($conn,"SELECT * FROM cart_tab WHERE cart_session='$cartsession'");
							$count_alloy=mysqli_num_rows($count_alloy_query);
				 
						  if ($order_status=='P'){$class='progress';}
						  else if($order_status=='SD'){$class='hash';}
						  else if($order_status=='CL'){$class='failed';}
						  else if($order_status=='A'){$class='success';}
						  else if($order_status=='EX'){$class='failed';}
						  
						$fetch_status_name=$callclass->_get_status_detail($conn, $order_status);
						  $array_status_name = json_decode($fetch_status_name, true);
							$status_name= $array_status_name[0]['statusname'];
				 ?>
                 
                	<tr>
                    	<td><?php echo $no?></td>
                    	<td><span onclick="_get_form_with_id('order-details','<?php echo $cartsession?>')"><?php echo $cartsession?></span></td>
                    	<td><?php echo $count_alloy?></td>
                    	<td><?php echo $no_of_seats?></td>
                    	<td class="<?php echo $class?>"><?php echo $status_name?></td>
                    	<td><?php echo $seat_start_date?></td>
                    	<td><?php echo $seat_end_date?></td>
                    </tr>
                 
					<?php }?>
                    <?php if ($no==0){?>
                	<tr>
                    	<td colspan="20">
                            <div class="alert"><i class="fa fa-bell-o"></i> No record found</div>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

</div>
<?php } ?>





