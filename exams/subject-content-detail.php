<?php include '../../../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../../../meta.php'?>

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

<?php include '../../../header.php'?>

<div class="other-pages-title maths-other-pages-title" data-aos="fade-down" data-aos-duration="1200">
	<div class="inner-div">
		<div class="top-title-div">
			<div class="div-in">
				<ul>
					<a href="<?php echo $website_url?>"><li>Home <i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/exams"><li>Exams <i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/exams/"><li><span id="exam_url"></span><i class="bi bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/exams/"><li id="subject_url"></li></a>
				</ul>
			</div>			                                       
		</div> 
		<div class="content-div" data-aos="zoom-in" data-aos-duration="1200">
    		<h1 class="border" data-aos="fade-up" data-aos-duration="900"><span id="subject_name"></span></h1>
			<p id="seo_description"></p>
		</div>		
    </div>
	<script> _get_fetch_index_each_subject('<?php echo $subject_id?>','<?php echo $exam_id?>');</script>
</div> 


<div class="faq-content-div">

    <section class="body-div bg-color">
		<div class="body-div-in">       
            <div class="search-text-div" data-aos="zoom-in" data-aos-duration="800">
                <div class="search-segment-div">
                    <input id="search_txt" onkeyup="_get_fetch_index_topic('','<?php echo $subject_id?>','<?php echo $exam_id?>');" class="text_field" placeholder="Type Here To Search..." title="Type to Search Here">
                </div>    
            </div>
      
			<br clear="all"/>
			<br clear="all"/>
			<div class="blog-back-div">
		
				<div class="right-div left-div">
				
					<div class="faq-back-div main-topics-back-div">
						<div class="faq-text-div main-faq-text-div ">
							<div class="fetch" id="fetch_index_topic">
								<script> _get_fetch_index_topic('','<?php echo $subject_id?>','<?php echo $exam_id?>');</script>
							</div> 
							<br clear="all" /> 
							<!-- <div class="faq-inner-div  main-topics-inner-div">
								<div class="quest-faq-div active-faq quest-topics-div" id="faq10">
									<div class="faq-title-text">
										<h2>NUMBER & NUMERATION</h2>
									</div>
									
									<div class="faq-answer-div faq-answer-display topics-answer-div" onclick="_collapse('faq243')">
										<p>Sub-Topics  <i class="bi-chevron-down"></i> <span class="count">8</span></p> 
										<div class="expand-div" id="faq243num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>                         
									</div>
						       
									<div class="faq-answer-div faq-answer-display" id="faq243answer" style="display: none;">  
										<div class="topics-content-div">
											<div class="image-div">
												<img src="<?php //echo $website_url?>/all-images/body-pix/base-number.webp" alt="base-number"/>
											</div>

											<div class="text">
												<h3>Number Bases</h3>
												<p>Number bases, also known as numeral systems, are systems used to represent numbers. They provide a way to express the quantity of a number.</p>
												<a href="<?php //echo $website_url ?>/exams/waec/mathematics/number-bases" title="Number Bases">
												<button class="topics-btn" title="Play Video">Play Video </button></a>
											</div>
										</div>

									</div>
								</div>								
							</div> -->
							
							
						</div>
					</div>	
				</div>


				<div class="right-div sticky-div">
					<div class="inner-div">						
						<p>RELATED SUBJECTS</p>

						<div class="fetch" id="fetch_index_subject">
								<script> _get_fetch_index_subject();</script>
						</div>
						<br clear="all" />

						<!-- <div class="content-div">
							<div class="image-div">
								<img src="<?php //echo $website_url?>/all-images/body-pix/english.webp" alt="english"/>
							</div>
							<div class="image-div text-div">
								<a href="<?php //echo $website_url ?>/blog/creative-class-library-for-our-students" title="">
								<h4>Use Of English</h4></a>
								<span>Sub Topics: 2</span>
							</div>
						</div> -->
			
					</div>				
				</div>
				<br clear="all"/>
			</div>
			<br clear="all"/>
			<br clear="all"/>
		</div>
			
    </section>


	
	<?php include '../../../footer.php'?>
</section>


<?php include '../../../bottom-scripts.php'?>
</body>
</html>


