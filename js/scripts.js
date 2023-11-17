
function _call_carousel(cnt){
	// INIT CAROUSEL
	 window['carousel_' +cnt] = new CgCarousel('#js-carousel_'+cnt,  window['carousel_options_' +cnt], {});
	// Navigation
	window['next_' +cnt] = document.getElementById('js-carousel__next_'+cnt);
	window['next_' +cnt].addEventListener('click', () => window['carousel_' +cnt].next());
	window['prev_' +cnt] = document.getElementById('js-carousel__prev_'+cnt);
	window['prev_' +cnt].addEventListener('click', () => window['carousel_' +cnt].prev());
}


///// Right Click Disabled Function ////////
function _disabled_inspect(){
	// Disable right-click on the entire document
	document.addEventListener('contextmenu', function (e) {
		e.preventDefault();
	});

	// Disable Ctrl+S
	document.addEventListener('keydown', function (e) {
		if ((e.ctrlKey || e.metaKey) && e.key === 's') {
			e.preventDefault();
		}
	});     
}



function _count_landing_page() {
    $(document).ready(function () {
        var targets = [550, 250, 600, 240]; // The numbers you want to count up to
        var duration = 5000; // The duration in milliseconds for the animation

        $('.text-div').each(function (index) {
            var $counter = $(this).find('#counter');
            var $countUnit = $(this).find('#count-unit');
            var targetNumber = targets[index];

            $({ countNum: 200 }).animate({
                countNum: targetNumber
            }, {
                duration: duration,
                easing: 'linear',
                step: function () {
                    var roundedNum = Math.floor(this.countNum);
                    var displayNum = roundedNum + '+';
                    $counter.text(displayNum);
                    $countUnit.text('');
                },
                complete: function () {
                    $counter.text(targetNumber + '+');
                    $countUnit.text('');
                }
            });
        });
    });
}





 
///// for FAQs
function _collapse(div_id,div_id1,div_id2) {
	var x = document.getElementById(div_id + "num");
	  if (x.innerHTML === '&nbsp;<i class="bi-plus"></i>&nbsp;') {
		  x.innerHTML = '&nbsp;<i class="bi-dash"></i>&nbsp;';
		  $('#'+div_id).addClass('active-faq');
		  _get_fetch_sub_topic(div_id,div_id1,div_id2);
	  }else{
		x.innerHTML = '&nbsp;<i class="bi-plus"></i>&nbsp;';
		  $('#'+div_id).removeClass('active-faq');
	  }
	$('#'+div_id+'answer').slideToggle('slow');
}


$(window).scroll(function() { 
  var scrollheight = $(window).scrollTop();
  	if (scrollheight >= 100) {
		$("header").css("background", "#fff");
		$("#back2Top").fadeIn(1000);
		$(".sticky-div").css("position", "sticky");
		$(".sticky-div").css("top", "120px");
	} else {
		$('#back2Top').fadeOut(1000);
	}
	if (scrollheight >= 400) {
		$("header").css("position", "fixed");
	}else{
		$("header").css("position", "absolute");	
	}
	if (scrollheight >= 700) {
		$(".sticky-div").css("position", "sticky");
		$(".sticky-div").css("top", "120px");
		$(".sticky-div").css("overflow", "auto");
		$(".sticky-div").css("height", "100%");
	}else{
		$(".sticky-div").css("position", "relative");
		$(".sticky-div").css("top", "0");
		$(".sticky-div").css("overflow", "none");
		$(".sticky-div").css("height", "auto");
	}
});


function _back_to_top(){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
}

function _open_menu(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.live-chat-back-div').animate({'margin-left':'-100%'},400);
	   $('.index-menu-back-div').animate({'margin-left':'0'},400);
}
function _open_live_chat(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.index-menu-back-div').animate({'margin-left':'-100%'},400);
	   $('.live-chat-back-div').animate({'margin-left':'0'},400);
}
function _close_side_nav(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
	   $('.index-menu-back-div,.live-chat-back-div').animate({'margin-left':'-100%'},400);
}


function _next_page(next_id,divid) {
	$('#view_login,#reset_password_info').hide();
	 $('#'+next_id).fadeIn(1000);
	$('#page-title').html($('#'+ divid).html());
 }


 function _alert_close(){
	$('#get-more-div').fadeOut(300);
 }

 function myFunction() {
	var x = document.getElementById("password");
	if (x.type === "password") {
	  x.type = "text";
	} else {
	  x.type = "password";
	  $('#hide').addClass("bi bi-eye-slash-fill");
  
	}
}


function _open_li(ids){
	$('#'+ids+'-sub-li').toggle('slow');
}

function _get_page(page){
	   $('#get-more-div').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
	   var action='get_page';
	   var dataString = 'action='+action+'&page='+page;
		  $.ajax({
		  type: "POST",
		  url: index_local_url,
		  data: dataString,
		  cache: false,
		  success: function(html){
			 $('#get-more-div').html(html);   
		  }
	});
 }

 function _get_form(page){
	$('#get-more-div').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		var action='get-form';
		var dataString ='action='+ action+'&page='+ page;
		$.ajax({
		type: "POST",
		url: index_local_url,
		data: dataString,
		cache: false,
		success: function(html){$('#get-more-div').html(html);}
		});
}

 function _switch_cookies(id){
	var x = document.getElementById(id);
	  if (x.innerHTML === '<img src="'+website_url+'/all-images/images/switch-off.jpg">') {
		x.innerHTML = '<img src="'+website_url+'/all-images/images/switch-on.jpg">';
	  }else{
		x.innerHTML = '<img src="'+website_url+'/all-images/images/switch-off.jpg">';
	  }
}



function _get_cat(select_id) {
	var action = 'fetch_cat_api';
	var dataString = 'action=' + action;
	$.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var result = info.result;
			var message = info.message;
			var fetch = info.data;

			var text = '';
			if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
					var cat_id = fetch[i].cat_id;
					var cat_desc = fetch[i].cat_desc;
					/// for status update profile loop option ////
					text += '<option value="' + cat_id + '" >' + cat_desc.toUpperCase() + '</option>';
				}
			} else {
				text = '<option>' + message + '</option>';
			}
			$('#' + select_id).append(text);

		}
	});
}




