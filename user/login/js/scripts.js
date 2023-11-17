///// Right Click Disabled Function ////////
function _disabled_inspect() {
	document.addEventListener("contextmenu", (event) => {
		event.preventDefault();
	});
}


$(document).ready(function () {
	function trim(s) {
		return s.replace(/^\s*/, "").replace(/\s*$/, "");
	}
	$("#view_login").keydown(function (e) {
		if (e.keyCode == 13) {
			_log_in();
		}
	});

	$("#procced_reset_password_info").keydown(function (e) {
		if (e.keyCode == 13) {
			_proceed_reset_password();
		}
	});


});

function _show_password_visibility(ids,toggle_pass){
	var password = $('#'+ids).val();
	if (password!='') {
	 $('#'+toggle_pass).show();
	} else {
		$('#'+toggle_pass).hide();
	}
}



function _togglePasswordVisibility(ids, toggle_pass) {
	const passwordInput = document.getElementById(ids);
	const togglePasswordIcon = document.getElementById(toggle_pass);

	if (passwordInput.type === 'password') {
		passwordInput.type = 'text';
		togglePasswordIcon.innerHTML = '<i class="bi-eye password-toggle"></i>';
	  } else {
		passwordInput.type = 'password';
		togglePasswordIcon.innerHTML = '<i class="bi-eye-slash password-toggle"></i>';
	  }
  }

function _back_to_top() {
	event.preventDefault();
	$("html, body").animate({ scrollTop: 0 }, "slow");
	return false;
}

function _open_menu() {
	$('.sidenavdiv, .sidenavdiv-in').animate({ 'margin-left': '0' }, 200);
	$('.live-chat-back-div').animate({ 'margin-left': '-100%' }, 400);
	$('.index-menu-back-div').animate({ 'margin-left': '0' }, 400);
}

function _open_live_chat() {
	$('.sidenavdiv, .sidenavdiv-in').animate({ 'margin-left': '0' }, 200);
	$('.index-menu-back-div').animate({ 'margin-left': '-100%' }, 400);
	$('.live-chat-back-div').animate({ 'margin-left': '0' }, 400);
}
function _close_side_nav() {
	$('.sidenavdiv, .sidenavdiv-in').animate({ 'margin-left': '-100%' }, 200);
	$('.index-menu-back-div,.live-chat-back-div').animate({ 'margin-left': '-100%' }, 400);
}


function _next_page(next_id, divid) {
	$('#view_login,#procced_reset_password_info').hide();
	$('#' + next_id).fadeIn(1000);
	$('#page-title').html($('#' + divid).html());
}


function _alert_close() {
	$('#get-more-div').fadeOut(300);
}

function _alert_close2(next_id, divid) {
	$('#get-more-div').fadeOut(300);
	_next_page(next_id, divid);
}


