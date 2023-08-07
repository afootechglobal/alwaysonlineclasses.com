
<?php include 'config/session_validation.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<?php //include 'config/session_validation.php'?>
<title>Administrative Portal | <?php echo $thename;?></title>
</head>
<body>
<?php include 'header.php'?>
<?php include 'side-bar.php'?>

<div class="content-div">
    <?php $callclass->_admin_title_info();?>


    
    <div id="page-content">
		<?php $page='dashboard';?>
        <?php require_once 'content/page-content.php'?>
    </div>

      
    <div class="side-div-right">
        <div class="inner-right">

         
            <div class="alert-dashboard-div animated ZoomIn">
                        <div class="alert-dashboard-title"><i class="bi-bell"></i> Recent Activities <span class="right">See All</span></div>
                        <div class="system-alert dashboard-system-alert" id="<?php echo $alert_id; ?>" onclick="_read_alert('<?php echo $alert_id; ?>')">
                            <div class="alert-name"><i class="bi-person"></i> Afolabi Taiwo <span id="<?php echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                            <div class="alert-text">Success Alert: EMMANUEL SAMUEL profile was updated successfully...</div>
                            <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                        </div>
                        <div class="system-alert dashboard-system-alert" id="<?php echo $alert_id; ?>" onclick="_read_alert('<?php echo $alert_id; ?>')">
                            <div class="alert-name"><i class="bi-person"></i> Afolabi Taiwo <span id="<?php echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                            <div class="alert-text">Success Alert: EMMANUEL SAMUEL profile was updated successfully...</div>
                            <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                        </div> 
                        
                </div>



                <div class="alert-dashboard-div animated ZoomIn">
                    <div class="in">
                            <div class="alert-dashboard-title">Order Matrix</div>
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
                    
                    </div>
            </div>


        </div>
    
    </div>
      
</div>
<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>


</body>
</html>