function _get_fetch_all_cat_exam() {
	var action = 'fetch_index_exam_api';
	$('#fetch_all_exam_cat_exam').html('<div class="ajax-loader"><img src="' +website_url +'/all-images/images/ajax-loader.gif"/></div>').fadeIn("fast")
	var dataString = 'action=' + action;
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function (info) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;

				var text = '';

				if (result == true) {
					for (var i = 0; i < fetch.length; i++) {
						var abbreviation = fetch[i].abbreviation.toUpperCase();
						var exam_name = fetch[i].exam_name;
						var seo_description = fetch[i].seo_description.substr(0, 160);
						var exam_url = fetch[i].exam_url;
						var total_exam_subject_count = fetch[i].total_exam_subject_count; 
		
						var exam_passport = fetch[i].exam_passport;
						if (exam_passport=='') {
							exam_passport ='defaults.jpg';
						}
		
						text +=
							'<a href="'+ website_url +'/exams/'+ exam_url +'" title="'+ exam_name +'">'+
							'<div class="exam-cat-content-div">'+
								'<div class="image-div">'+
									'<img src="'+ website_url +'/uploaded_files/exam_pix/'+ exam_passport +'" alt="'+ abbreviation +'"/>'+
								'</div>'+
		
								'<div class="content-div">'+
									'<h2>'+ exam_name +'</h2>'+
									'<p>'+ seo_description +'</p>'+
									
									'<div class="topics">'+
										'<p><i class="bi-book"></i>&nbsp;|&nbsp;SUBJECTS: <span>'+ total_exam_subject_count +'</span></p>'+
									'</div>'+
								'</div>'+
							'</div></a>';						
						}
						$('#fetch_all_exam_cat_exam').html(text);
				} else {
					text +=
						'<div class="false-notification-div">' +
							'<p> ' + message + ' </p>' +
						'</div>';
					$('#fetch_all_exam_cat_exam').html(text);
				}

			}
	});
}



function _get_fetch_avail_index_exam() {
	var action = 'fetch_index_avail_exam_api';
	var dataString = 'action=' + action;
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function (info) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;

				var text = '';

				if (result == true) {
					for (var i = 0; i < fetch.length; i++) {
						var exam_id = fetch[i].exam_id;
						var abbreviation = fetch[i].abbreviation.toUpperCase();
						var exam_name = fetch[i].exam_name;
						var exam_url = fetch[i].exam_url;
						var total_exam_subject_count = fetch[i].total_exam_subject_count;
						
						var exam_passport = fetch[i].exam_passport;
						if (exam_passport=='') {
							exam_passport ='defaults.jpg';
						}
		
						text +=
							'<div class="exam-blog-content-div">'+
								'<a href="'+ website_url +'/exams/'+ exam_url +'" title="'+ exam_name +'">'+
								'<div class="image-div">'+
									'<img src="'+ website_url +'/uploaded_files/exam_pix/'+ exam_passport +'" alt="'+ abbreviation +'"/>'+
								'</div>'+

								'<div class="image-div text-div">'+
									'<h4>'+ abbreviation +'</h4>'+
									'<span>Subjects: <span>'+total_exam_subject_count+'</span></span>'+
								'</div></a>'+
							'</div>'; 							
					}
					$('#fetch_avail_exam').html(text);
				} else {
					text +=
						'<div class="false-notification-div">' +
							'<p> ' + message + ' </p>' +
						'</div>';
					$('#fetch_avail_exam').html(text);
				}

			}
	});
}





function _get_fetch_each_index_exam(exam_id) {
	var action = 'fetch_index_exam_api';
	var dataString = 'action=' + action + '&exam_id=' + exam_id;
	$.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var fetch = info.data;
			var abbreviation = fetch.abbreviation.toUpperCase();
			var exam_name = fetch.exam_name;
			var exam_url= fetch.exam_url;
			var seo_keywords = fetch.seo_keywords;
			var seo_description = fetch.seo_description;
			var exam_passport = fetch.exam_passport;
			
			$('title').text(abbreviation);
			$('meta[name="keywords"]').attr('content', seo_keywords);
			$('meta[name="description"]').attr('content', seo_description);
			$('meta[property="og:title"]').attr('content', abbreviation);
			$('meta[property="og:image"]').attr('content', website_url +"/uploaded_files/exam_pix/" + exam_passport);
			$('meta[property="og:description"]').attr('content', seo_description);
			$('meta[name="twitter:title"]').attr('content', abbreviation);
			$('meta[name="twitter:image"]').attr('content', website_url +"/uploaded_files/exam_pix/" + exam_passport);
			$('meta[name="twitter:description"]').attr('content', seo_description);
			$('#abbreviation').html(abbreviation);
			$('#exam_name').html(exam_name);
			$('#exam_url').html(exam_url);
			$('#seo_description').html(seo_description);
		}
	});
}


function _get_fetch_header_exam() {
	var action = 'fetch_index_exam_api';
	var dataString = 'action=' + action;
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function (info) {
				var fetch = info.data;
				var result = info.result;

				var text = '';

				if (result == true) {
					for (var i = 0; i < fetch.length; i++) {
						var abbreviation = fetch[i].abbreviation.toUpperCase();
						var exam_url = fetch[i].exam_url;
						var exam_passport = fetch[i].exam_passport;
						if (exam_passport=='') {
							exam_passport ='defaults.jpg';
						}
		
						text +=
							'<a href="'+ website_url +'/exams/'+ exam_url +'" title="'+ abbreviation +'">'+
							'<div class="cat-div">'+
								'<div class="image-div">'+
									'<img src="'+ website_url +'/uploaded_files/exam_pix/'+ exam_passport +'" alt="'+ abbreviation +'"/>'+
								'</div>'+

								'<div class="text">'+
									'<h3>'+ abbreviation +'</h3>'+
								'</div>'+
							'</div></a>';						
						}
					$('#fetch_header_exam').html(text);

				}
			}
	});
}