function _get_page(page) {
	$('#get-more-div').html('<div class="ajax-loader"><img src="' + website_url + '/user/login/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
	var action = 'get_page';
	var dataString = 'action=' + action + '&page=' + page;
	$.ajax({
		type: "POST",
		url: user_login_local_url,
		data: dataString,
		cache: false,
		success: function (html) {
			$('#get-more-div').html(html);
		}
	});
}


function _get_page_with_id(page,verify_user_fullname,verify_user_email) {
	var action = 'get_page_with_id';
	var dataString = 'action=' + action + '&page=' + page;
	$.ajax({
		type: "POST",
		url: user_login_local_url,
		data: dataString,
		cache: false,
		success: function (html) {
			$('#get_page_id').html(html);
			$('#verify_user_fullname').html(verify_user_fullname);
			$('#verify_user_email').html(verify_user_email);
				
		}
	});
}


function _get_form(page) {
	$('#get-more-div').html('<div class="ajax-loader"><img src="' + website_url + '/user/login/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
	var action = 'get-form';
	var dataString = 'action=' + action + '&page=' + page;
	$.ajax({
		type: "POST",
		url: user_login_local_url,
		data: dataString,
		cache: false,
		success: function (html) { $('#get-more-div').html(html); }
	});
}





//////////// LOGIN ////////////
function _log_in() {
	var email = $('#email').val();
	var password = $('#password').val();
	$('#email,#password').removeClass('complain');
	if ((email != '') && (password != '')) {
		user_login(email, password);
	} else {
		$('#email,#password').addClass('complain');
		$("#warning-div").fadeIn(500).delay(5000).fadeOut(100);
	}
};


///////////////////// user login /////////////////////
function user_login(email, password) {
	var action = 'login_api';
	/////////////// get btn text ////////////////
	var btn_text = $('#login_btn').html();
	$('#login_btn').html('Authenticating <i class="fa fa-spinner fa-spin"></i>');
	document.getElementById('login_btn').disabled = true;
	////////////////////////////////////////////////	
	var dataString = 'action=' + action + '&email=' + email + '&password=' + password;

	$.ajax({
		type: "POST",
		url: user_api,
		dataType: 'json',
		data: dataString,
		cache: false,
		success: function (data) {

			var result = data.result;
			var message1 = data.message1;
			var message2 = data.message2;
			if (result == true) {
				var user_id = data.user_id;
				var access_key = data.access_key;
				$('#success-div').html('<div><i class="bi-check-all"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
				_proceed_to_login(user_id, access_key);
			} else {
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ' + message1 +" <br/><span> " + message2 + " </span>").fadeIn(500).delay(3000).fadeOut(100);
			}
			$('#login_btn').html(btn_text);
			document.getElementById('login_btn').disabled = false;

		}

	});
}




function _proceed_to_login(user_id, access_key) {
	var action = 'login';
	var dataString = 'action=' + action + '&user_id=' + user_id + '&access_key=' + access_key;
	$.ajax({
		type: "POST",
		url: user_login_local_url,
		data: dataString,
		cache: false,
		success: function (html) {
			window.parent(location = user_portal_url);
		}
	});
}









function _proceed_reset_password() {
	var action = 'reset_password_api';
	var email = $('#reset_pass_email').val();

	//////////////// get btn text ////////////////
	var btn_text = $('#reset_password_btn').html();
	$('#reset_password_btn').html('PROCESSING <i class="fa fa-spinner fa-spin"></i>');
	document.getElementById('reset_password_btn').disabled = true;
	////////////////////////////////////////////////	

	var dataString = 'action=' + action + '&email=' + email;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		cache: false,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var result = info.result;
			var message1 = info.message1;
			var message2 = info.message2;

			if (result == true) {
				var user_id = info.user_id;
				var fullname = info.fullname;
				var email = info.email;
				$('#reset_pass_email').removeClass('complain');
				$('#success-div').html('<div><i class="bi-check-all"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
				_reset_password(user_id, fullname, email);
			} else {
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ' + message1 +" <br/><span> " + message2 + " </span>").fadeIn(500).delay(3000).fadeOut(100);
				$('#reset_pass_email').addClass('complain');
			}
			$('#reset_password_btn').html(btn_text);
			document.getElementById('reset_password_btn').disabled = false;
		}
	});
}




function _reset_password(user_id, fullname, email) {
	$('#get-more-div').html('<div class="ajax-loader"><img src="' + website_url + '/user/login/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
	var action = 'reset_password';
	var dataString = 'action=' + action + '&user_id=' + user_id + '&fullname=' + fullname + '&email=' + email;
	$.ajax({
		type: "POST",
		url: user_login_local_url,
		data: dataString,
		cache: false,
		success: function (html) {
			//const obfuscatedEmail = obfuscateEmail(originalEmail);
			$('#get-more-div').html(html);
			$('#username').html(fullname);
			obfuscateEmail(email, 10);
		}
	});
}


function obfuscateEmail(email, visibleChars) {
	// Split the email into username and domain
	const [username, domain] = email.split('@');
	// Calculate the number of asterisks to replace in the username
	const numAsterisks = Math.max(0, username.length - visibleChars);
	// Obfuscate the username by replacing characters with asterisks
	const obfuscatedUsername = username.substring(0, visibleChars) + '*'.repeat(numAsterisks);
	// Combine the obfuscated username and the domain to form the obfuscated email
	const obfuscatedEmail = `${obfuscatedUsername}@${domain}`;
	$('#useremail').html(obfuscatedEmail);
  }




function _resend_otp(ids, user_id) {
	var action = 'resend_otp_api';
	var btn_text = $('#' + ids).html();
	$('#' + ids).html('SENDING <i class="fa fa-spinner fa-spin"></i>');
	var dataString = 'action=' + action + '&user_id=' + user_id;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		cache: false,
		success: function (data) {
			var message1 = data.message1;
			var message2 = data.message2;
			$('#success-div').html('<div><i class="bi-check-all"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
			$('#' + ids).html(btn_text);
		}
	});
}

///// accept number ////
function isNumber_Check() {
	var e = window.event;
	var key = e.keyCode && e.which;

	if (!((key >= 48) && (key <= 57) || (key == 43) || (key == 45))) {
		if (e.preventDefault) {
			e.preventDefault();
			$('#otp_info').fadeIn(300);
			document.getElementById('reset_password_otp').style.border = '#F00 1px solid';
		} else {
			e.returnValue = false;
		}
	} else {
		$('#otp_info').fadeOut(300);
		document.getElementById('reset_password_otp').style.border = 'rgba(0, 0, 0, .1) 1px solid';
	}
}





function  _check_password_match(ids,ids1, toggle_pass){
	var password = $("#"+ids).val();
	var confirmed_password = $("#"+ids1).val();
	if ((password!=confirmed_password) && (confirmed_password!='')){
	 $('#message').show();
	}else{
	  $('#message').hide();
	}
	_show_password_visibility(ids1,toggle_pass);
  }



function _comfirmed_reset_password(user_id) {
	var otp = $('#reset_password_otp').val();
	var password = $('#create_reset_password').val();
	var confirmed_reset_password = $('#confirmed_reset_password').val();

	$("#reset_password_otp,#create_reset_password,#confirmed_reset_password").removeClass("complain");
	if (otp == "") {
	   $("#reset_password_otp").addClass("complain");
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> OTP ERROR!  <br /><span> Fill fields to continue. </span>').fadeIn(500).delay(5000).fadeOut(100);
	 } else if (password == "") {
	   $("#create_reset_password").addClass("complain");
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> CREATE PASSWORD ERROR!  <br /><span> Fill fields to continue. </span>').fadeIn(500).delay(5000).fadeOut(100);
	 }else if(confirmed_reset_password== ""){
	   $("#confirmed_reset_password").addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> CONFIRMED PASSWORD ERROR!<br /><span>Fill fields to continue.</span>').fadeIn(500).delay(5000).fadeOut(100);
	 } else if (password != confirmed_reset_password) {
	   $("#create_reset_password,#confirmed_reset_password").addClass("complain");
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> PASSWORD ERROR! <br /><span> Password Not Match </span>').fadeIn(500).delay(5000).fadeOut(100);
	 } else if (password.length < 8) {
	   $("#create_reset_password,#confirmed_reset_password").addClass("complain");
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>PASSWORD NOT ACCEPTED <br /><span> Please follow the instructon </span>').fadeIn(500).delay(5000).fadeOut(100);
	
	 }else if (password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/ )){
	  
			$('#reset_password_otp,#create_reset_password,#confirmed_reset_password').removeClass('complain');
			//////////////// get btn text ////////////////
			var btn_text = $('#comfirmed_reset_btn').html();
			$('#comfirmed_reset_btn').html('RESETTING <i class="fa fa-spinner fa-spin"></i>');
			document.getElementById('comfirmed_reset_btn').disabled = true;
			////////////////////////////////////////////////	
			var action = 'confirm_otp_api';
			var dataString = 'action=' + action + '&user_id=' + user_id + '&otp=' + otp + '&password=' + password;
			$.ajax({
				type: "POST",
				url: user_api,
				data: dataString,
				cache: false,
				dataType: 'json',
				cache: false,
				success: function (data) {
					var result = data.result;
					var message1 = data.message1;
					var message2 = data.message2;
					if (result == true) {
						_get_page('password_reset_successful');
					} else {
						$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ' +  message1 + " <br /><span> " +message2 + " </span>").fadeIn(500).delay(3000).fadeOut(100);
						$('#reset_password_otp').addClass('complain');
					}
					$('#comfirmed_reset_btn').html(btn_text);
					document.getElementById('comfirmed_reset_btn').disabled = false;
				}
			});
		} else {
			$("#create_reset_password,#confirmed_reset_password").addClass("complain");
			$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> PASSWORD NOT ACCEPTED <br /><span> Please follow the instructon </span>').fadeIn(500).delay(5000).fadeOut(100);
	  
		}

	}







