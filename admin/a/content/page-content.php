<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>

<?php if ($page=='access_key_authentication'){?>
	<div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
				<div class="img"><img src="all-images/images/warning.gif" /></div>
            <h2>INVALID ACCESS KEY</h2>
            
            <a href="wallet" title="My Wallet">
             <button class="btn" type="button"><i class="fa fa-eye"></i> Go to My Wallet </button></a>
        </div>
    </div>
<?php } ?>

<?php if ($page=='dashboard'){?>
        <div class="statistics-back-div" >
            <?php if($role_id>1){?>
            <div class="statistics-div bg1" onClick="_get_page('view_staff', 'admin')" id="admin">
                <div class="inner-div">                    
                Adminstrator <br>
                    <span class="number">10</span>
                </div>
            </div>
            <?php }?>

            <div class="statistics-div bg2" onClick="_get_page('active_users', 'user')" id="user">
                <div class="inner-div">                    
                    Active Users <br>
                    <span class="number">10</span>
                </div>
            </div>

            <div class="statistics-div bg3" onClick="_get_page('exam_category', 'exam')" id="exam">
                <div class="inner-div">
                    Exams <br>
                    <span class="number">10</span>
                </div>
            </div>


            <div class="statistics-div bg4"  onClick="_get_page('all_subject', 'subject')" id="subject">
                <div class="inner-div">
                Subject <br>
                    <span class="number">10</span>
                </div>
            </div>


            <div class="statistics-div bg5" onClick="_get_page('blogs', 'blogs')" id="blogs">
                <div class="inner-div">
                    Blogs  <br>
                    <span class="number">10</span>
                </div>
            </div>

            <div class="statistics-div bg1"  onClick="_get_page('faqs', 'faqs')" id="faqs">
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






<?php if ($page=='view_staff'){?>
    <div class="search-div">
        <!--------------------------------network search select------------------------->
        <select id="status_id" class="text_field select" onchange="_get_fetch_all_staff()">
            <option value="" selected="selected"> SELECT STATUS</option>
        </select>
        <!--------------------------------all search select------------------------->
        <input id="search_txt" onkeyup="_get_fetch_all_staff();" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
    </div>
    
    <div class="alert alert-success"> <span><i class="bi-people-fill"></i></span> ADMINISTRATOR'S LIST <button class="btn" onClick="_get_form('staff_reg')"><i class="bi-plus-square"></i> CREATE A NEW ADMIN</button></div>
       
        <div class="fetch-div animated fadeIn">			
            <div class="fetch" id="fetch">
                <script> _get_fetch_all_staff('');</script>
            </div>
        </div> 
        <br clear="all" />
    

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
     <script>_get_select_status('status_id','1,2');</script>
<?php } ?>







 



<?php if ($page=='active_users'){ ?>
    <div class="search-div">
        <!--------------------------------network search select------------------------->
        <select id="status_id"  class="text_field select" onchange="_get_fetch_all_user()">
            <option value="" selected="selected">ALL USER STATUS</option>
        </select>
        <!--------------------------------all search select------------------------->
        <input id="search_txt" onkeyup="_get_fetch_all_user();" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
    </div>

    <div class="alert alert-success"> <span><i class="bi-people-fill"></i></span> USER'S LIST <button class="btn" onClick="_get_form('user_reg')"><i class="bi-plus-square"></i> CREATE A NEW USER</button></div>
        
        <div class="fetch-div animated fadeIn">			
            <div class="fetch" id="fetch_user">
                <script> _get_fetch_all_user('');</script>
            </div>
        </div> 
        <br clear="all" />
        
     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'User ID e.g STF000765976964','Mobile number e.g 09021947874','E-mail e.g afootechglobal@gmail.com'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
    <script>_get_select_status('status_id','1,2');</script>
<?php } ?>










<?php if ($page=='exam_category'){ ?>
    <div class="search-div">
        <!--------------------------------network search select------------------------->
        <select id="status_id"  class="text_field select" onchange="_fetch_users_list()">
            <option value="" selected="selected">ALL EXAM STATUS</option>      
            <script>_get_select_status('1,2');</script>
        </select>
        <!--------------------------------all search select------------------------->
        <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
    </div>
         <div class="alert alert-success"> <span><i class="bi-pencil-square"></i></span> EXAM'S LIST <button class="btn" onClick="_get_form('exam_reg')"><i class="bi-plus-square"></i> CREATE A NEW EXAM</button></div>
            <div class="animated fadeIn" id="search-content">
            
            <div class="fetch-div">			

					<div class="record-content-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt="topics"/>
                            </div>

                             <div class="text-div">
                                <h2>WAEC</h2>
                                    <p>(WAEC) is an examination board established by law to determine the examinations required in West African countries.</p>
                                <div class="count-div">
                                    <div class="count-in"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> STATUS: <span class="ACTIVE" id="" >ACTIVE</span></div>
                                   <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                   <button class="btn btn2" title="EDIT" onClick="_get_page('subject', 'exam')"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>
                                </div>
                            </div>
                        </div> 
					</div>


                    <div class="record-content-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/exam_pix/neco.png" alt="topics"/>
                            </div>

                             <div class="text-div">
                                <h2>NECO</h2>
                                    <p>(WAEC) is an examination board established by law to determine the examinations required in West African countries.</p>
                                <div class="count-div">
                                    <div class="count-in"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> STATUS: <span class="ACTIVE" id="" >ACTIVE</span></div>
                                   <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                   <button class="btn btn2" title="EDIT" onClick="_get_page('subject', 'exam')"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>
                                </div>
                            </div>
                        </div> 
					</div>




                    <div class="record-content-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/exam_pix/utme.png" alt="topics"/>
                            </div>

                             <div class="text-div">
                                <h2>UTME</h2>
                                    <p>(WAEC) is an examination board established by law to determine the examinations required in West African countries.</p>
                                <div class="count-div">
                                    <div class="count-in"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> STATUS: <span class="ACTIVE" id="" >ACTIVE</span></div>
                                   <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                   <button class="btn btn2" title="EDIT" onClick="_get_page('subject', 'exam')"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>
                                </div>
                            </div>
                        </div> 
					</div>

      

                <!-- <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_users('','','');</script>
                </div> -->
    
            </div> 
            

            <br clear="all" />
            </div>
     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Exam ID e.g EXM00000','Exam Name e.g WAEC, NECO, JUPEB, JAMB, UTME, PUTME','IJMB'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
    
<?php } ?>












<?php if ($page=='all_subject'){ ?>
    <div class="search-div">
        <!--------------------------------network search select------------------------->
        <select id="status_id"  class="text_field select" onchange="_get_fetch_all_subject()">
            <option value="" selected="selected">ALL SUBJECT STATUS</option>     
        </select>
        <!--------------------------------all search select------------------------->
        <input id="search_txt" onkeyup="_get_fetch_all_subject();" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
    </div>
        <div class="alert alert-success"> <span><i class="bi-book"></i></span> SUBJECT'S LIST <button class="btn" onClick="_get_form_with_id('add_and_update_subject', '')"><i class="bi-plus-square"></i> ADD NEW SUBJECT</button></div>
        
        <div class="fetch-div animated fadeIn">			
            <div class="fetch" id="fetch_subject">
                <script> _get_fetch_all_subject('');</script>
            </div>
        </div> 
        <br clear="all" />

     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Subject ID e.g SUB00000','Subject Name e.g Maths, English, Physics'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
      <script>_get_select_status('status_id','1,2');</script>
<?php } ?>





<?php if ($page=='subject'){ ?>
    <div class="search-div">
        <!--------------------------------network search select------------------------->
        <select id="status_id"  class="text_field select" onchange="_fetch_users_list()">
            <option value="" selected="selected">SUBJECT STATUS</option>     
        </select>
        <!--------------------------------all search select------------------------->
        <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
    </div>
         <div class="alert alert-success"> <span><i class="bi-book"></i></span> EXAM / <span id="">WAEC</span> / SUBJECT'S LIST <button class="btn" onClick="_get_form('subject_reg')"><i class="bi-plus-square"></i> ADD NEW SUBJECT</button></div>
            <div class="animated fadeIn" id="search-content">
            
            <div class="fetch-div">			
                    <div class="grid-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/subject_pix/maths.jpg" alt="maths"/>                        
                            </div>
                            <div class="ACTIVE">ACTIVE</div>
                            <div class="info-div">
                                <h2>MATHEMATICS</h2> 
                                <hr></hr>
                                <div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>
                                <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                <button class="btn btn2" title="EDIT" onClick="_get_page('topics', 'exam')"><i class="bi-book"></i> VIEW TOPICS</button>
                            </div>     
                        </div>	                          
					</div> 

                    <div class="grid-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/subject_pix/chemistry.jpg" alt="maths"/>                        
                            </div>
                            <div class="ACTIVE">ACTIVE</div>
                            <div class="info-div">
                                <h2>CHEMISTRY</h2> 
                                <hr></hr>
                                <div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>
                                <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                <button class="btn btn2" title="EDIT" onClick="_get_page('topics', 'exam')"><i class="bi-book"></i> VIEW TOPICS</button>
                            </div>     
                        </div>	                          
					</div> 

                    <div class="grid-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/subject_pix/economics.jpg" alt="maths"/>                        
                            </div>
                            <div class="ACTIVE">ACTIVE</div>
                            <div class="info-div">
                                <h2>ECONOMICS</h2> 
                                <hr></hr>
                                <div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>
                                <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                <button class="btn btn2" title="EDIT" onClick="_get_page('topics', 'exam')"><i class="bi-book"></i> VIEW TOPICS</button>
                            </div>     
                        </div>	                          
					</div> 

                <!-- <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_users('','','');</script>
                </div> -->
            </div> 
            
                 <br clear="all" />
            </div>
     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Subject ID e.g SUB00000','Subject Name e.g Maths, English, Physics'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
    <script>_get_select_status('status_id','1,2');</script>
<?php } ?>








<?php if ($page=='topics'){ ?>
    <div class="search-div">
        <!--------------------------------network search select------------------------->
        <select id="status_id"  class="text_field select" onchange="_fetch_users_list()">
            <option value="" selected="selected">TOPICS STATUS</option>     
            <script>_get_select_status('1,2');</script>
        </select>
        <!--------------------------------all search select------------------------->
        <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
    </div>
         <div class="alert alert-success"> <span><i class="bi-book"></i></span> EXAM / <span>WAEC</span> / <span>MATHEMATICS</span> / TOPIC'S LIST <button class="btn" onClick="_get_form('topics_reg')"><i class="bi-plus-square"></i> ADD NEW TOPIC</button></div>
            <div class="animated fadeIn" id="search-content">
            
            <div class="fetch-div">			
                    
                <div class="faq-back-div " >
                    <div class="faq-text-div ">

                        <div class="quest-faq-div ">
                            <div class="faq-title-text">
                                <h3>NUMBER & NUMERATION <button class="btn" onClick="_get_form('sub_topics_reg')"><i class="bi-plus-square"></i> ADD NEW SUB-TOPIC</button></h3>
                            </div>
                            
                            <div class="faq-answer-div" onclick="_collapse('faq1')">
                                <span>Sub Topics: </span>&nbsp;&nbsp;<span class="count-div">83443</span> &nbsp;&nbsp;| &nbsp;
                                <span>Status: </span>&nbsp;&nbsp;<span class="count-div status">ACTIVE</span>
                                <div class="expand-div" id="faq1num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>                         
                            </div>

                            <div class="faq-answer-div" id="faq1answer" style="display: none;">  
                                <div class="topics-content-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/body-pix/geometry.jpg" alt="geometry"/>
                                    </div>

                                    <div class="text">
                                        <h4>Euclidean Geometry</h4>
                                        <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                                        <button class="btn" title="EDIT SUB-TOPIC"><i class="bi-pencil-square"></i> EDIT</button>
                                    </div>
                                </div>
                            </div>

                        </div>





                        <div class="quest-faq-div ">
                            <div class="faq-title-text">
                                <h3>STATTISTICS <button class="btn" onClick="_get_form('sub_topics_reg')"><i class="bi-plus-square"></i> ADD NEW SUB-TOPIC</button></h3>
                            </div>
                            
                            <div class="faq-answer-div" onclick="_collapse('faq2')">
                                <span>Sub Topics: </span>&nbsp;&nbsp;<span class="count-div">83443</span> &nbsp;&nbsp;| &nbsp;
                                <span>Status: </span>&nbsp;&nbsp;<span class="count-div status">ACTIVE</span>
                                <div class="expand-div" id="faq2num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>                         
                            </div>

                           
                            <div class="faq-answer-div" id="faq2answer" style="display: none;">  
                                <div class="topics-content-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/body-pix/geometry.jpg" alt="geometry"/>
                                    </div>

                                    <div class="text">
                                        <h4>Euclidean Geometry</h4>
                                        <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                                        <button class="btn" title="EDIT SUB-TOPIC"><i class="bi-pencil-square"></i> EDIT</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                      



                    </div>
                </div>

                    
                <!-- <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_users('','','');</script>
                </div> -->
            </div> 
            
                 <br clear="all" />
            </div>
     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Top ID e.g TOP00000','Top Name e.g Statistic, Geometry'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
    
<?php } ?>




<?php if ($page=='blogs'){?>

        <div class="search-div">
            <!--------------------------------network search select------------------------->
            <select id="status_id"  class="text_field select" onchange="_fetch_users_list()">
                <option value="" selected="selected">ALL BLOG STATUS</option>
                <script>_get_select_status('1,2');</script>
            </select>
            <!--------------------------------all search select------------------------->
            <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
        </div>
         <div class="alert alert-success"> <span><i class="bi-book"></i></span> BLOG'S LIST <button class="btn" onClick="_get_form('blog_reg')"><i class="bi-plus-square"></i> ADD NEW BLOG</button></div>
     <div class="animated fadeIn" id="search-content"> 
            <div class="fetch-div">			
                    
                    <div class="blog-div " id="">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="_get_form_with_id('create_blog_category_list_form','BLOG074')">EDIT DEAL</button>
                            <button class="btn" onclick="_get_form('blog_detail')">EDIT PAGE DETAILS</button>
                            <button class="btn" onclick="_delete_publish('BLOG074')" id="delete-publish-BLOG074"><i class="bi-trash"></i></button>
                            <br clear="all">
                        </div>
                            <div class="status-div" id="">ACTIVATED</div>
                            <div class="img-div"><img src="<?php echo $website_url?>/uploaded_files/blog_pix/blog1.webp" alt="Blog Name"></div>
                            <div class="text-div">
                                <div class="text-in">
                                    <div class="text"><span>ANNOUNCEMENT</span> </div>
                                </div>
                                <h2>Group Of Students Sharing Their Ideas</h2>
                                <div class="text-in">
                                    <div class="text">UPDATED ON: <span>24 Apr 2023</span> </div>
                                    <div class="text"><span>486</span> VIEWS</div>
                                </div>
                            <br>
                            </div>
                    </div>


                    <div class="blog-div " id="">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="_get_form_with_id('create_blog_category_list_form','BLOG074')">EDIT DEAL</button>
                            <button class="btn" onclick="_get_form('blog_detail')">EDIT PAGE DETAILS</button>
                            <button class="btn" onclick="_delete_publish('BLOG074')" id="delete-publish-BLOG074"><i class="bi-trash"></i></button>
                            <br clear="all">
                        </div>
                            <div class="status-div" id="">ACTIVATED</div>
                            <div class="img-div"><img src="<?php echo $website_url?>/uploaded_files/blog_pix/blog1.webp" alt="Blog Name"></div>
                            <div class="text-div">
                                <div class="text-in">
                                    <div class="text"><span>ANNOUNCEMENT</span> </div>
                                </div>
                                <h2>Group Of Students Sharing Their Ideas</h2>
                                <div class="text-in">
                                    <div class="text">UPDATED ON: <span>24 Apr 2023</span> </div>
                                    <div class="text"><span>486</span> VIEWS</div>
                                </div>
                            <br>
                            </div>
                    </div>



                    <div class="blog-div " id="">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="_get_form_with_id('create_blog_category_list_form','BLOG074')">EDIT DEAL</button>
                            <button class="btn" onclick="_get_form('blog_detail')">EDIT PAGE DETAILS</button>
                            <button class="btn" onclick="_delete_publish('BLOG074')" id="delete-publish-BLOG074"><i class="bi-trash"></i></button>
                            <br clear="all">
                        </div>
                            <div class="status-div" id="">ACTIVATED</div>
                            <div class="img-div"><img src="<?php echo $website_url?>/uploaded_files/blog_pix/blog1.webp" alt="Blog Name"></div>
                            <div class="text-div">
                                <div class="text-in">
                                    <div class="text"><span>ANNOUNCEMENT</span> </div>
                                </div>
                                <h2>Group Of Students Sharing Their Ideas</h2>
                                <div class="text-in">
                                    <div class="text">UPDATED ON: <span>24 Apr 2023</span> </div>
                                    <div class="text"><span>486</span> VIEWS</div>
                                </div>
                            <br>
                            </div>
                    </div>





            </div>
            <br clear="all" />
        </div>

    <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Blog ID e.g BLOG00000','Blog Name e.g Statistic, Geometry'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
    <?php } ?>
























    <?php if ($page=='faqs'){ ?>
    <div class="search-div">
        <!--------------------------------network search select------------------------->
        <select id="status_id"  class="text_field select" onchange="_fetch_users_list()">
            <option value="" selected="selected">ALL FAQ's STATUS</option>   
            <script>_get_select_status('1,2');</script>
        </select>
        <!--------------------------------all search select------------------------->
        <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field utext" placeholder="Type here to search..." title="Type here to search" />
    </div>
         <div class="alert alert-success"> <span><i class="bi-newspaper"></i></span> FAQ's LIST <button class="btn" onClick="_get_form('faqs_reg')"><i class="bi-plus-square"></i> ADD NEW FAQ's</button></div>
        <div class="animated fadeIn" id="search-content">
                    
                <div class="faq-back-div faqs-back" >
                    <div class="faq-text-div ">

                        <div class="quest-faq-div main-faqs">
                            <div class="faq-title-text main-faqs-title-div">
                               <span>1</span>
                            </div>

                            <div class="faq-title-text main-faqs-title-div main-faqs-title-div2">
                               <i class="bi-pencil-square"></i> <span>Who we are</span>
                            </div>
                            
                            <div class="faq-answer-div faq-answer-div2">  
                                <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                                <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                            </div>
                            
                        </div>

                        <div class="quest-faq-div main-faqs">
                            <div class="faq-title-text main-faqs-title-div">
                               <span>2</span>
                            </div>

                            <div class="faq-title-text main-faqs-title-div main-faqs-title-div2">
                            <i class="bi-pencil-square"></i> <span>Who we are</span>
                            </div>
                            
                            <div class="faq-answer-div faq-answer-div2">  
                                <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                                <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                            </div>
                            
                        </div>


                        <div class="quest-faq-div main-faqs">
                            <div class="faq-title-text main-faqs-title-div">
                               <span>3</span>
                            </div>

                            <div class="faq-title-text main-faqs-title-div main-faqs-title-div2">
                            <i class="bi-pencil-square"></i> <span>Who we are</span>
                            </div>
                            
                            <div class="faq-answer-div faq-answer-div2">  
                                <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                                <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                            </div>
                            
                        </div>


                    </div>
                </div>
    
                <!-- <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_users('','','');</script>
                </div> -->

            
                 <br clear="all" />
        </div>
     <script>
        superplaceholder({el: search_txt,
            sentences: ['Type here to search...', 'Top ID e.g TOP00000','Top Name e.g Statistic, Geometry'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
    
<?php } ?>

























<?php if ($page=='view_all_payment'){?>

<div class="main-dashboard-div" >
         <div class="search-div animated fadeIn">
             <!--------------------------------all search select------------------------->
            <select id="status_id" class="text_field status_text" onchange="_get_status('view_search_payment')" title="SELECT STATUS">
                <option value="" selected="selected">PAYMENT STATUS</option>     
                <script>_get_select_status('3,4');</script>
            </select>
             <input id="search_txt"  type="text" class="text_field " onkeyup="_get_search('view_search_payment')" placeholder="Type here to search..." title="Type here to search" />
         </div>
         <div class="add-alert-div">
             <i class="bi-list"></i><span id="">PAYMENT REPORT LIST</span>
             <button class="btn"  onclick="_get_form('');"><i class="bi-person-plus"></i>ADD NEW ADMIN/STAFF</button>
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

















