function _get_fetch_index_exam_subject(exam_id) {
	var action = "fetch_index_exam_subject_api";
	$('#fetch_index_exam_subject').html('<div class="ajax-loader"><img src="' +website_url +'/all-images/images/ajax-loader.gif"/></div>').fadeIn("fast")
	var dataString ="action=" +action +"&exam_id=" + exam_id;
	  $.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
		  var fetch = info.data;
		  var result = info.result;
		  var message = info.message;
		  var exam_url = info.exam_url;
		  var text = "";
  
		  if (result == true) {
			for (var i = 0; i < fetch.length; i++) {
			  var subject_id = fetch[i].subject_id.toUpperCase();
			  var subject_name = fetch[i].subject_name.toUpperCase();
			  var subject_url = fetch[i].subject_url;
			  var total_topic_count = fetch[i].total_topic_count;
			  
			  var subject_passport = fetch[i].subject_passport;
			  if (subject_passport == "") {
				subject_passport = "default_pix.jpg";
			  }
  
			  text +=
				'<div class="subject-div main-subject-div">'+
					'<div class="image-div">'+
						'<div class="img-in">'+
							'<img src="'+ website_url+'/uploaded_files/subject_pix/'+ subject_passport +'" alt="'+ subject_name +'"/>'+
						'</div>' +                               
					'</div>'+

					'<div class="main-title-div">'+
						'Subject'+
					'</div>'+
					
					'<div class="main-text-div">'+
						'<h3>'+ subject_name +'</h3>' +
						'<hr></hr>'+
						'<P class="text"><i class="bi-book"></i> Topics: <span>'+ total_topic_count  +'</span></P>'+
						'<br clear="all"/>'+
						'<a href="'+ website_url +'/exams/'+ exam_url +'/'+ subject_url +'/" title="'+ subject_name +'">'+
						'<button class="btn" title="Read More">Read More<i class="bi-arrow-right"></i></button></a>'+
					'</div> '+                              
				'</div>'; 
			}
			$('#fetch_index_exam_subject').html(text);
		  } else {
			text +=
			  '<div class="false-notification-div">' +
			  "<p> " +
			  message +
			  " </p>" +
			  "</div>";
			$('#fetch_index_exam_subject').html(text);
		  }
		},
	  });
}
  
  



function _get_fetch_index_each_subject(subject_id,exam_id) {
	var action = 'fetch_index_exam_subject_api';

	var dataString = 'action=' + action + '&subject_id=' + subject_id + '&exam_id=' + exam_id;
	$.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var fetch = info.data;
			var exam_url = info.exam_url;

			var subject_name = info.subject_name;
			var subject_url = fetch.subject_url;
			var seo_keywords = fetch.seo_keywords;
			var seo_description = fetch.seo_description;
			var subject_passport = fetch.subject_passport;

			$('title').text(subject_name);
			$('meta[name="keywords"]').attr('content', seo_keywords);
			$('meta[name="description"]').attr('content', seo_description);
			$('meta[property="og:title"]').attr('content', subject_name);
			$('meta[property="og:image"]').attr('content', website_url +"/uploaded_files/subject_pix/" + subject_passport);
			$('meta[property="og:description"]').attr('content', seo_description);
			$('meta[name="twitter:title"]').attr('content', subject_name);
			$('meta[name="twitter:image"]').attr('content', website_url +"/uploaded_files/subject_pix/" + subject_passport);
			$('meta[name="twitter:description"]').attr('content', seo_description);
			$('#subject_name').html(subject_name);
			$('#subject_url').html(subject_url);
			$('#seo_description').html(seo_description);
			$('#exam_url').html(exam_url);
		}
	});
}




function _get_fetch_index_topic(topic_id,subject_id,exam_id) {
	var action = "fetch_index_topic_api";
	var search_txt = $("#search_txt").val();
	
	if (search_txt.length > 2 || search_txt == "") {
	$('#fetch_index_topic').html('<div class="ajax-loader"><img src="' +website_url +'/all-images/images/ajax-loader.gif"/></div>').fadeIn("fast")
	var dataString ="action=" + action + "&topic_id=" + topic_id + "&subject_id=" + subject_id + "&exam_id=" + exam_id + "&search_txt=" +search_txt;
	 
	$.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
		  var fetch = info.data;
		  var result = info.result;
		  var message = info.message;
		  var no=0;
		  var text = "";
  
		  if (result == true) {
			for (var i = 0; i < fetch.length; i++) {
			  no++;
			  var topic_id= fetch[i].topic_id;
			  var topic_name= fetch[i].topic_name.toUpperCase();
			  var total_sub_topic_count= fetch[i].total_sub_topic_count;
			  
			  text +=
			  		'<div class="faq-inner-div  main-topics-inner-div animated fadeIn">'+
						'<div class="quest-faq-div active-faq quest-topics-div" id="faq10">'+
							'<div class="faq-title-text">'+
								'<h2>'+ topic_name +'</h2>'+
							'</div>'+
							
							'<div class="faq-answer-div faq-answer-display topics-answer-div" onclick="_collapse('+"'"+'view'+no+"'"+ "," + "'" + '' +"'"  +"," +"'" +topic_id +"'" +')">'+
								'<p>Sub-Topics  <i class="bi-chevron-down"></i> <span class="count">'+total_sub_topic_count+'</span></p> '+
								'<div class="expand-div" id="'+"view"+no+"num"+'" onClick="_get_fetch_sub_topic('+"'"+'view'+no+"'"+ "," + "'" + '' +"'" + ", "  +"'" +topic_id +"'" +');">&nbsp;<i class="bi-plus"></i>&nbsp;</div>'+                     
							'</div>'+
						
							'<div class="faq-answer-div faq-answer-display" id="'+"view"+no+"answer"+'" style="display: none;">'+ 
								'<div class="" id="sub_topic_view'+no+'">'+
              
									//// fetch all sub topic under each topic
							
						  		'</div>'+
							'</div>'+
						'</div>	'+							
					'</div>';
			}
			$('#fetch_index_topic').html(text);
		  } else {
			text +=
			  '<div class="false-notification-div">' +
			  "<p> " +
			  message +
			  " </p>" +
			  "</div>";
			$('#fetch_index_topic').html(text);
		  }
		},
	  });
	} else {
		text +=
		  '<div class="false-notification-div">' +
		  "<p> " +
		  message1 +
		  " </p>" +
		  "</div>";
		$('#fetch_index_topic').html(text);
	  }
	
}
  
  
	function _get_fetch_index_subject() {
	var action = "fetch_exam_index_subject_api";

	var dataString ="action=" +action;
	  $.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
		  var fetch = info.data;
		  var result = info.result;
		  var message = info.message;
		  var text = "";
  
		  if (result == true) {
			for (var i = 0; i < fetch.length; i++) {
			  var subject_name = fetch[i].subject_name.toUpperCase();
			  var subject_passport = fetch[i].subject_passport;
			  var total_topic_count = fetch[i].total_topic_count;
			  
			  if (subject_passport == "") {
				subject_passport = "default_pix.jpg";
			  }
  
			  text +=
					'<div class="content-div">'+
					'<div class="image-div">'+
						'<img src="'+ website_url +'/uploaded_files/subject_pix/'+ subject_passport +'" alt="'+ subject_name +'"/>'+
					'</div>'+
					'<div class="image-div text-div">'+
					//'< href="<?php echo //$website_url ?>/blog/group-of-students-sharing-ideals" title="">'+
						'<h4>'+ subject_name +'</h4>'+
						'<span>Topics: <span>'+total_topic_count+'</span></span>'+
					'</div>'+
					'</div>';
			}
			$("#fetch_index_subject").html(text);
		  } else {
			text +=
			  '<div class="false-notification-div">' +
			  "<p> " +
			  message +
			  " </p>" +
			  "</div>";
			$("#fetch_index_subject").html(text);
		  }
		},
	  });
}


