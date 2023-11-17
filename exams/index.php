<?php include '../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../meta.php'?>
<title> Exam Categories | <?php echo $thename?></title>
<meta name="keywords" content="<?php echo $thename?>, SSCE Online Classes, WAEC Online Classes, NECO Online Classes, NABTEB Online Classes, GCE Online Classes, Online education, Virtual learning, Remote learning, Digital classrooms, Online courses, E-learning, Distance education, Web-based classes, Internet-based learning, Continuous online education, LMS, Learning Management System" />
<meta name="description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<meta property="og:title" content="Embrace Learning Anytime with <?php echo $thename?> | SSCE, UTME" />
<meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/alwaysonlineclasses.jpg"/>
<meta property="og:description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<meta name="twitter:title" content="Embrace Learning Anytime with <?php echo $thename?> | SSCE, UTME"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/alwaysonlineclasses.jpg"/> 
<meta name="twitter:description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>
</head>
<body>
<?php include '../header.php'?>

<div class="other-pages-title" data-aos="fade-down" data-aos-duration="1200">
	<div class="inner-div exam-inner">
		<div class="top-title-div">
			<div class="div-in">
				<ul>
					<a href="<?php echo $website_url?>"><li>Home <i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/exams"><li>Exams </li></a>
				</ul>
			</div>			
		</div>

		<div class="content-div" data-aos="zoom-in" data-aos-duration="1200">
    		<h1 class="border" data-aos="fade-up" data-aos-duration="900"><span>Exam Categories</span></h1>	
			<p>We are dedicated to providing you with a reliable outstanding online class service that will make your education faster truly memorable.</p>
		</div>

		<button class="ios-btn" title="Download on Apple Store"></button>	
		<button class="ios-btn android-btn" title="Download on google play Store"></button>		
    </div>
</div>  

<section class="about-content-div">

	<section class="body-div">
		<div class="body-div-in">
			<div class="blog-back-div">
		
				<div class="right-div left-div  exam-content-back-div">
			
					<div class="fetch" id="fetch_all_exam_cat_exam">
						<script> _get_fetch_all_cat_exam();</script>
					</div>
					<br clear="all" />

					<!-- <a href="#/exams/waec" title="West African Examinations Council (WAEC)">
					<div class="exam-cat-content-div">
						<div class="image-div">
							<img src="#/all-images/images/ssce.png" alt="topics"/>
						</div>

						<div class="content-div">
							<h2>West African Examinations Council (WAEC)</h2>
							<p>(WAEC) is an examination board established by law to determine the examinations required in West African countries.</p>
							
							<div class="topics">
								<p><i class="bi-book"></i> TOPICS: <span>100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span>100</span></p>
							</div>
						</div>
					</div></a> -->
				</div>


				<div class="right-div sticky-div">
					<div class="inner-div">						
						<p>POPULAR SUBJECTS</p>

							<div class="fetch" id="fetch_index_subject">
								<script> _get_fetch_index_subject();</script>
							</div>
							<br clear="all" />
							
						<!-- <div class="content-div">
							<div class="image-div">
								<img src="<?php //echo $website_url?>/all-images/body-pix/literature.jpg" alt="chemistry"/>
							</div>
							<div class="image-div text-div">
							<a href="<?php //echo //$website_url ?>/blog/group-of-students-sharing-ideals" title="">
								<h4>Literature In English</h4></a>
								<span>Sub Topics: 3</span>
							</div>
						</div>
						<br clear="all"/> -->			
					</div>				
				</div>
				<br clear="all"/>
			</div>
		</div>
    </section>
	<br clear="all"/>
	<br clear="all"/>
	<?php include '../footer.php'?>
</section>
<?php include '../bottom-scripts.php'?>
</body>
</html>


