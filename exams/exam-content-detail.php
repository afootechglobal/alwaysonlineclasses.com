<?php include '../../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../../meta.php'?>

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

<?php include '../../header.php'?>

<div class="other-pages-title" data-aos="fade-down" data-aos-duration="1200">
	<div class="inner-div">
		<div class="content-div" data-aos="zoom-in" data-aos-duration="1200">
    	<h1 class="border" data-aos="fade-up" data-aos-duration="900"><span id="abbreviation"></span></h1>		
			<p id="seo_description"></p>
		</div>
		<a href="<?php echo $website_url ?>/user/login">		
		<button class="btn apply" title="GET STARTED">CREATE AN ACCOUNT</button></a>	
    </div>
	
	<script> _get_fetch_each_index_exam('<?php echo $exam_id?>');</script>
</div> 

<section class="faq-content-div">

    <section class="body-div">
		<div class="body-div-in">

			<div class="blog-back-div">
				<div class="right-div left-div subject-back-div">
					
					<div class="fetch" id="fetch_index_exam_subject">
						<script> _get_fetch_index_exam_subject('<?php echo $exam_id?>');</script>
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

				<div class="right-div sticky-div">
					<div class="inner-div">
						<p>AVAILABLE EXAMS</p>

						<div class="fetch" id="fetch_avail_exam">
							<script> _get_fetch_avail_index_exam();</script>
						</div>
						<br clear="all" />

						<!-- <div class="exam-blog-content-div">
							<a href="<?php //echo $website_url ?>/#" title="IJMB EXAM">
							<div class="image-div">
								<img src="<?php //echo $website_url?>/all-images/images/ijmb.png" alt="topics"/>
							</div>

							<div class="image-div text-div">
								<h4>IJMB</h4>
								<span>Subjects: 5</span>
							</div></a>
						</div> -->

						<br clear="all"/>
						<a href="<?php echo $website_url ?>/exams" title="">
						<button class="btn" title="Our Exams">VIEW ALL EXAMS</button></a>						
					</div>													
				</div>					
				<br clear="all"/>
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