function _get_fetch_all_index_subject() {
	var action = "fetch_all_index_subject_api";

	var dataString ="action=" +action;
	  $.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
		  var fetch = info.data;
		  var result = info.result;
		  var message = info.message;
		  var text = "";
  
		  if (result == true) {
			for (var i = 0; i < fetch.length; i++) {
			  var subject_name = fetch[i].subject_name.toUpperCase();
			  var total_topic_count = fetch[i].total_topic_count;
			  
			  var subject_passport = fetch[i].subject_passport;
			  if (subject_passport == "") {
				subject_passport = "default_pix.jpg";
			  }
  
			  text +=
					'<div class="cg-carousel__slide js-carousel__slide"  data-aos="fade-left" data-aos-duration="1200">'+
						'<div class="subject-div">'+
							'<div class="image-div">'+
								'<div class="img-in">' + 
									'<img src="'+ website_url +'/uploaded_files/subject_pix/'+ subject_passport +'" alt="'+ subject_name +'"/>'+
								'</div> ' +                               
							'</div>'+  

							'<div class="sub-title-div">' + 
								'Subject'+ 
							'</div>'+ 
						
							'<div class="text-div">'+
								'<h3>'+ subject_name +'</h3> '+
								'<hr></hr>' +
								'<P class="text"><i class="bi-book"></i> Topics: <span>'+total_topic_count+'</span</P>'+  
								//'< href="<?php// echo $website_url ?>/exams/waec/mathematics/" title="Mathematics">'+
								// '<button class="btn" title="Read More">Read More<i class="bi-arrow-right"></i></button>'+
							'</div>' +                               
						'</div>'+                       
					'</div> ';				
			}
			  $("#fetch_main_index_subject").html(text);
				_call_carousel(3);			  
		  } else {
			text +=
			  '<div class="false-notification-div">' +
			  "<p> " +
			  message +
			  " </p>" +
			  "</div>";
			$("#fetch_main_index_subject").html(text);
		  }
		},
	  });
}

	

