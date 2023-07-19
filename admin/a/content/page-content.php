




<?php if ($page=='dashboard'){?>
        <div class="statistics-back-div ">
            <div class="statistics-div bg1">
                <div class="inner-div">                    
                Adminstrator <br>
                    <span class="number">10</span>
                </div>
            </div>


            <div class="statistics-div bg2">
                <div class="inner-div">                    
                    Active Users <br>
                    <span class="number">10</span>
                </div>
            </div>

            <div class="statistics-div bg3">
                <div class="inner-div">
                    Exams <br>
                    <span class="number">10</span>
                </div>
            </div>


            <div class="statistics-div bg4">
                <div class="inner-div">
                Subject <br>
                    <span class="number">10</span>
                </div>
            </div>

            <div class="statistics-div bg2">
                <div class="inner-div">                    
                Video <br>
                    <span class="number">10</span>
                </div>
            </div>

            <div class="statistics-div bg5">
                <div class="inner-div">
                    Blogs  <br>
                    <span class="number">10</span>
                </div>
            </div>

            <div class="statistics-div bg1">
                <div class="inner-div">                    
                FAQ's <br>
                    <span class="number">10</span>
                </div>
            </div>

          

            <div class="statistics-div round">
                <div class="inner-div text-centre">
                    View All Activities
                    <div class="icon-div">
                        <i class="bi-arrow-up-right"> </i>
                    </div>
                </div>
            </div>
           

         
        </div>
        <div class="chart-back-div">

            <div class="chart-div-notifications" >
                <div class="text"><i class="bi-graph-up-arrow"></i> Showing Matrix for</div> 
                

                <div class="text">
                    <div class="custom-srch-div">
                        <input id="datepicker-from" type="text" class="srchtxt" placeholder="From" title="Select Date From" />
                        <input id="datepicker-to" type="text" class="srchtxt" placeholder="To" title="Select Date To"/>
                        <button type="button" class="btn" onclick=" _fetch_custom_dashboard_report('dashboard_report','custom_search')">Apply</button>
                    </div>
                </div>

                    <div class="text text-right" onclick="select_search()">
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
                    <div class="icon-div"><i class="bi-caret-down"></i></div>
                </div>
            
                <br clear="all" />
            </div>
    
<!--      
        <div class="chart-div">
            <div id="chart-report-div">
                <div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>
            </div>
        </div> -->
      
        <script language="javascript">
            _chart_for_trend1();
            $('#datepicker-from').datetimepicker({
            lang:'en',
            timepicker:false,
            format:'Y-m-d',
            autoclose: true,
            todayHighlight: true,

            });

            $('#datepicker-to').datetimepicker({
            lang:'en',
            timepicker:false,
            format:'Y-m-d',
            autoclose: true,
            todayHighlight: true,
            });
        </script>

<div class="chart-div">
                <div class="chart" >
                    <div class="rev-report">Revenue for <span id="day30">XXX</span> - <span id="today">XXX</span><br /><div class="revenue">₦<span id="revenue">0.00</span> </div></div>
                    <!-- <div id="chart-report-div">  <div class="ajax-loader "><img src="all-images/images/ajax-loader.gif"/></div></div> -->
                    <div id="chartContainer" style="width:100%; height:250px; margin:auto;"></div>
                 
                                <script>
                                        $(document).ready(function() {
                                        var chart = new CanvasJS.Chart("chartContainer", {
                                            animationEnabled: true,
                                            title:{
                                                text: " "
                                            },
                                            axisX:{
                                                valueFormatString: "DD MMM",
                                                crosshair: {
                                                    enabled: true,
                                                    snapToDataPoint: true
                                                }
                                            },
                                            axisY: {
                                                // title: " ",
                                                includeZero: false,
                                                valueFormatString: "N##0.00",
                                                crosshair: {
                                                    enabled: true,
                                                    snapToDataPoint: true,
                                                    labelFormatter: function(e) {
                                                        return "N" + CanvasJS.formatNumber(e.value, "##0.00");
                                                    }
                                                }
                                            },
                                                    
                                            data: [{
                                                type: "line",
                                                xValueFormatString: "DD MMM",
                                                yValueFormatString: "N##0.00",

                                                dataPoints: [   
                                                    <?php echo $dataset ?>
                                                    { x:  new Date(2020, 01, 05), y: 1000 },
                                                    { x: new Date(2020, 02, 05), y: 4000 },
                                                    { x: new Date(2020, 03, 05), y: 2000 },
                                                    { x: new Date(2020, 04, 05), y: 6000 },
                                                    { x: new Date(2020, 05, 05), y: 9000 },
                                                    { x: new Date(2020, 06, 05), y: 5000 }   
                                                ]
                                            }]
                                            
                                        });
                                        chart.render();
                                        })
                                </script>
                    </div>
             </div>

  </div>
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








<?php if ($check_code=='alert-list'){ ?>                               
<?php if ($view_report=='unread'){?>
    <div class="alert alert-success" style="text-align:left;"> <span><i class="fa fa-bell-o"></i></span> Unread Alerts</div>
<?php }elseif ($view_report=='random_search'){ ?>
    <div class="alert alert-success" style="text-align:left;"><span><i class="fa fa-search"></i></span> Search Result For <span><?php echo $all_search_txt; ?></span></div>
<?php }else{ ?>
    <div class="alert alert-success" style="text-align:left;"> <span><i class="fa fa-bell-o"></i></span> Notifications Between <span><?php echo $day30; ?></span> - <span><?php echo $today; ?></span></div>
<?php } ?>

<?php 
	$search_like="(alert_id like '%$all_search_txt%' OR
	alert_detail like '%$all_search_txt%' OR
	user_id like '%$all_search_txt%' OR
	name like '%$all_search_txt%' OR
	ipaddress like '%$all_search_txt%' OR
	computer like '%$all_search_txt%' OR
	date like '%$all_search_txt%')";
	
	$no=0;
	
	if ($view_report==''){
	$query=mysqli_query($conn,"SELECT * FROM alert_tab WHERE date(date) BETWEEN '$db_day30' AND '$db_today'  AND role_id<='$user_role_id' AND seen_status <='$user_role_id'+1  ORDER BY date DESC LIMIT 200");
	}elseif ($view_report=='unread'){
	$query=mysqli_query($conn,"SELECT * FROM alert_tab WHERE  role_id<='$user_role_id' AND seen_status <='$user_role_id' ORDER BY date DESC");
	}elseif ($view_report=='random_search'){
	$query=mysqli_query($conn,"SELECT * FROM alert_tab WHERE $search_like  AND role_id<='$user_role_id' AND  seen_status <='$user_role_id'+1 ORDER BY date DESC LIMIT 100");
	}else{
	$query=mysqli_query($conn,"SELECT * FROM alert_tab WHERE date(date) BETWEEN '$db_day30' AND '$db_today'  AND role_id<='$user_role_id' AND seen_status <='$user_role_id'+1 ORDER BY date DESC");
	}
	
	while($fetch=mysqli_fetch_array($query)){
		$no++;
		$alert_id=$fetch['alert_id'];	
		$alert_detail = substr($fetch['alert_detail'], 0, 80);
			$fatch_array=$callclass->_get_alert_detail($conn, $alert_id);
			$array = json_decode($fatch_array, true);
			$user_id= $array[0]['user_id'];
			$name= trim(ucwords(strtolower($array[0]['name'])));
			$ipaddress= $array[0]['ipaddress'];
			$computer= $array[0]['computer'];
			$seen_status= $array[0]['seen_status'];
			$date= $array[0]['date'];
?>
	<?php if ($seen_status==0){?>
        <div class="system-alert" id="<?php echo $alert_id; ?>" onclick="_read_alert('<?php echo $alert_id; ?>')">
            <div class="alert-name"><i class="fa fa-user-circle"></i> <?php echo $name; ?> <span id="<?php echo $alert_id; ?>viewed"><i class="fa fa-check"></i></span></div>
            <div class="alert-text"><?php echo $alert_detail; ?>...</div>
            <div class="alert-time"><i class="fa fa-clock-o"></i> <?php echo $date; ?></div>
        </div>
    <?php }else{ ?>
        <div class="system-alert alert-seen" id="<?php echo $alert_id; ?>" onclick="_read_alert('<?php echo $alert_id; ?>')">
            <div class="alert-name"><i class="fa fa-user-circle"></i> <?php echo $name; ?> <span id="<?php echo $alert_id; ?>viewed"><i class="fa fa-check"></i><i class="fa fa-check"></i></span></div>
            <div class="alert-text"><?php echo $alert_detail; ?>...</div>
            <div class="alert-time"><i class="fa fa-clock-o"></i> <?php echo $date; ?></div>
        </div>
    <?php } ?>
    <?php } ?>
    
    <?php if ($no==0){?>
        <div class="alert"><i class="fa fa-bell-o"></i> No record found</div>
    <?php } ?>
<?php }?>















