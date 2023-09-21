///// Right Click Disabled Function ////////
function _disabled_inspect(){
	document.addEventListener("contextmenu", (event) => {
        event.preventDefault();
    });      
}


///// for FAQs
function _collapse(div_id){
	var x = document.getElementById(div_id+"num");
	  if (x.innerHTML === '&nbsp;<i class="bi-plus"></i>&nbsp;') {
		  x.innerHTML = '&nbsp;<i class="bi-dash"></i>&nbsp;';
		  $('#'+div_id).addClass('active-faq');
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
	} else {
		$('#back2Top').fadeOut(1000);
	}
	if (scrollheight >= 400) {
		$("header").css("position", "fixed");
	}else{
		$("header").css("position", "absolute");	
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



function _get_staff_login(staff_id) {
	var action = 'fetch_staff_api';
	$('#login_user_fullname,#login_user_login_time').html('XXXXX');
	var dataString = 'action=' + action + '&staff_id=' + staff_id;
	$.ajax({
		type: "POST",
		url: api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var fetch = info.data;
			var fullname = fetch.fullname.toLowerCase();
			var mobile = fetch.mobile;
			var role_name = fetch.role_name;
			var updated_time = fetch.updated_time;
			var passport = fetch.passport;
			$('#login_user_fullname,#profile_name,#header_profile_name').html(fullname);
			$('#user_id').html(staff_id);
			$('#header_role_name').html(role_name);
			$('#user_mobile').html(mobile);
			$('#login_user_login_time').html(updated_time);
			_get_header_pix(passport);
		}
	});
}

function _get_header_pix(passport) {
	var header_pix = '';
	if (passport == '') {
		header_pix = '<img src="' + website_url + '/uploaded_files/staff_pix/friends.png" id="passportimg1" alt="profile picture" />' +
			'<img src="' + website_url + '/uploaded_files/staff_pix/friends.png" id="passportimg2" alt="profile picture" />'
	} else {
		header_pix = '<img src="' + website_url + '/uploaded_files/staff_pix/' + passport + '" id="passportimg1" alt="profile picture" />'
		'<img src="' + website_url + '/uploaded_files/staff_pix/' + passport + '" id="passportimg2" alt="profile picture" />'
	}
	$('#header_pix,#toggle_header_pix').html(header_pix);
}



function _get_select_status(select_id, status_id) {
	var action = 'fetch_status_api';
	var dataString = 'action=' + action + '&status_id=' + status_id;
	$.ajax({
		type: "POST",
		url: api,
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
					var status_id = fetch[i].status_id;
					var status_name = fetch[i].status_name;
					/// for status update profile loop option ////
					text += '<option value="' + status_id + '" >' + status_name.toUpperCase() + '</option>';
				}
			} else {
				text = '<option>' + message + '</option>';
			}
			$('#' + select_id).append(text);

		}
	});
}



function _get_fetch_all_index_exam(status_id) {
	var action = 'fetch_index_exam_api';
	var dataString = 'action=' + action+'&status_id=' + status_id;
		$.ajax({
			type: "POST",
			url: api,
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
						var abbreviation = fetch[i].abbreviation;
						var exam_name = fetch[i].exam_name;
						var exam_summary = fetch[i].exam_summary;
						var exam_url = fetch[i].exam_url;
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
									'<p>'+ exam_summary +'</p>'+
									
									'<div class="topics">'+
										'<p><i class="bi-book"></i> TOPICS: <span>100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span>100</span></p>'+
									'</div>'+
								'</div>'+
							'</div></a>';
						}


						$('#fetch_index_exam').html(text);
					
				} else {
					
					text +=
						'<div class="false-notification-div">' +
							'<p> ' + message + ' </p>' +
						'</div>';
					$('#fetch_index_exam').html(text);
				}

			}
		});
}





