function _get_fetch_sub_topic(div_id,sub_topic_id,topic_id) {
	var action = "fetch_index_sub_topic_api";

	  var dataString ="action=" + action +"&sub_topic_id=" + sub_topic_id + "&topic_id=" + topic_id;
	  $.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
		  var fetch = info.data;
		  var result = info.result;
		  var exam_url = info.exam_url;
		  var subject_url = info.subject_url;

		  var no=0;
		  var text = "";
  
		  if (result == true) {
			for (var i = 0; i < fetch.length; i++) {
			   no++;
			  var sub_topic_name= fetch[i].sub_topic_name.toUpperCase();
			  var sub_topic_url= fetch[i].sub_topic_url;
			  var seo_description = fetch[i].seo_description;
			  var sub_topic_passport = fetch[i].sub_topic_passport;
			  if (sub_topic_passport == "") {
				sub_topic_passport = "default_pix.jpg";
			  }
			  text +=
			  '<a href="'+ website_url +'/exams/'+ exam_url +'/'+ subject_url +'/'+ sub_topic_url +'" title="'+ sub_topic_name +'">'+

			  		'<div class="topics-content-div">'+

						'<div class="image-div">'+
							'<img src="'+ website_url + "/uploaded_files/sub_topic_pix/" + sub_topic_passport + '" alt="'+ sub_topic_name +'"/>'+
						'</div>'+

						'<div class="text">'+
							'<h3>'+ sub_topic_name +'</h3>'+
							'<p>'+ seo_description +'</p>'+
							'<button class="topics-btn" title="Play Video">Play Video </button>'+
						'</div>'+
					'</div></a>';
			}
			$('#'+"sub_topic_"+div_id).html(text);
		  }
		}
	  });
  }
  




  function _get_fetch_each_index_sub_topic(sub_topic_id,topic_id) {
	var action = 'fetch_index_sub_topic_api';

	var dataString = 'action=' + action + '&sub_topic_id=' + sub_topic_id + '&topic_id=' + topic_id;
	$.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var fetch = info.data;
			var sub_topic_name = info.sub_topic_name;
			var exam_url = info.exam_url;
			var subject_url = info.subject_url;      

			var sub_topic_url = fetch.sub_topic_url;
			var seo_keywords = fetch.seo_keywords;
			var seo_description = fetch.seo_description;
			var sub_topic_passport = fetch.sub_topic_passport;

			$('title').text(sub_topic_name);
			$('meta[name="keywords"]').attr('content', seo_keywords);
			$('meta[name="description"]').attr('content', seo_description);
			$('meta[property="og:title"]').attr('content', sub_topic_name);
			$('meta[property="og:image"]').attr('content', website_url +"/uploaded_files/sub_topic_pix/" + sub_topic_passport);
			$('meta[property="og:description"]').attr('content', seo_description);
			$('meta[name="twitter:title"]').attr('content', sub_topic_name);
			$('meta[name="twitter:image"]').attr('content', website_url +"/uploaded_files/sub_topic_pix/" + sub_topic_passport);
			$('meta[name="twitter:description"]').attr('content', seo_description);
			$('#sub_topic_name').html(sub_topic_name);
			$('#sub_topic_url').html(sub_topic_url);
			$('#seo_description').html(seo_description);
			$('#subjects_url').html(subject_url);
			$('#exams_url').html(exam_url);
		}
	});
}




	function _get_fetch_all_index_exam() {
		var action = 'fetch_index_exam_api';
		var dataString = 'action=' + action;
			$.ajax({
				type: "POST",
				url: index_api,
				data: dataString,
				dataType: 'json',
				cache: false,
				success: function (info) {
					var fetch = info.data;
					var result = info.result;
					var message = info.message;

					var text = '';

					if (result == true) {
						for (var i = 0; i < fetch.length; i++) {
							var abbreviation = fetch[i].abbreviation.toUpperCase();
							var exam_url = fetch[i].exam_url;
							var exam_passport = fetch[i].exam_passport;
							if (exam_passport=='') {
								exam_passport ='defaults.jpg';
							}
			
							text +='<div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">'+		
									'<div class="categories-div">'+
										'<a href="'+ website_url +'/exams/'+ exam_url +'" title="'+ abbreviation +'">'+
										'<div class="image-div">'+
											'<img src="'+ website_url +'/uploaded_files/exam_pix/'+ exam_passport +'" alt="'+ abbreviation +'"/>'+
										'</div>'+

										'<div class="text-div">'+
											'<h3>'+ abbreviation +'</h3>'+
										'</div></a>'+
									'</div>'+
								'</div>';
						}
	
						$('#fetch_all_index_exam').html(text);
						_call_carousel(2)
					} else {
						text =
							'<div class="false-notification-div">' +
								'<p> ' + message + ' </p>' +
							'</div>';
						$('#fetch_all_index_exam').html(text);
					}

				}
		});
	}




	

	function _get_fetch_blog(blog_id) {
		var action = "fetch_blog_api";
		var cat_id = $("#cat_id").val();
		var search_txt = $("#search_txt").val();
	
		if (search_txt.length > 2 || search_txt == "") {
		$('#fetch_blog').html('<div class="ajax-loader"><img src="' +website_url +'/all-images/images/ajax-loader.gif"/></div>').fadeIn("fast")
		var dataString ="action=" + action + "&blog_id=" + blog_id+ "&cat_id=" + cat_id+ "&search_txt=" +search_txt;
		 
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: "json",
			cache: false,
			success: function (info) {
			  var fetch = info.data;
			  var result = info.result;
			  var message = info.message;

			  var text = "";
	  
			  if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
				  var blog_title= fetch[i].blog_title;
				  var blog_summary= fetch[i].blog_summary.substr(0, 120);
				  var blog_url = fetch[i].blog_url;
				  var blog_pix = fetch[i].blog_pix;

					var date = fetch[i].updated_time;
					var originalDate = new Date(date);
					var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
					var day = originalDate.getDate();
					var month = monthNames[originalDate.getMonth()];
					var year = originalDate.getFullYear();
					var formattedDate = day + ' ' + month + ' ' + year;
					console.log(formattedDate);

				  if (blog_pix=='') {
					blog_pix ='defaults.jpg';
				  }

				  text +=
						'<div class="blog-div main-blog-div" data-aos="fade-up" data-aos-duration="1000">'+
						'<a href="' +website_url +'/blog/'+ blog_url +'" title="'+ blog_title +'">'+
							'<div class="image-div">'+
								'<img src="' +website_url +'/uploaded_files/blog_pix/'+ blog_pix +'" alt="'+ blog_title +'"/>'+
							'</div>'+

							'<div class="text-div main-text-div">'+
								
								'<h3>' + blog_title +'</h3>'+
								'<p>'+ blog_summary+'...</p>'+
								'<div class="count"><i class="bi-calendar3"></i> '+ formattedDate +' <span>|</span> <i class="bi-eye-fill"></i> 0 VIEWS</div>'+
							'</div>'+
							'</a>'+
						'</div>'; 
				  
				}
				$('#fetch_blog').html(text);
			  } else {
				text +=
				  '<div class="false-notification-div">' +
				  "<p> " +
				  message +
				  " </p>" +
				  "</div>";
				$('#fetch_blog').html(text);
			  }
			},
		  });
		} else {
			text +=
			  '<div class="false-notification-div">' +
			  "<p> " +
			  message1 +
			  " </p>" +
			  "</div>";
			$('#fetch_blog').html(text);
		  }
	  }



	function _get_fetch_index_blog(blog_id) {
		var action = "fetch_index_blog_api";
	
		var dataString ="action=" + action + "&blog_id=" + blog_id;
			
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: "json",
			cache: false,
			success: function (info) {
			
				var fetch = info.data;
				var result = info.result;
	
				var text = "";
		
				if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
					var blog_title= fetch[i].blog_title;
					var blog_summary= fetch[i].blog_summary.substr(0, 120);
					var blog_url = fetch[i].blog_url;
					var blog_pix = fetch[i].blog_pix;

					var date = fetch[i].updated_time;
					var originalDate = new Date(date);
					var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
					var day = originalDate.getDate();
					var month = monthNames[originalDate.getMonth()];
					var year = originalDate.getFullYear();
					var formattedDate = day + ' ' + month + ' ' + year;
					console.log(formattedDate);

					if (blog_pix=='') {
					blog_pix ='defaults.jpg';
					}

					text +=
					
						'<div class="blog-div" data-aos="fade-up" data-aos-duration="1000">'+
						'<a href="' +website_url +'/blog/'+ blog_url +'" title="'+ blog_title +'">'+
							'<div class="image-div">'+
								'<img src="' +website_url +'/uploaded_files/blog_pix/'+ blog_pix +'" alt="'+ blog_title +'"/>'+
							'</div>'+

							'<div class="text-div">'+
								
								'<h3>' + blog_title +'</h3>'+
								'<p>'+ blog_summary+'...</p>'+
								'<div class="count"><i class="bi-calendar3"></i> '+ formattedDate +' <span>|</span> <i class="bi-eye-fill"></i> 0 VIEWS</div>'+
							'</div>'+
							'</a>'+
						'</div>';
						 
		
				}
				$('#fetch_index_blog').html(text);
				}

			},
		});
	}


	function _get_fetch_related_blog(blog_id) {
		var action = "fetch_index_blog_api";

		var dataString ="action=" + action + "&blog_id=" + blog_id;
			
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: "json",
			cache: false,
			success: function (info) {
				var fetch = info.data;
				var result = info.result;

				var text = "";
		
				if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
					var blog_title= fetch[i].blog_title;
					var blog_url = fetch[i].blog_url;
					var blog_pix = fetch[i].blog_pix;

					var date = fetch[i].updated_time;
					var originalDate = new Date(date);
					var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
					var day = originalDate.getDate();
					var month = monthNames[originalDate.getMonth()];
					var year = originalDate.getFullYear();
					var formattedDate = day + ' ' + month + ' ' + year;
					console.log(formattedDate);

					if (blog_pix=='') {
					blog_pix ='defaults.jpg';
					}

					text +=
					 	'<div class="content-div" data-aos="fade-in" data-aos-duration="1200">'+
							'<div class="image-div">'+
								'<img src="' +website_url +'/uploaded_files/blog_pix/'+ blog_pix +'" alt="'+ blog_title +'"/>'+
							'</div>'+
							'<div class="image-div text-div">'+
								'<a href="' +website_url +'/blog/'+ blog_url +'" title="'+ blog_title +'">'+
								'<h4>' + blog_title +'</h4></a>'+
								 '<span>Updated On: ' + formattedDate +'</span>'+
							'</div>'+
						'</div> ';
				}
				$("#fetch_related_blog").html(text);
				}
				
			},
		});
	}


	function _get_fetch_each_blog(blog_id) {
		var action = 'fetch_blog_api';

		var dataString = 'action=' + action + '&blog_id=' + blog_id;
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function (info) {
				var fetch = info.data;
				
				var fullname = info.fullname;
				var blog_title = fetch.blog_title;
				var seo_keywords = fetch.seo_keywords;
				var blog_summary = fetch.blog_summary;
				var blog_detail = fetch.blog_detail;
				var blog_pix = fetch.blog_pix;

				var date = fetch.updated_time;
				var originalDate = new Date(date);
				var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
				var day = originalDate.getDate();
				var month = monthNames[originalDate.getMonth()];
				var year = originalDate.getFullYear();
				var formattedDate = day + ' ' + month + ' ' + year;
				console.log(formattedDate);

				$('title').text(blog_title);
				$('meta[name="keywords"]').attr('content', seo_keywords);
				$('meta[name="description"]').attr('content', blog_summary);
				$('meta[property="og:title"]').attr('content', blog_title);
				$('meta[property="og:image"]').attr('content', website_url +"/uploaded_files/blog_pix/" +blog_pix);
				$('meta[property="og:description"]').attr('content', blog_summary);
				$('meta[name="twitter:title"]').attr('content', blog_title);
				$('meta[name="twitter:image"]').attr('content', website_url +"/uploaded_files/blog_pix/" +blog_pix);
				$('meta[name="twitter:description"]').attr('content', blog_summary);
				$('#fullname').html(fullname);
				$('#blog_title').html(blog_title);
				$('#li_blog_title').html(blog_title);
				$('#blog_summary').html(blog_summary);
				$('#blog_detail').html(blog_detail);
				$('#created_time').html(formattedDate);
				_get_blog_pix(blog_pix);
			},
		});
	}


	