<?php if ($page=='view_staff'){ ?>
    <div class="search-div">
        <!--------------------------------network search select------------------------->
        <select id="status_id"  class="text_field select" onchange="_fetch_users_list()">
        <option value="" selected="selected">ALL USER STATUS</option>
            <option value=""><?php echo $status_name;?></option> 
        </select>
        <!--------------------------------all search select------------------------->
        <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
    </div>
         <div class="alert alert-success"> <span><i class="fa fa-users"></i></span> ADMINISTRATOR'S LIST <button class="btn" onClick="_get_form('create-user-form')"><i class="fa fa-plus"></i> CREATE A NEW ADMIN</button></div>
            <div class="animated fadeIn" id="search-content">
            
            <div class="search-content-in">			
                <div class="user-div" onclick="_get_users_profile('<?php echo $users_id; ?>','users');">
                    <div class="pix-div"><img src="uploaded_files/staff_pix/friends.png"/></div>
                    <div class="detail">
                        <div class="name-div"><div class="name"> Afolabi Taiwo</div><hr /><br/></div>
                        <div class="text">ID: STF0000</div>
                        <div class="text">07055066744</div>
                        <div class="active">ACTIVE</div>
                    </div>
                    <br clear="all"/>
                </div>


                <div class="user-div" onclick="_get_users_profile('<?php echo $users_id; ?>','users');">
                    <div class="pix-div"><img src="uploaded_files/staff_pix/friends.png"/></div>
                    <div class="detail">
                        <div class="name-div"><div class="name"> Afolabi Taiwo</div><hr /><br/></div>
                        <div class="text">ID: STF0000</div>
                        <div class="text">07055066744</div>
                        <div class="active">ACTIVE</div>
                    </div>
                    <br clear="all" />
                </div>

    
            </div> 
            

            <br clear="all" />
            </div>
     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Staff ID e.g STF000765976964','Mobile number e.g 09021947874','E-mail e.g afootechglobal@gmail.com'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
    
<?php } ?>




