<?php include '../../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../../meta.php'?>
<title> Waec | <?php echo $thename?></title>
<meta name="keywords" content="<?php echo $thename?>, SSCE Online Classes, WAEC Online Classes, NECO Online Classes, NABTEB Online Classes, GCE Online Classes, Online education, Virtual learning, Remote learning, Digital classrooms, Online courses, E-learning, Distance education, Web-based classes, Internet-based learning, Continuous online education, LMS, Learning Management System" />
<meta name="description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<meta property="og:title" content="Embrace Learning Anytime with <?php echo $thename?> | SSCE, UTME" />
<meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/alwaysonlineclasses.jpg"/>
<meta property="og:description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<meta name="twitter:title" content="Embrace Learning Anytime with <?php echo $thename?> | SSCE, UTME"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/alwaysonlineclasses.jpg"/> 
<meta name="twitter:description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<link rel="stylesheet" type="text/css" href="<?php echo $website_url?>/slide-property/engine/style.css" />
</head>
<body>

<?php include '../../header.php'?>

<div class="other-pages-title" data-aos="fade-down" data-aos-duration="1200">
	<div class="inner-div">
		<div class="content-div" data-aos="zoom-in" data-aos-duration="1200">
    	<h1 class="border" data-aos="fade-up" data-aos-duration="900"><span id="abbreviation"></span></h1>		
			<p id="seo_description"></p>
		</div>
		<a href="<?php echo $website_url ?>/login">		
		<button class="btn apply" title="GET STARTED">CREATE AN ACCOUNT</button></a>	
    </div>
	
	<script> _get_fetch_each_index_exam('<?php echo $exam_id?>','1,2');</script>
</div> 

<section class="faq-content-div">

    <section class="body-div">
		<div class="body-div-in">

			<div class="blog-back-div">
				<div class="right-div left-div subject-back-div">
					
					<div class="fetch" id="fetch_index_exam_subject">
						<script> _get_fetch_index_exam_subject('<?php echo $exam_id?>','1,2');</script>
					</div>
					<br clear="all" />
					<!-- <div class="subject-div main-subject-div">
						<div class="image-div">
							<div class="img-in">
								<img src="<?php //echo $website_url?>/all-images/body-pix/maths.jpg" alt="maths"/>
							</div>                                
						</div>

						<div class="main-title-div">
							Subject
						</div>
						
						<div class="main-text-div">
							<h3>MATHEMATICS</h3> 
							<hr></hr>
							<P class="text"><i class="bi-book"></i> Topics: 599 | Sub-Topics: 150</P>
							<br clear="all"/>
							<a href="<?php //echo $website_url ?>/exams/waec/mathematics/" title="Mathematics">
							<button class="btn" title="Read More">Read More<i class="bi-arrow-right"></i></button></a>
						</div>                               
					</div>  -->

				</div>

				<div class="right-div">
					<div class="inner-div">
						<p>AVAILABLE EXAMS</p>

						<div class="exam-blog-content-div">
							<a href="<?php echo $website_url ?>/exams/waec" title="WAEC EXAM">
							<div class="image-div">
								<img src="<?php echo $website_url?>/all-images/images/ssce.png" alt="topics"/> 
							</div>

							<div class="image-div text-div">								
								<h4>WAEC</h4>
								<span>Subjects: 15</span>
							</div>
						</div></a>

						<div class="exam-blog-content-div">
						<a href="<?php echo $website_url ?>/#" title="NECO EXAM">
							<div class="image-div">
								<img src="<?php echo $website_url?>/all-images/images/neco.png" alt="topics"/>
							</div>
							
							<div class="image-div text-div">							
								<h4>NECO</h4>
								<span>Subjects: 15</span>
							</div>
						</div></a>

						<div class="exam-blog-content-div">
							<a href="<?php echo $website_url ?>/#" title="JAMB EXAM">
							<div class="image-div">
								<img src="<?php echo $website_url?>/all-images/images/utme.png" alt="topics"/>
							</div>

							<div class="image-div text-div">
								<h4>JAMB</h4>
								<span>Subjects: 5</span>
							</div></a>
						</div>

						<div class="exam-blog-content-div">
							<a href="<?php echo $website_url ?>/#" title="JUPEB EXAM">
							<div class="image-div">
								<img src="<?php echo $website_url?>/all-images/images/jupeb.webp" alt="topics"/>
							</div>

							<div class="image-div text-div">
								<h4>JUPEB</h4>
								<span>Subjects: 5</span>
							</div></a>
						</div>

						<div class="exam-blog-content-div">
							<a href="<?php echo $website_url ?>/#" title="IJMB EXAM">
							<div class="image-div">
								<img src="<?php echo $website_url?>/all-images/images/ijmb.png" alt="topics"/>
							</div>

							<div class="image-div text-div">
								<h4>IJMB</h4>
								<span>Subjects: 5</span>
							</div></a>
						</div>

						<br clear="all"/>
						<a href="<?php echo $website_url ?>/exams" title="">
						<button class="btn" title="Our Exams">VIEW ALL EXAMS</button></a>						
					</div>													
				</div>					
				
			</div>
		</div>
    </section>
	<br clear="all"/>
	<br clear="all"/>
	<br clear="all"/>
	
	<?php include '../../footer.php'?>
</section>

<?php include '../../bottom-scripts.php'?>
<script type="text/javascript" src="<?php echo $website_url?>/slide-property/engine/wowslider.js"></script> 
<script type="text/javascript" src="<?php echo $website_url?>/slide-property/engine/script.js"></script>

</body>
</html>