function _get_blog_pix(blog_pix) {
	var view_blog_pix = "";
	if (blog_pix == "") {
		view_blog_pix ='<img src="' +website_url +'/uploaded/blog-pix/default_pix.jpg" alt="'+ blog_title +'"/>';
	} else {
		view_blog_pix =
		'<img src="' + website_url +"/uploaded_files/blog_pix/" +blog_pix +'" alt="'+ blog_title +'" />';
	}
	$('#view_blog_pix').html(view_blog_pix);
  }
  


	function _get_fetch_faq(faq_id) {
		var action = "fetch_faq_api";
		var cat_id = $("#cat_id").val();
		var search_txt = $("#search_txt").val();

		if (search_txt.length > 2 || search_txt == "") {
			$('#fetch_faq').html('<div class="ajax-loader"><img src="' +website_url +'/all-images/images/ajax-loader.gif"/></div>').fadeIn("fast")
		var dataString ="action=" + action + "&faq_id=" + faq_id+ "&cat_id=" + cat_id+ "&search_txt=" +search_txt;
			
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: "json",
			cache: false,
			success: function (info) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;
				var no=0;
				var text = "";
		
				if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
					no++;
					var faq_question= fetch[i].faq_question;
					var faq_answer= fetch[i].faq_answer;
			
					text +=
						'<div class="quest-faq-div" id="view'+no+'">'+
							'<div class="faq-title-text" onclick="_collapse('+"'"+'view'+no+"'"+')">'+
								'<h2>'+ faq_question +'</h2>'+
								'<div class="expand-div" id="'+"view"+no+"num"+'">&nbsp;<i class="bi-plus"></i>&nbsp;</div>'+
		
								'<div class="faq-answer-div faq-answer-display" id="'+"view"+no+"answer"+'" style="display: none;" >'+
									'<p>'+ faq_answer +'</p> '+
								'</div>'+
							'</div>'+
						'</div>';				
				}
				$("#fetch_faq").html(text);
				} else {
				text +=
					'<div class="false-notification-div">' +
					"<p> " +
					message +
					" </p>" +
					"</div>";
				$("#fetch_faq").html(text);
				}
			},
			});
		} else {
			text +=
				'<div class="false-notification-div">' +
				"<p> " +
				message1 +
				" </p>" +
				"</div>";
			$("#fetch_faq").html(text);
			}
		}


	function _get_fetch_index_faq(faq_id) {
		var action = "fetch_index_faq_api";
		var dataString ="action=" + action + "&faq_id=" + faq_id;
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: "json",
			cache: false,
			success: function (info) {
			  var fetch = info.data;
			  var result = info.result;
              var no=0;
			  var text = "";
	  
			  if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
					no++;
					var faq_question= fetch[i].faq_question;
					var faq_answer= fetch[i].faq_answer;
			
				  text +=
						'<div class="quest-faq-div" id="view'+no+'">'+
							'<div class="faq-title-text" onclick="_collapse('+"'"+'view'+no+"'"+')">'+
								'<h2>'+ faq_question +'</h2>'+
								'<div class="expand-div" id="'+"view"+no+"num"+'">&nbsp;<i class="bi-plus"></i>&nbsp;</div>'+
							
							
								'<div class="faq-answer-div faq-answer-display" id="'+"view"+no+"answer"+'" style="display: none;" >'+
									'<p>'+ faq_answer +'</p> '+
								'</div>'+
							'</div>'+
						'</div>';
				}
				$("#fetch_index_faq").html(text);
			  }
			},
		  });
	}


	
	function _get_fetch_index_sub_topic_premium_video(sub_topic_id) {
		var action = "fetch_index_sub_topic_premium_video_api";
		$('#fetch_sub_topic_premium_video').html('<div class="ajax-loader"><img src="' +website_url +'/all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
		var dataString ="action=" + action + "&sub_topic_id=" + sub_topic_id;
		$.ajax({
			type: "POST",
			url: index_api,
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function (info) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;

				var text = '';

				if (result == true) {
					for (var i = 0; i < fetch.length; i++) {
						var video_title = fetch[i].video_title;
						var video_volume_name = fetch[i].video_volume_name;
					    var subscription_pricing_name = fetch[i].subscription_pricing_name;
						var video_passport = fetch[i].video_passport;
						if (video_passport=='') {
							video_passport ='defaults.jpg';
						}
		
						text +=
							'<a href="'+ website_url +'/user/login" title="KINDLY LOGIN TO WATCH VIDEO">'+
							'<div class="content-div">'+
								'<div class="image-div">'+
									'<img src="'+ website_url +'/uploaded_files/sub_topic_video_pix/'+ video_passport +'" alt="'+ video_title +'"/>'+
								'</div>'+

								'<div class="image-div text-div video-text">'+								
									'<h4>'+ video_title +'</h4>'+
									'<p>Volume: <span>'+ video_volume_name +'</span></p>'+
									'<p>Pricing: <span>'+ subscription_pricing_name +'</span></p>'+
								'</div>'+
							'</div></a>';									
						}
						$('#fetch_sub_topic_premium_video').html(text);
				} else {
					text +=
						'<div class="false-notification-div">' +
							'<p> ' + message + ' </p>' +
						'</div>';
					$('#fetch_sub_topic_premium_video').html(text);
				}

			}
	});
 }


 function _get_fetch_index_sub_topic_free_video(sub_topic_id) {
	var action = "fetch_index_sub_topic_free_video_api";
	$('#fetch_sub_topic_free_video').html('<div class="ajax-loader"><img src="' +website_url +'/all-images/images/ajax-loader.gif"/></div>').fadeIn("fast")
	var dataString ="action=" + action + "&sub_topic_id=" + sub_topic_id;
	$.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var fetch = info.data;
			var result = info.result;
			var message = info.message;

			var text = '';

			if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
				
					var video_objective = fetch[i].video_objective;
					var video_title = fetch[i]. video_title;
					var video_duration = fetch[i].video_duration;
					var video = fetch[i].video;
					var video_volume_name = fetch[i].video_volume_name;
					var subscription_pricing_name = fetch[i].subscription_pricing_name;
					var updated_time = fetch[i].updated_time;

					text =

						'<div class="page-video-div">'+
							'<video controls="" loop="" class="video-slide">'+
							'<source src="' + website_url + '/uploaded_files/videos/' + video + '" type="video/mp4">'+
							'</video>'+	
						'</div>'+


						'<div class="video-details-div">'+
							'<div class="inner-topic-details-div">'+
								'<div class="icons-div">'+
									'<i class="bi-camera-reels"></i>'+
								'</div>'+

								'<div class="text-div">'+
									'Duration'+
									'<h3>'+ video_duration +'</h3> '+                         
								'</div> '+              
							'</div>'+

							'<div class="inner-topic-details-div">'+
								'<div class="icons-div">'+
									'<i class="bi-camera-video"></i>'+
								'</div>'+

								'<div class="text-div">'+
									'Volume'+
									'<h3>'+ video_volume_name +'</h3>'+                        
								'</div>'+
							'</div>'+

							'<div class="inner-topic-details-div">'+
								'<div class="icons-div">'+
									'<i class="bi-credit-card"></i>'+
								'</div>'+
								
								'<div class="text-div">'+
									'Pricing'+
									'<h3>'+ subscription_pricing_name +'</h3> '+                        
								'</div>'+
							'</div>'+

							'<div class="inner-topic-details-div">'+
								'<div class="icons-div">'+
									'<i class="bi-clock-history"></i>'+
								'</div>'+
								
								'<div class="text-div">'+
									'Updated Time'+
									'<h3>'+ updated_time +'</h3> '+                        
								'</div>'+
							'</div>'+
						'</div>'+

						'<div class="text-div">'+
							'<h2>'+  video_title +'</h2> '+
							'<br clear="all/">'+
							'<div>'+ video_objective +'</div>'+
						'</div>';
					}

					$('#fetch_sub_topic_free_video').html(text);
			} else {
				text +=
					'<div class="false-notification-div">' +
						'<p> ' + message + ' </p>' +
					'</div>';
				$('#fetch_sub_topic_free_video').html(text);
			}

		}
});
}