<?php if ($page=='view_all_member'){?>

<div class="main-dashboard-div" >
         <div class="search-div animated fadeIn">
             <!--------------------------------all search select------------------------->
             <!-- <select id="status_id" class="text_field status_text" onchange="_get_status()" title="SELECT STATUS">
                <option value="" >SELECT STATUS </option>
                <script>_get_fetch_staff_status('status');</script>
            </select>  -->
           
           
             <input id="search_txt"  type="text" class="text_field full" onkeyup="_get_search('view_search_member')" placeholder="Type here to search..." title="Type here to search" />
         </div>
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="">MEMBERSHIP LIST</span>
             <button class="btn"  onclick="_get_form_page('member_registration');"><i class="bi-person-plus"></i>ADD NEW MEMBER</button>
         </div>

             <div class="back-div " id="fetch_staff" >
             <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_member('','','');</script>
            </div>
                   
             </div>    
     </div> 

     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Mobile number e.g 08131252996','Fullname e.g Afootech Global'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
<?php } ?>










<?php if ($page=='staff_registration'){ ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="fa fa-plus"></i> ADD NEW ADMIN/STAFF</span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD A ADMIN/STAFF</span></div>

                <div class="title">FULL NAME: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="reg_fullname"/>

                <div class="title">EMAIL ADDRESS: <span>*</span></div>
                <input type="email"  class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" id="reg_email" />

                <div class="title">PHONE NUMBER: <span>*</span></div>
                <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="reg_mobile" />

                <div class="title">SELECT COUNTRY: <span>*</span></div>
                <select id="reg_country_id" class="text_field select_field" title="SELECT COUNTRY">
                <script>_get_select_country();</script>
                </select>

                <div class="title">HOME ADDRESS: <span>*</span></div>
                <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="reg_address" />

                <div class="title">SELECT POSITION: <span>*</span></div>
                <select id="reg_position_id" class="text_field select_field" title="SELECT POSTION" >
                  <script>_get_select_position();</script>
                </select>

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



<?php if ($page=='member_registration'){ 
    
    ?>
<div class="reg-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="panel-title"><i class="fa fa-plus"></i> ADD NEW MEMBER</span>
        <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div" >
         <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD A ADMIN/STAFF</span></div>

                <div class="title">FULL NAME: <span>*</span></div>
                <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="reg_fullname"/>

                <div class="title">PHONE NUMBER: <span>*</span></div>
                <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="reg_mobile" />

                <div class="title">SELECT COUNTRY: <span>*</span></div>
                <select id="reg_country_id" class="text_field select_field" title="SELECT COUNTRY">
                   <script>_get_select_country();</script>
                </select>

                <div class="title">HOME ADDRESS: <span>*</span></div>
                <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="reg_address" />

                <div class="title">SELECT POSITION: <span>*</span></div>
                <select id="reg_position_id" class="text_field select_field" title="SELECT POSTION" >
                  <script>_get_select_position();</script>
                </select>

                <div class="individual-input">
                   <div class="title">SELECT MEMBERSHIP TYPE: <span>*</span></div>
                   <select id="reg_mem_type_id" class="text_field select_field" title="SELECT MEMBERSHIP TYPE">
                   <script>_get_select_membership_type();</script>
                   </select>
               </div>

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <script>_get_select_status('1,2');</script>
                </select> 
                    <button class="action-btn" type="button" title="Submit" id="submit_btn" onclick="_reg_and_updt_mem('<?php echo $page?>','');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<?php } ?>






<?php if ($page=='member_profile'){   ?>

<div class="main-dashboard-div animated fadeIn" >
   <div class="info_div">
       
             <legend style="text-align:left;font-weight: bold;padding:15px 0px 15px 10px">MEMBER PROFILE</legend>
           <div class="individual-input">     
                   <div class="title">MEMBERSHIP ID:</div>
                   <input  type="text" class="text_field"  title="MEMBERSHIP ID" id="updt_membership_id" require="" readonly=""/>
               </div>

               <div class="individual-input">     
                   <div class="title">FULL NAME: <span>*</span></div>
                   <input  type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" id="updt_fullname"/>
               </div>

               <div class="individual-input"> 
                   <div class="title">PHONE NUMBER: <span>*</span></div>
                   <input type="tel"  class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER" id="updt_mobile" />
               </div>

               <div class="individual-input">
                   <div class="title">HOME ADDRESS: <span>*</span></div>
                   <input type="text"  class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS" id="updt_address" />
               </div>

               <div class="individual-input">
                   <div class="title">SELECT COUNTRY: <span>*</span></div>
                   <select id="updt_country_id" class="text_field select_field" title="SELECT COUNTRY">
                     <script>_get_select_country();</script>
                   </select>
               </div>

               <div class="individual-input">
                   <div class="title">SELECT POSITION:</div>
                   <select id="updt_position_id" class="text_field select_field" title="SELECT POSTION" >
                   <script>_get_select_position();</script>
                   </select>
               </div>


               <div class="individual-input">
                   <div class="title">SELECT MEMBERSHIP TYPE: <span>*</span></div>
                   <select id="updt_mem_type_id" class="text_field select_field" title="SELECT MEMBERSHIP TYPE">
                   <script>_get_select_membership_type();</script>
                   </select>
               </div>


               <div class="individual-input">
                    <div class="title">SELECT STATUS: <span>*</span></div>
                    <select id="updt_status_id" class="text_field select_field" title="SELECT STATUS">
                    <script>_get_select_status('1,2');</script>
                    </select>
                </div> 

                
               <div class="individual-input">
                   <div class="title">REGISTERED BY:</div>
                   <input type="text"  class="text_field" id="updt_registered_by" require="" readonly="" />
               </div>


               <!-- <div class="individual-input">
                   <div class="title">UPDATED BY:</div>
                   <input type="text"  class="text_field" id="updt_updated_by" require="" readonly="" />
               </div> -->
          
             
       </div>
       <button class="update_btn"  type="button" id="update_btn"  onClick="_reg_and_updt_mem('<?php echo $page?>','<?php echo $mem_id?>')" title="UPDATE PROFILE"><i class="bi-check"></i> UPDATE PROFILE</button>
  

    </div> 
<?php } ?>










<?php if ($page=='view_all_payment'){?>

<div class="main-dashboard-div" >
         <div class="search-div animated fadeIn">
             <!--------------------------------all search select------------------------->
             <select id="status_id" class="text_field status_text" onchange="_get_status('view_search_payment')" title="SELECT STATUS">
              
                <script>_get_select_status('3,4');</script>
            </select>
             <input id="search_txt"  type="text" class="text_field " onkeyup="_get_search('view_search_payment')" placeholder="Type here to search..." title="Type here to search" />
         </div>
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="">PAYMENT REPORT LIST</span>
             <button class="btn"  onclick="_get_form_page('staff_registration');"><i class="bi-person-plus"></i>ADD NEW ADMIN/STAFF</button>
         </div>

             <div class="back-div payment-back-div">
                    <div class="fetch animated fadeIn">
                        <div class="table-div" id="message">
                            <table  cellspacing="0" id="fetch"> 
                                <script>_get_fetch_all_payment('','','');</script>     
                            </table>
                        </div>
                    </div>
            </div>    
</div> 
<script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Mobile number e.g 08131252996 ','Payment ID e.g PAY_00247395838932'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
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




<?php if ($page=='access_key_validation_info'){ ?>
    <div class="validation-div animated ZoomIn">
        <div class="div-in">
            <div class="img-div"><img src="all-images/images/warning.gif" alt="Profile image"></div>
            <h4>Invalid AccessToken. Please LogIn Again</h4>
            <form method="post" action="config/code.php" name="logoutform">
            <input type="hidden" name="action" value="logout"/>
            <button class="btn">Okay, Log-In</button>
            </form>
        </div>
    </div>
<?php } ?>
