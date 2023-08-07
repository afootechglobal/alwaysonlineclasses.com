<?php include '../config/config.php';?>



<?php
class allClass{
    function _admin_title_pane($role_name){?>
        <div class="the-title-div">
        <div class="left-div">
            <span id="page-title"><i class="fa fa-dashboard"></i> Dashboard</span><br />
            User Portal
        </div>
        <div class="right-div">
            Current Time<br />
            <?php $this->_dateTimeText();?>
            <?php echo date("l, d F Y");?>
        </div>
        <br clear="all" />
        </div>
<?php }

        ////////////////////////////////		
        function _dateTimeText(){?>
            <div class="datetime">
                <span id="clock"><span id="digitalclock" class="styling"></span></span>
            </div>
        <?php }





}//end of class
$callclass=new allClass();
?>