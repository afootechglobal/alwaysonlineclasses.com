<?php include '../../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../../meta.php'?>

<title>Dynamic Title</title>
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

<div class="other-pages-title blog-other-page" data-aos="fade-down" data-aos-duration="1200">
	<div class="inner-div">
		<div class="top-title-div">
			<div class="div-in">
				<ul>
					<a href="<?php echo $website_url?>"><li>Home <i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/blog"><li>Blog <i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/blog"><li id="li_blog_title"> </li></a>
				</ul>
			</div>			
		</div>
		<div class="content-div" data-aos="zoom-in" data-aos-duration="1200">
    		<h1 class="border" data-aos="fade-up" data-aos-duration="900"><span id="blog_title"></span></h1>		
			<div class="count"><i class="bi-person"></i> By: <span id="fullname"></span> | <i class="bi-calendar3"></i> DATE: <span id="created_time"></span> | <i class="bi-eye"></i> VIEWS: <span> 0 </span></div>
			<p id="blog_summary"></p>
		</div>		
    </div>
	
</div> 

<section class="faq-content-div">

    <section class="body-div">
		<div class="body-div-in">

			<div class="blog-back-div">
				<div class="right-div left-div">
				
					<div class="main-blog-image-div">
						<div id="view_blog_pix"><img src="<?php echo $website_url?>/uploaded_files/blog_pix/default_pix.jpg" alt="blog"/></div>
					</div>

					<div class="text-div" id="blog_detail"></div>


					<br clear="all"/>
					<br clear="all"/>
					<br clear="all"/>
					<div class="comment-back-div">

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
					<br clear="all"/>
					<script> _get_fetch_each_blog('<?php echo $blog_id?>');</script>
				</div>	

				<div class="right-div sticky-div">
					<div class="inner-div">
						
						<p>RELATED BLOG</p>

						<div class="fetch" id="fetch_related_blog">
                    		<script> _get_fetch_related_blog('');</script>
                		</div>
						<!-- <div class="content-div" data-aos="fade-in" data-aos-duration="1200">
							<div class="image-div">
								<img src="<?php //echo $website_url?>/all-images/body-pix/blog3.jpg" alt="blog"/> 
							</div>
							<div class="image-div text-div">
								<a href="<?php //echo $website_url ?>/#" title="">
								<h4>College Seminar “Leadership & Works”</h4></a>
								 <span>July 10 | No Comments</span>
							</div>
						</div> -->
					</div>				
				</div>
                <br clear="all" />		
			</div>
		</div>
    </section>
	<br clear="all"/>
	<br clear="all"/>
	
	<?php include '../../footer.php'?>
</section>


<?php include '../../bottom-scripts.php'?>
<script type="text/javascript" src="<?php echo $website_url?>/slide-property/engine/wowslider.js"></script> 
<script type="text/javascript" src="<?php echo $website_url?>/slide-property/engine/script.js"></script>


</body>
</html>


