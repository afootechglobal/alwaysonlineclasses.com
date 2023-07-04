
           
                <div class="div-in">
                    <div class="side-in-div">
                        <div class="side-text animated fadeIn">
                            <div class="logo-div"><img src="<?php echo $images_pix_url?>/logo.png" alt=""></div>
                            <h1>Welcome To Always Online Classes</h1>
                            <p>Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB.</p>
                        </div>
                         
                            <div class="social-div">
                                <div class="icon-div"><i class="bi-facebook"></i></div>
                                <div class="icon-div"><i class="bi-instagram"></i></div>
                                <div class="icon-div"><i class="bi-twitter"></i></div>
                                <div class="icon-div"><i class="bi bi-linkedin"></i></div>
                            </div>
                            
                       
                        <div class="arrow-right"></div>
                            
                    </div>
                    

                    <div class="side-in-div form-div" >
                        <div class="form-in animated fadeInRight">
                            <ul class="form-header">
                                <li class="active-li" id="login" title="Log-In" onclick="_get_page('login','login')">LOG-IN</li>
                                <li id="signup" title="Sign-Up" onclick="_get_page('signup','signup')">SIGN-UP</li>
                                <li class="reload"  onClick="window.location.reload();" title="Reload"><i class="bi-arrow-clockwise"></i></li>
                            </ul>
                        <!-- <h1>Log-In <button class="header-btn" id="signup" onclick="_get_page('signup')">SIgn-Up</button><button class="header-btn active-btn" id="login" onclick="_get_page('login')">Log-In</button></h1>     -->
                      
                        <div  id="more-info">
                            <?php $page='login';?>
                            <?php include 'config/page-content.php';?>
                        </div>

                       </div>
                    </div>


               
            </div>