function _get_fetch_index_random_free_video() {
	var action = "fetch_index_random_free_video_api";
	var dataString ="action=" + action;
	$.ajax({
		type: "POST",
		url: index_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var fetch = info.data;
			var result = info.result;
			var message = info.message;

			var text = '';

			if (result == true) {
				for (var i = 0; i < fetch.length; i++) {

					var video_title = fetch[i]. video_title;
					var video_objective = fetch[i].video_objective.substr(0, 200);
					var video_duration = fetch[i].video_duration;
					var video = fetch[i].video;
					var video_volume_name = fetch[i].video_volume_name;
					var subscription_pricing_name = fetch[i].subscription_pricing_name;
					var updated_time = fetch[i].updated_time;
					var abbreviation = fetch[i].abbreviation;
					var subject_url = fetch[i].subject_url;
					var sub_topic_url = fetch[i].sub_topic_url;

					text =
						'<div class="image-video-div" data-aos="fade-up" data-aos-duration="1200">'+
							'<div class="page-video-div">'+
								'<video controls="" loop="" class="video-slide">'+
								'<source src="' + website_url + '/uploaded_files/videos/' + video + '" type="video/mp4">'+
								'</video>'+	
							'</div>'+
						'</div>'+

						'<div class="content-div" data-aos="fade-up" data-aos-duration="1200">'+ 
							'<div class="div-in">'+
								'<h1><span>' + video_title + '</span></h1>'+ 
								'<span>' + video_objective + '</span>'+ 
								'<br clear="all"/>'+
								'<br clear="all"/>'+
								'<a href="' + website_url + '/exams/'+abbreviation+'/'+subject_url+'/'+sub_topic_url+'" title="WATCH VIDEO">'+ 
								'<button class="btn" title="WATCH VIDEO">PLAY VIDEO</button></a>'+
							'</div>'+
                    	'</div> <br clear="all"/>'+

						'<div class="topic-details-div">'+
							'<div class="inner-topic-details-div">'+
								'<div class="icons-div">'+
									'<i class="bi-camera-reels"></i>'+
								'</div>'+

								'<div class="text-div">'+
									'Duration'+
									'<h3>'+ video_duration +'</h3> '+                         
								'</div> '+              
							'</div>'+

							'<div class="inner-topic-details-div">'+
								'<div class="icons-div">'+
									'<i class="bi-camera-video"></i>'+
								'</div>'+

								'<div class="text-div">'+
									'Volume'+
									'<h3>'+ video_volume_name +'</h3>'+                        
								'</div>'+
							'</div>'+

							'<div class="inner-topic-details-div">'+
								'<div class="icons-div">'+
									'<i class="bi-credit-card"></i>'+
								'</div>'+
								
								'<div class="text-div">'+
									'Pricing'+
									'<h3>'+ subscription_pricing_name +'</h3> '+                        
								'</div>'+
							'</div>'+

							'<div class="inner-topic-details-div">'+
								'<div class="icons-div">'+
									'<i class="bi-clock-history"></i>'+
								'</div>'+
								
								'<div class="text-div">'+
									'Updated Time'+
									'<h3>'+ updated_time +'</h3> '+                        
								'</div>'+
							'</div>'+
						'</div>';

					}
					$('#fetch_random_free_video').html(text);
			} else {
				text +=
					'<div class="false-notification-div">' +
						'<p> ' + message + ' </p>' +
					'</div>';
				$('#fetch_random_free_video').html(text);
			}

		}
});
}


  
	function _get_footer_exam() {
		var action = 'fetch_index_exam_api';
		var dataString = 'action=' + action;
			$.ajax({
				type: "POST",
				url: index_api,
				data: dataString,
				dataType: 'json',
				cache: false,
				success: function (info) {
					var fetch = info.data;
					var result = info.result;

					var text = '';

					if (result == true) {
						for (var i = 0; i < fetch.length; i++) {
							var abbreviation = fetch[i].abbreviation.toUpperCase();
							var exam_url = fetch[i].exam_url;			
			
							text +=
								'<a href="'+website_url+'/exams/'+ exam_url +'" title="'+ abbreviation +'">'+
								'<li><i class="bi-caret-right"></i>'+ abbreviation +' </li></a>';
							}
							$('#fetch_footer_exam').html(text);
						}
				}
		});
	}


	function _get_index_menu_exam() {
		var action = 'fetch_index_exam_api';
		var dataString = 'action=' + action;
			$.ajax({
				type: "POST",
				url: index_api,
				data: dataString,
				dataType: 'json',
				cache: false,
				success: function (info) {
					var fetch = info.data;
					var result = info.result;

					var text = '';

					if (result == true) {
						for (var i = 0; i < fetch.length; i++) {
							var abbreviation = fetch[i].abbreviation.toUpperCase();
							var exam_url = fetch[i].exam_url;			
			
							text +=
								'<a href="'+website_url+'/exams/'+ exam_url +'" title="'+ abbreviation +'">'+
								'<li>'+ abbreviation +' </li></a>';
							}
							$('#fetch_index_menu_exam').html(text);
						}
				}
		});
	}