function _get_fetch_all_exam() {
	var action = 'fetch_all_exam_api';
	var dataString = 'action=' + action;
	$.ajax({
		type: "POST",
		url: user_api,
		dataType: 'json',
		data: dataString,
		cache: false,
		success: function (info) {
			var fetch = info.data;
			var result = info.result;
			var message1 = info.message1;
			var text = '';

			if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
					var exam_id = fetch[i].exam_id;
					var abbreviation = fetch[i].abbreviation.toUpperCase();
					text +=
						'<label>' +
						'<div class="radio"><input type="checkbox" class="child"id="' + exam_id + '" name="exam_id[]" data-value="' + exam_id + '" ><div class="border"></div></div>' +
						'<span> ' + abbreviation + '</span>' +
						'</label>';
				}
			} else {
				text = '<div class="alert">' + message1 + '</div>';
			}
			$('#fetch_exam').html(text);
		}

	});
}






function _user_reg_check(action_perform) {
	var fullname = $("#fullname").val();
	var email = $("#reg_email").val();
	var mobile = $("#reg_mobile").val();

	var exam_id = [];
	$(".child:checked").each(function () {
		exam_id.push($(this).data("value"));
	});
	var checked = $('input[name="exam_id[]"]:checked').length;

	var password = $("#reg_password").val();
	var comfirmed_password = $("#reg_com_password").val();

	$('#fullname,#reg_email,#reg_mobile,#subject_id,#reg_password,#reg_com_password').removeClass('complain');
	if ((fullname == '') && (email == '') && (mobile == '') && (password == '') && (comfirmed_password == '')) {
		$('#fullname,#reg_email,#reg_mobile,#exam_id,#reg_password,#reg_com_password').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ERROR!! <br /><span> Fill all fields to continue. </span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (fullname == '') {
		$('#fullname').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>FULL NAME ERROR!! <br /><span> Fill all fields to continue. </span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (email == '' || $("#reg_email").val().indexOf("@") <= 0) {
		$('#reg_email').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>EMAIL ERROR!! <br /><span> Fill all field to continue. </span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (mobile == '') {
		$('#reg_mobile').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>PHONE NUMBER ERROR!! <br /><span> Fill all field to continue. </span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (checked < 1) {
		$('#exam_id').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>EXAM ERROR!! <br /><span> Fill all field to continue. </span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (password == '') {
		$('#reg_password').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>PASSWORD ERROR!! <br /><span> Fill all fields to continue. </span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (password != comfirmed_password) {
		$('#reg_password,#reg_com_password').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div>PASSWORD ERROR!! <br /><span> Password not match </span>').fadeIn(500).delay(3000).fadeOut(100);
	} else if (password.length < 8) {
		$("#reg_password,#reg_com_password").addClass("complain");
		$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Password Not Accepted <br /><span> Please follow the instructon </span>').fadeIn(500).delay(5000).fadeOut(100);
	 
	}else if (password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/ )){
		
		
		$('#fullname,#reg_email,#reg_mobile,#subject_id,#reg_password,#reg_com_password').removeClass('complain');

		if(action_perform=='user_otp_authentication'){
			
			_user_otp_authentication('view_otp_authentication',fullname,email);

		}else if(action_perform=='user_registration'){

		 	var otp = $("#reg_otp_authentication").val();
			if (otp == '') {
				$('#reg_otp_authentication').addClass('complain');
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> OTP ERROR!! <br /><span> Fill this field to continue </span>').fadeIn(500).delay(5000).fadeOut(100);
			
			} else {
			_user_regisration(fullname,email,mobile,exam_id,password,otp);
			}
		}else{
			/// do nothing
		}


	} else {
			$("#reg_password,#reg_com_password").addClass("complain");
			$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Password Not Accepted <br /><span> Please follow the instructon </span>').fadeIn(500).delay(5000).fadeOut(100);
	}
}








function _user_otp_authentication(page,fullname,email) {
	
			//////////////// get btn text ////////////////
			var btn_text = $('#reg_btn').html();
			$('#reg_btn').html('PROCESSING <i class="fa fa-spinner fa-spin"></i>');
			document.getElementById('reg_btn').disabled = true;
			////////////////////////////////////////////////	
			var action = 'otp_authentication_api';
			var dataString = 'action=' + action + '&fullname=' + fullname + '&email=' + email;

			$.ajax({
				type: "POST",
				url: user_api,
				data: dataString,
				cache: false,
				dataType: 'json',
				cache: false,
				success: function (data) {
					var result = data.result;
					var message1 = data.message1;
					var message2 = data.message2;
					var verify_user_fullname = data.fullname;
					var verify_user_email = data.email;
				
					if (result == true) {
						_get_page_with_id(page,verify_user_fullname, verify_user_email);
						$('#success-div').html('<div><i class="bi-check-all"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
					} else {
						$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
						$('#reset_password_otp').addClass('complain');
					}
					$('#reg_btn').html(btn_text);
					document.getElementById('reg_btn').disabled = false;
				}
			});
	}








function _resend_otp_authentication(ids) {
	var fullname = $("#fullname").val();
	var email = $("#reg_email").val();
	var action = 'otp_authentication_api';
	var btn_text = $('#' + ids).html();
	$('#' + ids).html('SENDING <i class="fa fa-spinner fa-spin"></i>');
	var dataString = 'action=' + action + '&fullname=' + fullname+ '&email=' + email;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		cache: false,
		success: function (info) {
			var result = info.result;
			var message1 = info.message1;
			var message2 = info.message2;
			if (result == true) {
				$('#success-div').html('<div><i class="bi-check-all"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
			} else {
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
			}
			$('#' + ids).html(btn_text);
		}
	});
}







function _user_regisration(fullname,email,mobile,exam_id,password,otp){
		//////////////// get btn text ////////////////
		var btn_text = $('#verify_btn').html();
		$('#verify_btn').html('VERIFYING <i class="fa fa-spinner fa-spin"></i>');
		document.getElementById('verify_btn').disabled = true;
		////////////////////////////////////////////////	
		var action = 'user_regisration_api';
		var dataString = 'action=' + action + '&fullname=' + fullname + '&email=' + email + '&mobile=' + mobile + '&exam_id=' + exam_id + '&password=' + password + '&otp=' + otp;

		$.ajax({
			type: "POST",
			url: user_api,
			data: dataString,
			cache: false,
			dataType: 'json',
			cache: false,
			success: function (data) {
				var result = data.result;
				var message1 = data.message1;
				var message2 = data.message2;
				var user_id = data.user_id;
				var access_key = data.access_key;
				if (result == true) {
					$('#success-div').html('<div><i class="bi-check-all"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
					_proceed_to_login(user_id, access_key);
				} else {
					$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ' +message1 +" <br/><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
					$('#reset_password_otp').addClass('complain');
				}
				$('#verify_btn').html(btn_text);
				document.getElementById('verify_btn').disabled = false;
			}
		});
	}









