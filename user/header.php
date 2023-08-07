<?php  include 'alert.php'?>
<style>
#menu-close-link{
    display:none;
}
</style>

<div class="header-div animated fadeInDown animated animated">
	<div class="header-div-in">
        <div class="menu-div" title="Open Menu" onclick="_open_menu()" id="menu-div"><i class="fa fa-navicon (alias)"></i></div>
    	<div class="logo-div"><img src="all-images/images/logo.png" alt="<?php echo $thename?> logo" /></div>
        
        <div class="nav-div" data-aos="fade-right" data-aos-duration="1500">
        <li class="active-li" onClick="_get_page('dashboard', 'dashboard','');" id="dashboard"><i class="fa fa-dashboard"></i> Dashboard</li>
        <?php if ($user_role_id==3){?>
        <li onClick="_get_page('active-user-list', 'active-users')" id="active-users"><i class="fa fa-users"></i> Administrators</li>
        <?php } ?>
        <li onclick="_get_users_profile('<?php echo $user_id; ?>','myprofile');" id="myprofile"><i class="fa fa-user-circle-o"></i> My Profile</li>
        </div>
        
        
            <div class="header-profile-pix-div" title="User Account" onclick="_toggle_profile_pix_div()">
         
                    <div class="img-div"><img src="<?php echo $website_url?>/uploaded_files/user_pix/friends.png" alt="Profile image"></div>
                  

            <div class="toggle-profile-div">
                <div class="toggle-profile-pix-div">
                    <img src="<?php echo $website_url?>/uploaded_files/user_pix/friends.png" id="passportimg2"/>
                </div>
            
                <div class="toggle-profile-name"><span id="profile_name">Afolabi Taiwo Abayomi</span></div>
                    <div class="toggle-profile-others">User ID: <span id="user_id">STF0000</span> <br /><span id="user_mobile">09021947874</span> </div>
                    <form method="post" action="config/code" name="logoutform">
                        <input type="hidden" name="action" value="logout"/>
                        <button class="logout-btn" type="submit"><i class="fa fa-sign-out"></i> Log-Out</button>
                    </form>
                    <button class="logout-btn" type="button" onclick="_get_form('staff_profile','users');"><i class="fa fa-user"></i> Profile</button>
                    <div class="hidden" id="_myprofile"><i class="fa fa-user-circle"></i> User Profile</div>
                <br clear="all" />
                </div>
            </div>
            
            
            
            
            
            <div class="notification" onClick="_get_page('system_alert', 'system_alert')" title="System Alert">
                  <i class="bi-bell"></i>
            </div>

        
            <!------>
            <span id="_system_alert" style="display:none;"><i class="bi-bell"></i> System Alert</span>
            <!------>  
                       
       </div>
</div>