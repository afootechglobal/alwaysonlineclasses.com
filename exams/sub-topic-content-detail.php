<?php include '../../../../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../../../../meta.php'?>

<title> Dynamic Title</title>
<meta name="keywords" content="Dynamic Keywords" />
<meta name="description" content="Dynamic Description"/>

<meta property="og:title" content="Dynamic Og Title"/>
<meta property="og:image" content="Dynamic Og Image"/>
<meta property="og:description" content="Dynamic Og Description"/>

<meta name="twitter:title" content="Dynamic Twitter Title"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="Dynamic Twitter Image"/> 
<meta name="twitter:description" content="Dynamic Twitter Description"/>

<link rel="stylesheet" type="text/css" href="<?php echo $website_url?>/slide-property/engine/style.css" />
</head>
<body>

<?php include '../../../../header.php'?>

<div class="other-pages-title maths-other-pages-title" data-aos="fade-down" data-aos-duration="1200">
	<div class="inner-div">
		<div class="top-title-div">
			<div class="div-in">
				<ul>
					<a href="<?php echo $website_url?>"><li>Home <i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/exams"><li>Exams <i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/exams/"><li><span id="exams_url"></span><i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/exams/"><li><span id="subjects_url"></span><i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/exams/"><li><span id="sub_topic_url"></span></li></a>
				</ul>
			</div>			
		</div>
		<div class="content-div" data-aos="zoom-in" data-aos-duration="1200">
    		<h1 class="border" data-aos="fade-up" data-aos-duration="900"><span id="sub_topic_name"></span></h1>
			<p id="seo_description"></p>
		</div>	
			
    </div>
	<script> _get_fetch_each_index_sub_topic('<?php echo $sub_topic_id?>','<?php echo $topic_id?>');</script>
</div> 


<div class="about-content-div">

    <section class="body-div">
		<div class="body-div-in">       
     
			<div class="blog-back-div">
		
				<div class="right-div left-div">

					<div class="fetch" id="fetch_sub_topic_free_video">
						<script> _get_fetch_index_sub_topic_free_video('<?php echo $sub_topic_id?>');</script>
					</div>					             	

					<!-- <div class="video-details-div">
						<div class="inner-topic-details-div">
							<div class="icons-div">
								<i class="bi-camera-reels"></i>
							</div>

							<div class="text-div">
								Duration
								<h3 id="video_duration_id"></h3>                          
							</div>               
						</div>

						<div class="inner-topic-details-div">
							<div class="icons-div">
								<i class="bi-camera-video"></i>
							</div>

							<div class="text-div">
								Volume
								<h3 id="video_volume_name"></h3>                          
							</div>
						</div>

						<div class="inner-topic-details-div">
							<div class="icons-div">
								<i class="bi-credit-card"></i>
							</div>
							
							<div class="text-div">
								Pricing
								<h3 id="subscription_pricing_name"></h3>                         
							</div>
						</div>

						<div class="inner-topic-details-div">
							<div class="icons-div">
								<i class="bi-clock-history"></i>
							</div>
							
							<div class="text-div">
								Updated Time
								<h3 id="updated_time"></h3>                         
							</div>
						</div>
					</div> -->
					<br clear="all"/>
					<br clear="all"/>
					
					<div class="comment-back-div no-border">
						<div id="disqus_thread"></div>
							<script>
								(function() { // DON'T EDIT BELOW THIS LINE
								var d = document, s = d.createElement('script');
								s.src = 'https://valuehandlers-international-limited.disqus.com/embed.js';
								s.setAttribute('data-timestamp', +new Date());
								(d.head || d.body).appendChild(s);
								})();
							</script>
						</div>
				</div>

				<div class="right-div sticky-div">
					<div class="inner-div">						
						<p>RELATED VIDEO VOLUME</p>

						<div class="fetch" id="fetch_sub_topic_premium_video">
							<script> _get_fetch_index_sub_topic_premium_video('<?php echo $sub_topic_id?>');</script>
						</div> 

							
						
						<!-- <div class="content-div">
							<div class="image-div">
								<img src="<?php //echo $website_url?>/all-images/body-pix/indices.jpeg" alt="indices"/>
							</div>
							<div class="image-div text-div video-text">
							<a href="<?php //echo $website_url ?>/blog/group-of-students-sharing-ideals" title="">
								<h4>Indexes, Logrithms and Surds</h4></a>
								<p>Volume: <span>Volume 3</span></p>
								<p>Pricing: <span>PREMIUM</span></p>
							</div>
						
						</div> 	 -->

					</div>				
				</div>
				<br clear="all"/>
			</div>
		</div>
    </section>
	<br clear="all"/>
	<br clear="all"/>
</section>

<div class="footer-content-div">
	<?php include '../../../../footer.php'?>
</div>

<?php include '../../../../bottom-scripts.php'?>
<script type="text/javascript" src="<?php echo $website_url?>/slide-property/engine/wowslider.js"></script> 
<script type="text/javascript" src="<?php echo $website_url?>/slide-property/engine/script.js"></script>

</body>
</html>
