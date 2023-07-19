<?php  include 'alert.php'?>
<div class="header-div animated fadeInDown animated animated">
	<div class="header-div-in">
        <div class="menu-div" title="Open Menu" onclick="_open_menu()" id="menu-div"><i class="fa fa-navicon (alias)"></i></div>
    	<div class="logo-div"><img src="all-images/images/logo.jpg" alt="Dilaac logo" /></div>
        
    
        
        
            <div class="header-profile-pix-div" title="User Account" onclick="_toggle_profile_pix_div()">
                <div class="div-in">
                <div class="info">
                        <div class="name"> Afolabi Taiwo</div>
                        <div class="role">Super Admin</div>
                    </div>
                    <div class="img-div"><img src="<?php echo $website_url?>/uploaded_files/staff_pix/friends.png" alt="Profile image"></div>
                </div>   

            <div class="toggle-profile-div">
                <div class="toggle-profile-pix-div">
                    <img src="<?php echo $website_url?>/uploaded_files/staff_pix/friends.png" id="passportimg2"/>
                </div>
            
                <div class="toggle-profile-name"><span id="profile_name">Afolabi Taiwo Abayomi</span></div>
                    <div class="toggle-profile-others">User ID: <span id="user_id">STF0000</span> <br /><span id="user_mobile">09021947874</span> </div>
                    <form method="post" action="config/code" name="logoutform">
                        <input type="hidden" name="action" value="logout"/>
                        <button class="logout-btn" type="submit"><i class="fa fa-sign-out"></i> Log-Out</button>
                    </form>
                    <button class="logout-btn" type="button" onclick="_get_users_profile()"><i class="fa fa-user"></i> Profile</button>
                    <div class="hidden" id="_myprofile"><i class="fa fa-user-circle"></i> User Profile</div>
                <br clear="all" />
                </div>
            </div>
            
            
            
            
            
            <div class="notification" onClick="_get_page('system_alert', 'system_alert')" title="System Alert">
                  <i class="bi-bell"></i>
            </div>

               
            <div class="notification" onClick="_get_page('system_alert', 'system_alert')" title="System Alert">
                  <i class="bi-search"></i>
            </div>
            <!------>
            <span id="_system_alert" style="display:none;"><i class="bi-bell"></i> System Alert</span>
            <!------>  
                       
       </div>
</div>