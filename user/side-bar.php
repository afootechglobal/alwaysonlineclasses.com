<div class="side-back-div animated fadeInLeft animated animated sb-container" id="menu-list-div">

<div class="link-div">
<div class="pix-div"><img src="<?php echo $website_url?>/uploaded_files/user_pix/friends.png" alt="Profile image"/></div><br clear="all" />
<div class="name">Afolabi Abayomi</div>
<div class="div">USER0000</div>
<button type="button" class="btn" onclick="_get_users_profile('<?php echo $user_id; ?>','myprofile');"><i class="fa fa-eye"></i> View profile</button>
</div>


<div class="link-div" id="side-link-back-div">
<li class=" active-li"  onClick="_get_page('dashboard', 'dashboard')" id="sdashboard"><i class="fa fa-dashboard"></i> Dashboard</li>

<li onClick="_get_page('news_letter', 'news_letter')" id="news_letter"><i class="fa fa-envelope"></i> Exam</li>
<li onClick="_get_page('news_letter', 'news_letter')" id="news_letter"><i class="fa fa-envelope"></i> Load Wallet</li>
<li onClick="_get_form('app_settings')"><i class="fa fa-gear"></i> Change Password</li>

<form method="post" action="config/code.php" id="logoutform">
<input type="hidden" name="action" value="logout"/>
<li onclick="document.getElementById('logoutform').submit();"><i class="fa fa-sign-out"></i> Sign-Out</li>
</form>
<br clear="all" />
</div>
</div>



