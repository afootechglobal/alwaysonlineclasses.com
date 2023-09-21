
function _toggle_profile_pix_div(){
	$('.toggle-profile-div').toggle('slow');
}

function select_search(){
	$('.srch-select').toggle('fast');
};
function srch_custom(text){
	$('#srch-text').html(text);
	$('.custom-srch-div').fadeIn(500);
};
function _next_page(next_id,icon,divid) {
	$('#account_settings_id,#account_detail,#channge_password').hide();
	 $('#'+next_id).fadeIn(1000);
	$('#panel-title').html($('#'+ icon).html()+ $('#'+ divid).html());
 }
 function _prev_page(next_id) {
	$('#account_settings_id,#account_detail,#channge_password').hide();
	 $('#'+next_id).fadeIn(1000);
	 $('#panel-title').html('<i class="bi-gear"></i> </span id="app_text"> APP SETTINGS')
 }

 function _alert_close(){
	$('#get-more-div').fadeOut(300);
 }


 function _collapse(div_id){
	var x = document.getElementById(div_id+"num");
	  if (x.innerHTML === '&nbsp;<i class="bi-plus"></i>&nbsp;') {
		  x.innerHTML = '&nbsp;<i class="bi-dash"></i>&nbsp;';
		  //$('#'+div_id).addClass('active-faq');
	  }else{
		x.innerHTML = '&nbsp;<i class="bi-plus"></i>&nbsp;';
		//  $('#'+div_id).removeClass('active-faq');
	  }
	$('#'+div_id+'answer').slideToggle('slow');
}


 ///// accept number ////
 function isNumber_Check(){
	var e = window.event;
	var key = e.keyCode && e.which;
 
	 if(!((key>=48) && (key<=57) || (key==43) || (key==45))){
	   if(e.preventDefault){
		  e.preventDefault();
		  $('#mobile_info').fadeIn(300); 
		 document.getElementById('reg_mobile','updt_mobile').style.border='#F00 1px solid';
	   }else{
		 e.returnValue = false;
	   }
	 }else{
	   $('#mobile_info').fadeOut(300); 
	   document.getElementById('reg_mobile','updt_mobile').style.border='rgba(0, 0, 0, .1) 1px solid';
	}
 }


function _get_active_link(divid){
	$('#dashboard, #admin, #user, #exam, #subject, #blogs, #faqs').removeClass('active-li');
	$('#'+divid).addClass('active-li');
	$('#_'+divid).addClass('active-li');
	$('#page-title').html($('#_'+ divid).html());
}

function _get_page(page,divid){
	_get_active_link(divid);
	   $('#page-content').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
	   var action='get_page';
	   var dataString = 'action='+action+'&page='+page;
		  $.ajax({
		  type: "POST",
		  url: admin_local_portal_url,
		  data: dataString,
		  cache: false,
		  success: function(html){
			 $('#page-content').html(html); 
		  }
	});
 }



 function _get_form(page){
	   $('#get-more-div').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
	   var action='get_form';
	   var dataString = 'action='+action+'&page='+page;
		  $.ajax({
		  type: "POST",
		  url: admin_local_portal_url,
		  data: dataString,
		  cache: false,
		  success: function(html){
			 $('#get-more-div').html(html);   
		  }
	});
 }


 function _get_form_with_id(page,ids){
    $('#get-more-div').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
    var action='get_form_with_id';
    var dataString ='action='+ action+'&page='+ page +'&ids='+ ids;
    $.ajax({
    type: "POST",
    url: admin_local_portal_url,
    data: dataString,
    cache: false,
    success: function(html){
        $('#get-more-div').html(html);}
    });
}




	$(function(){
	  exam_pix = {
	  UpdatePreview: function(obj){
		  // if IE < 10 doesn't support FileReader
		  if(!window.FileReader){
			  // don't know how to proceed to assign src to image tag
		  } else {
			  var reader = new FileReader();
			  var target = null;
   
			  reader.onload = function(e) {
			  target =  e.target || e.srcElement;
				  $('#exam-pix').prop("src", target.result);
			  };
			  reader.readAsDataURL(obj.files[0]);
		  }
	  }
	  };
   });




	function _get_staff_login(staff_id){ 
		var action='fetch_staff_api';
		$('#login_user_fullname,#login_user_login_time').html('XXXXX');
		var dataString ='action='+action+'&staff_id='+staff_id;  
		$.ajax({
		type: "POST",
		url: api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function(info){
			var fetch=info.data;
			var fullname =fetch.fullname;
			var mobile =fetch.mobile;
			var role_name =fetch.role_name;
			var updated_time =fetch.updated_time;
			var passport =fetch.passport;
			$('#login_user_fullname,#profile_name,#header_profile_name').html(fullname);	
			$('#user_id').html(staff_id);
			$('#header_role_name').html(role_name);		
			$('#user_mobile').html(mobile);			
			$('#login_user_login_time').html(updated_time);
			_get_header_pix(passport); 
		}
		});
	}

	function _get_header_pix(passport){ 
		var header_pix='';
		if (passport==''){
			header_pix = '<img src="'+website_url+'/uploaded_files/staff_pix/friends.png" id="passportimg1" alt="profile picture" />'+
						'<img src="'+website_url+'/uploaded_files/staff_pix/friends.png" id="passportimg2" alt="profile picture" />'
		}else {
			header_pix = '<img src="'+website_url+'/uploaded_files/staff_pix/'+passport+'" id="passportimg1" alt="profile picture" />'
						'<img src="'+website_url+'/uploaded_files/staff_pix/'+passport+'" id="passportimg2" alt="profile picture" />'
		}              
		$('#header_pix,#toggle_header_pix').html(header_pix);
	}
	


	function _get_select_status(select_id,status_id){  
		var action='fetch_status_api';
		var dataString ='action='+ action+'&status_id='+ status_id;
		$.ajax({
		type: "POST",
		url: api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function(info){
		var result= info.result;
		var message= info.message;
		var fetch= info.data;
		var text = '';
		
			  if(result==true){
					for (var i = 0; i < fetch.length; i++) {
					   var status_id =fetch[i].status_id;
					   var status_name =fetch[i].status_name;
					   /// for status update profile loop option ////
					   text += '<option value="'+status_id+'" >'+status_name.toUpperCase()+'</option>';    
					}
			  }else{
				 text='<option>'+message+'</option>';
			  }   
			  $('#'+select_id).append(text);

		   }
	 });
   }


	
   function _get_select_role(select_id, role_id){  
	var action='fetch_role_api';

	var dataString ='action='+ action+'&role_id='+ role_id;
	$.ajax({
	type: "POST",
	url: api,
	dataType: 'json',
	data: dataString,
	cache: false,
	success: function(info){
	   var result= info.result;
	   var message= info.message;
	   var fetch= info.data;
	   var text ='';
	  
	  if(result==true){
			for (var i = 0; i < fetch.length; i++) {
			   var role_id =fetch[i].role_id;
			   var role_name =fetch[i].role_name;
			  /// for role update profile loop option ////
			  text += '<option value="'+role_id+'">'+role_name.toUpperCase()+'</option>';
			}
		  }else{
			 text='<option value="" >'+message+' </option>';
		  }
		  $('#'+select_id).append(text);
		}
	});
	}


	function _add_staff(staff_id){
		var action='add_or_update_staff_api';
	
		   var fullname=$('#reg_fullname').val();
		   var email=$('#reg_email').val();
		   var mobile=$('#reg_mobile').val();
		   var address=$('#reg_address').val();
		   var role_id=$('#reg_role_id').val();
		   var status_id=$('#reg_status_id').val();
			 
   			$('#reg_fullname, #reg_email, #reg_mobile, #reg_address, #reg_role_id, #reg_status_id').removeClass('complain');

		   if(fullname==''){
			  $('#reg_fullname').addClass('complain');
			  $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> FULLNAME ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
		
			} else if ((email=='')||($('#reg_email').val().indexOf('@')<=0)){
				$('#reg_email').addClass('complain');
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Fill Correct Email To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
			
			} else if(mobile==''){
					$('#reg_mobile').addClass('complain');
					$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> MOBILE ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
				
			} else if(address==''){
				$('#reg_address').addClass('complain');
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ADDRESS ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
			
			} else if(role_id==''){
				$('#reg_role_id').addClass('complain');
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ROLE NAME ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
			
			} else if(status_id==''){
				$('#reg_status_id').addClass('complain');
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> STATUS NAME ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
			
			}else{

			  $('#reg_fullname, #reg_email, #reg_mobile, #reg_address, #reg_role_id, #reg_status_id').removeClass('complain');
		
			  var btn_text=$('#submit_btn').html();
			  $('#submit_btn').html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...');
			  document.getElementById('submit_btn').disabled=true;
		
		  
		   var dataString ='action='+action+'&staff_id='+staff_id+'&fullname='+fullname+'&email='+email+'&mobile='+mobile+'&address='+address+'&role_id='+role_id+'&status_id='+status_id;
		   $.ajax({
			  type: "POST",
			  url: api,
			  dataType: 'json',
			  data: dataString,
			  cache: false,
			  success: function(info){
				 var result = info.result;
				 var message1 = info.message1;
				 var message2 = info.message2;
				 if (result==true){
					   $('#success-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(5000).fadeOut(100);
					   _alert_close();
					   _get_page('view_staff','admin');
					
				 }else{
					$('#reg_email').addClass('complain');
					$('#warning-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(3000).fadeOut(100);
				 }
				 $('#submit_btn').html(btn_text);
				 document.getElementById('submit_btn').disabled=false;
			  }
		   });
		}
	
	}
		


	function _get_fetch_all_staff(){
		var action='fetch_staff_api';
		var search_txt=$('#search_txt').val();
		var status_id=$('#status_id').val();
		if((search_txt.length>3)||(search_txt=='')){

		var dataString ='action='+action+'&status_id='+status_id+'&search_txt='+search_txt; 
		   $.ajax({
			  type: "POST",
			  url: api,
			  data: dataString,
			  dataType: 'json',
			  cache: false,
			  success: function(info){
				 var fetch= info.data;
				 var result=info.result;
				 var message=info.message;

				 var text = '';

				 if (result==true ){
					for (var i = 0; i < fetch.length; i++) {
					   var staff_id =fetch[i].staff_id;
					   var fullname =fetch[i].fullname;
					   var mobile =fetch[i].mobile;
					   var status_name =fetch[i].status_name;
					   var passport =fetch[i].passport;
					  
					   text +=
							'<div class="user-div" title="View Profile" onclick="_get_form_with_id('+"'staff_profile'"+','+"'"+staff_id+"'"+')">'+
								'<div class="pix-div"><img src="'+website_url+'/uploaded_files/staff_pix/'+passport+'"/></div>'+
								'<div class="detail">'+
								 	'<div class="name-div"><div class="name">'+fullname.toUpperCase()+'</div><hr /><br/></div>'+
									'<div class="text">ID:'+staff_id+'</div>'+
									'<div class="text">'+mobile+'</div>'+
									'<div class="active">'+status_name+'</div>'+
								'</div>'+
								'<br clear="all"/>'+
							'</div>';
						 
						  $('#fetch').html(text); 
					   }
					   }else{
					   text += 
						  	'<div class="false-notification-div">'+
								'<p> '+message+' </p>'+
								'<button class="btn" onclick="_get_form('+"'staff_reg'"+')"><i class="bi-person-plus"></i>ADD NEW ADMIN/STAFF</button>'+
							'</div>'; 
						  $('#fetch').html(text); 
					  }
						  
			  }
		   });  
		}else{
			text += 
				'<div class="false-notification-div">'+
					'<p> '+message1+' </p>'+
					'<button class="btn" onclick="_get_form('+"'staff_reg'"+')"><i class="bi-person-plus"></i>ADD NEW ADMIN/STAFF</button>'+
				'</div>'; 
				$('#fetch').html(text);
		}
  	}


	

	function _get_staff_profile(staff_id){ 
		var action='fetch_staff_api';
		var dataString ='action='+ action+'&staff_id='+ staff_id;
	$.ajax({
		type: "POST",
		url: api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function(info){
			var result = info.result;

			if(result==true){
				var data=info.data
					var fullname = data.fullname.toUpperCase();
					var mobile = data.mobile;
					var email = data.email;
					var address = data.address;
					var passport = data.passport;
					if(passport==''){
						passport='friends.png';
					}

					var role_id = data.role_id;
					var role_name = data.role_name;
					var status_id = data.status_id;
					var status_name = data.status_name;
					var created_time = data.created_time;
					var last_login = data.last_login;
					
					$('#staff_login_fullname').html(fullname);
					$('#staff_last_login').html(last_login); 
					$('#staff_status_name').html(status_name);
					$('#current_user_passport1').html('<img src="'+website_url+'/uploaded_files/staff_pix/'+passport+'" id="passportimg4" alt="profile picture"/>');
					$('#current_user_passport2').html('<img src="'+website_url+'/uploaded_files/staff_pix/'+passport+'" id="passportimg3" alt="profile picture"/>');
					
					$('#updt_fullname').val(fullname)
					$('#updt_mobile').val(mobile)
					$('#updt_email').val(email)
					$('#updt_address').val(address)
					$('#updt_status_id').append('<option value="'+status_id+'" selected="selected">'+status_name+'</option>');
					$('#updt_role_id').append('<option value="'+role_id+'" selected="selected">'+role_name+'</option>');
					$('#staff_id').val(staff_id)
					$('#created_time').val(created_time)
					$('#last_login').val(last_login)
			}
		}
	});
}

		
 
 
	function _update_staff_profile(staff_id){
	
	var fullname=$('#updt_fullname').val();
	var email=$('#updt_email').val();
	var mobile=$('#updt_mobile').val();
	var address=$('#updt_address').val();
	var role_id=$('#updt_role_id').val();
	var status_id=$('#updt_status_id').val();

	$('#updt_fullname, #updt_email, #updt_mobile, #updt_address, #updt_role_id, #updt_status_id').removeClass('complain');
 
	if(fullname==''){
	   $('#updt_fullname').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> FULLNAME ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if ((email=='')||($('#updt_email').val().indexOf('@')<=0)){
	   $('#updt_email').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
 
	}else if (mobile==''){
	   $('#updt_mobile').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> MOBILE ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
	
	}else if(address==''){
	   $('#updt_address').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ADDRESS ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

	}else if(role_id==''){
	   $('#updt_role_id').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ROLE ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

	}else if(status_id==''){
	   $('#updt_status_id').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
	   
	}else{

	   $('#updt_fullname, #updt_email, #updt_mobile, #updt_address, #updt_role_id, #updt_status_id').removeClass('complain');
	
	
	if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")){
	   var btn_text=$('#update_btn').html();
	   $('#update_btn').html('<i class="fa fa-spinner fa-spin"></i> UPDATING');
	   document.getElementById('update_btn').disabled=true;

	var action='add_or_update_staff_api';
	var form_data = new FormData();                  
	form_data.append('action', action);
	form_data.append('staff_id', staff_id);
	form_data.append('fullname', fullname);
	form_data.append('email', email);
	form_data.append('mobile', mobile);
	form_data.append('address', address);
	form_data.append('role_id', role_id);
	form_data.append('status_id', status_id);

	$.ajax({
	type: "POST",
	url: api,
	data: form_data,
	dataType: 'json',
	contentType: false,
	cache: false,
	processData:false,
		success: function(info){
		  var result = info.result;
		  var message1 = info.message1;
		  var message2 = info.message2;
		  if (result==true){
			$('#success-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(5000).fadeOut(100);
			 _get_page('view_staff','admin');
		}else{
			 $('#updt_email').addClass('complain');
			 $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
		  }
		  $('#update_btn').html(btn_text);
		  document.getElementById('update_btn').disabled=false;
	   }
	
	});
	}
 }
}




function _upload_staff_pix_(staff_id){
	$(function(){
		Test = {
			UpdatePreview: function(obj){
			// if IE < 10 doesn't support FileReader
			if(!window.FileReader){
				// don't know how to proceed to assign src to image tag
			} else {
				_upload_profile_pix(staff_id);
				var reader = new FileReader();
				var target = null;
	
				reader.onload = function(e) {
				target =  e.target || e.srcElement;
				$("#passportimg4").prop("src", target.result);
				};
				reader.readAsDataURL(obj.files[0]);
			}
			}
		};
		});
	
 }

 function _upload_pix_(staff_id){
	$(function(){
		Staff = {
			UpdatePreview: function(obj){
			// if IE < 10 doesn't support FileReader
			if(!window.FileReader){
				// don't know how to proceed to assign src to image tag
			} else {
				_upload_profile_pix(staff_id);
				var reader = new FileReader();
				var target = null;
	
				reader.onload = function(e) {
				target =  e.target || e.srcElement;
				$("#passportimg1,#passportimg2,#passportimg3").prop("src", target.result);
				};
				reader.readAsDataURL(obj.files[0]);
			}
			}
		};
		});
	
 }


 function _upload_profile_pix(staff_id){
	var action='get_passport_api';
	if (staff_id==''){
	   // do nothing
	}else{
		var file_data = $('#passport').prop('files')[0];
	 if (file_data==''){}else{ 
	   var form_data = new FormData();                  
	   form_data.append('action', action);
	   form_data.append('passport', file_data);
	   form_data.append('staff_id', staff_id);
 
	   $.ajax({
		   url: api,
		   type: "POST",
		   data: form_data,
		   contentType: false,
		   cache: false,
		   processData:false,
		   success: function(data){
			  var db_passport = data.db_passport;
			  _unlink_pix_file(staff_id,db_passport);
			//  move_file(db_passport);
		}
	   });
	 }
	}
   
 }
 
 
 
 
 function  _unlink_pix_file(staff_id,db_passport){
	var action = 'unlink_passport';
	var passport_pix= $('#passport').prop('files')[0];
 
	var form_data = new FormData();   
	form_data.append('action', action);
	form_data.append('db_passport', db_passport);
	form_data.append('db_passport', passport_pix);
 
	$.ajax({
		url: admin_local_portal_url,
		type: "POST",
		data: form_data,
		contentType: false,
		cache: false,
		processData:false,
		success: function(html){             
		  _upload_pix_file(staff_id);
		}
	});
   
 }
 
 
 
 function  _upload_pix_file(staff_id){
	var action = 'upload_passport_api';
	var passport_pix= $('#passport').prop('files')[0];
 
	var form_data = new FormData();  
	form_data.append('action', action); 
	form_data.append('staff_id', staff_id);
	form_data.append('passport', passport);
	form_data.append('passport', passport_pix);
 
	
	$.ajax({
		url: api,
		type: "POST",
		data: form_data,
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  var message1 = data.message1;
		  var message2 = data.message2;
		  var passport = data.passport;
		  _get_pix(message1,message2,passport);
		}
	});
   
 }
 
 
 function _get_pix(message1,message2,passport){
	var action = 'upload_pix_file';
 
	var passport_pix= $('#passport').prop('files')[0];
	var form_data = new FormData();   
	form_data.append('action', action);
	form_data.append('passport', passport);
	form_data.append('passport', passport_pix);
 
	$.ajax({
	   url: admin_local_portal_url,
	   type: "POST",
	   data: form_data,
	   contentType: false,
	   cache: false,
	   processData:false,
	   success: function(html){             
		$('#success-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(5000).fadeOut(100);
		_get_page('view_staff','admin');
	   }
	});
 
 }
 
 
 
	









 function _add_user(user_id){
	var action='add_or_update_user_api';

	   var fullname=$('#reg_fullname').val();
	   var email=$('#reg_email').val();
	   var mobile=$('#reg_mobile').val();
	   var address=$('#reg_address').val();
	   var status_id=$('#reg_status_id').val();
		 
		$('#reg_fullname, #reg_email, #reg_mobile, #reg_address, #reg_status_id').removeClass('complain');

	   if(fullname==''){
		  $('#reg_fullname').addClass('complain');
		  $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> FULLNAME ERROR!<br /><span>Check FULLNAME And Try Again</span>').fadeIn(500).delay(3000).fadeOut(100);
	
		} else if ((email=='')||($('#reg_email').val().indexOf('@')<=0)){
			$('#reg_email').addClass('complain');
			$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Check EMAIL And Try Again</span>').fadeIn(500).delay(3000).fadeOut(100);
		
		} else if(mobile==''){
				$('#reg_mobile').addClass('complain');
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> MOBILE ERROR!<br /><span>Check MOBILE And Try Again</span>').fadeIn(500).delay(3000).fadeOut(100);
			
		} else if(address==''){
			$('#reg_address').addClass('complain');
			$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ADDRESS ERROR!<br /><span>Check ADDRESS And Try Again</span>').fadeIn(500).delay(3000).fadeOut(100);
		
		} else if(status_id==''){
			$('#reg_status_id').addClass('complain');
			$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> STATUS NAME ERROR!<br /><span>Check STATUS NAME And Try Again</span>').fadeIn(500).delay(3000).fadeOut(100);
		
		}else{

		  $('#reg_fullname, #reg_email, #reg_mobile, #reg_address, #reg_status_id').removeClass('complain');
	
		  var btn_text=$('#submit_btn').html();
		  $('#submit_btn').html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...');
		  document.getElementById('submit_btn').disabled=true;
	
	  
	   var dataString ='action='+action+'&user_id='+user_id+'&fullname='+fullname+'&email='+email+'&mobile='+mobile+'&address='+address+'&status_id='+status_id;
	   $.ajax({
		  type: "POST",
		  url: api,
		  dataType: 'json',
		  data: dataString,
		  cache: false,
		  success: function(info){
			 var result = info.result;
			 var message1 = info.message1;
			 var message2 = info.message2;
			 if (result==true){
				   $('#success-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(5000).fadeOut(100);
				   _alert_close();
				   _get_page('active_users','admin');
				
			 }else{
				$('#reg_email').addClass('complain');
				$('#warning-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(3000).fadeOut(100);
			 }
			 $('#submit_btn').html(btn_text);
			 document.getElementById('submit_btn').disabled=false;
		  }
	   });
	}

}




function _get_fetch_all_user(){
	var action='fetch_user_api';
	var search_txt=$('#search_txt').val();
	var status_id=$('#status_id').val();
	if((search_txt.length>3)||(search_txt=='')){


	var dataString ='action='+action+'&status_id='+status_id+'&search_txt='+search_txt; 
	   $.ajax({
		  type: "POST",
		  url: api,
		  data: dataString,
		  dataType: 'json',
		  cache: false,
		  success: function(info){
			 var fetch= info.data;
			 var result=info.result;
			 var message=info.message;

			 var text = '';

			 if (result==true ){
				for (var i = 0; i < fetch.length; i++) {
				   var user_id =fetch[i].user_id;
				   var fullname =fetch[i].fullname;
				   var mobile =fetch[i].mobile;
				   var status_name =fetch[i].status_name;
				   var passport =fetch[i].passport;
				  
				   text +=
						'<div class="user-div" title="View Profile" onclick="_get_form_with_id('+"'user_profile'"+','+"'"+user_id+"'"+')">'+
							'<div class="pix-div"><img src="'+website_url+'/uploaded_files/staff_pix/'+passport+'"/></div>'+
							'<div class="detail">'+
								 '<div class="name-div"><div class="name">'+fullname.toUpperCase()+'</div><hr /><br/></div>'+
								'<div class="text">ID:'+user_id+'</div>'+
								'<div class="text"> '+mobile+' </div>'+
								'<div class="active"> '+status_name+' </div>'+
							'</div>'+
							'<br clear="all"/>'+
						'</div>';
					 
					  $('#fetch_user').html(text); 
				   }
				   }else{
				   text += 
						  '<div class="false-notification-div">'+
							'<p> '+message+' </p>'+
							'<button class="btn" onclick="_get_form('+"'user_reg'"+')"><i class="bi-person-plus"></i>ADD NEW USER</button>'+
						'</div>'; 
					  $('#fetch_user').html(text); 
				  }
					  
		  }
	   });  
	}else{
		text += 
			'<div class="false-notification-div">'+
				'<p> '+message1+' </p>'+
				'<button class="btn" onclick="_get_form('+"'user_reg'"+')"><i class="bi-person-plus"></i>ADD NEW USER</button>'+
			'</div>'; 
			$('#fetch_user').html(text);
	}
  }




  function _get_user_profile(user_id){ 
	var action='fetch_user_api';
	var dataString ='action='+ action+'&user_id='+ user_id;
	$.ajax({
	type: "POST",
	url: api,
	data: dataString,
	dataType: 'json',
	cache: false,
	success: function(info){
		var result = info.result;

		if(result==true){
			var data=info.data
				var user_id = data.user_id;
				var fullname = data.fullname.toUpperCase();
				var mobile = data.mobile;
				var email = data.email;
				var address = data.address;
				var passport = data.passport;
				if(passport==''){
					passport='friends.png';
				}

				var status_id = data.status_id;
				var status_name = data.status_name;
				var created_time = data.created_time;
				var last_login = data.last_login;
				
				$('#user_login_fullname').html(fullname);
				$('#user_last_login').html(last_login); 
				$('#user_status_name').html(status_name);
				$('#current_user_passport1').html('<img src="'+website_url+'/uploaded_files/staff_pix/'+passport+'" id="passportimg4" alt="profile picture"/>');
				
				$('#updt_fullname').val(fullname);
				$('#updt_mobile').val(mobile);
				$('#updt_email').val(email);
				$('#updt_address').val(address);
				$('#updt_status_id').append('<option value="'+status_id+'" selected="selected">'+status_name+'</option>');
				$('#users_id').val(user_id);
				$('#created_time').val(created_time);
				$('#last_login').val(last_login);
		}
	}
});
}

  


function _update_user_profile(user_id){
	
	var fullname=$('#updt_fullname').val();
	var email=$('#updt_email').val();
	var mobile=$('#updt_mobile').val();
	var address=$('#updt_address').val();
	var status_id=$('#updt_status_id').val();

	$('#updt_fullname, #updt_email, #updt_mobile, #updt_address, #updt_role_id, #updt_status_id').removeClass('complain');
 
	if(fullname==''){
	   $('#updt_fullname').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> FULLNAME ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if ((email=='')||($('#updt_email').val().indexOf('@')<=0)){
	   $('#updt_email').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
 
	}else if (mobile==''){
	   $('#updt_mobile').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> MOBILE ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
	
	}else if(address==''){
	   $('#updt_address').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ADDRESS ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

	}else if(status_id==''){
	   $('#updt_status_id').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
	   
	}else{

	   $('#updt_fullname, #updt_email, #updt_mobile, #updt_address, #updt_status_id').removeClass('complain');
	
	
	if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")){
	   var btn_text=$('#update-user-btn').html();
	   $('#update-user-btn').html('<i class="fa fa-spinner fa-spin"></i> UPDATING');
	   document.getElementById('update-user-btn').disabled=true;

	var action='add_or_update_user_api';
	var form_data = new FormData();                  
	form_data.append('action', action);
	form_data.append('user_id', user_id);
	form_data.append('fullname', fullname);
	form_data.append('email', email);
	form_data.append('mobile', mobile);
	form_data.append('address', address);
	form_data.append('status_id', status_id);

	$.ajax({
	type: "POST",
	url: api,
	data: form_data,
	dataType: 'json',
	contentType: false,
	cache: false,
	processData:false,
		success: function(info){
		  var result = info.result;
		  var message1 = info.message1;
		  var message2 = info.message2;
		  if (result==true){
			$('#success-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(5000).fadeOut(100);
			 _get_page('active_users','admin');
		}else{
			 $('#updt_email').addClass('complain');
			 $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
		  }
		  $('#update-user-btn').html(btn_text);
		  document.getElementById('update-user-btn').disabled=false;
	   }
	
	});
	}
 }
}





function _add_and_update_subject(subject_id){
	
	var subject_name=$('#subject_name').val();
	var subject_summary=$('#subject_summary').val();
	var status_id=$('#reg_status_id').val();

	var subject_picture= $('#subject_passport').val();
	var new_subject_pix= $('#subject_passport').prop('files')[0];

	$('#subject_name, #subject_summary, #status_id').removeClass('complain');
 
	if(subject_name==''){
	   $('#subject_name').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> FULLNAME ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
	
	}else if(subject_summary==''){
	   $('#subject_summary').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> ADDRESS ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);

	}else if(status_id==''){
	   $('#reg_status_id').addClass('complain');
	   $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Fill Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
	   
	}else{
		
	$('#subject_name, #subject_summary, #reg_status_id').removeClass('complain');
	
	if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")){
	   var btn_text=$('#submit_btn').html();
	   $('#submit_btn').html('<i class="fa fa-spinner fa-spin"></i> UPDATING');
	   document.getElementById('submit_btn').disabled=true;

	var action='add_or_update_subject_api';

	var form_data = new FormData();   
	form_data.append('action', action);
	form_data.append('subject_id', subject_id);
	form_data.append('subject_name', subject_name);
	form_data.append('subject_summary', subject_summary);
	form_data.append('status_id', status_id);		
	form_data.append('subject_picture', subject_picture);
	form_data.append('subject_picture', new_subject_pix);

	$.ajax({
	type: "POST",
	url: api,
	data: form_data,
	dataType: 'json',
	contentType: false,
	cache: false,
	processData:false,
		success: function(data){
		var result = data.result;
		var message1 = data.message1;
		var message2 = data.message2;
		var subject_picture = data.subject_picture;
		  if (result==true){
			if(subject_picture!=''){
				_upload_pix(message1,message2,subject_picture);
			}else{		
			$('#success-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(5000).fadeOut(100);
			_alert_close(); 
			_get_page('all_subject','all_subject','all_subject','');
			}
			}else{
				$('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> '+message1+' <br /><span> '+message2+' </span>').fadeIn(500).delay(5000).fadeOut(100);
			}
		  $('#submit_btn').html(btn_text);
		  document.getElementById('submit_btn').disabled=false;
	   }
	
	});
	}
 }
 
}




	function  _upload_pix(message1,message2,subject_picture){
		var action = 'upload_pix';
		var new_subject_pix= $('#subject_passport').prop('files')[0];
		var form_data = new FormData();   
		form_data.append('action', action);
		form_data.append('subject_picture', subject_picture);
		form_data.append('subject_picture', new_subject_pix);
		$.ajax({
			url: admin_local_portal_url,
			type: "POST",
			data: form_data,
			contentType: false,
			cache: false,
			processData:false,
			success: function(html){
				$('#success-div').html('<div><i class="bi-check"></i></div> '+message1+' <br> '+message2+' ').fadeIn(500).delay(5000).fadeOut(100);
				_alert_close(); 
				_get_page('all_subject','all_subject','all_subject','');
			}
		});
	}





	

	function _get_fetch_all_subject(){
		var action='fetch_subject_api';
		var search_txt=$('#search_txt').val();
		var status_id=$('#status_id').val();
		if((search_txt.length>3)||(search_txt=='')){

	
		var dataString ='action='+action+'&status_id='+status_id+'&search_txt='+search_txt; 
		   $.ajax({
			  type: "POST",
			  url: api,
			  data: dataString,
			  dataType: 'json',
			  cache: false,
			  success: function(info){
				 var fetch= info.data;
				 var result=info.result;
				 var message=info.message;

				 var text = '';

				 if (result==true ){
					for (var i = 0; i < fetch.length; i++) {
					   var subject_id =fetch[i].subject_id;
					   var subject_name =fetch[i].subject_name;
					   var status_name =fetch[i].status_name;
					   var subject_passport =fetch[i].subject_passport;
					   if(subject_passport==''){
						subject_passport='logo.jpg';
						}
					   text +=
							'<div class="grid-div">'+
								'<div class="div-in">'+
									'<div class="image-div">'+
										'<img src="'+website_url+'/uploaded_files/subject_pix/'+subject_passport+'" id="exam-pix" alt="'+subject_name+'"/>'+                        
									'</div>'+
									'<div class="ACTIVE">'+status_name+'</div>'+
									'<div class="info-div">'+
										'<h2>'+subject_name+'</h2>'+ 
										'<hr></hr>'+
										'<div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>'+
										'<button class="btn" title="EDIT" onclick="_get_form_with_id('+"'add_and_update_subject'"+','+"'"+subject_id+"'"+')"><i class="bi-pencil-square"></i> EDIT</button>'+
									'</div>'+     
								'</div>'+                          
							'</div>'; 
						 
						  $('#fetch_subject').html(text); 
					   }
					   }else{
					   text += 
						  	'<div class="false-notification-div">'+
								'<p> '+message+' </p>'+
								'<button class="btn" onclick="_get_form('+"'subject_reg'"+')"><i class="bi-person-plus"></i>ADD NEW SUBJECT</button>'+
							'</div>'; 
						  $('#fetch_subject').html(text); 
					  }
						  
			  }
		   });  
		}else{
			text += 
				'<div class="false-notification-div">'+
					'<p> '+message1+' </p>'+
					'<button class="btn" onclick="_get_form('+"'subject_reg'"+')"><i class="bi-person-plus"></i>ADD NEW SUBJECF</button>'+
				'</div>'; 
				$('#fetch_subject').html(text);
		}
  	}




	  function _fetch_each_subject(subject_id){ 
		var action='fetch_subject_api';
		var dataString ='action='+action+'&subject_id='+subject_id;  
		$.ajax({
		   type: "POST",
		   url: api,
		   data: dataString,
		   dataType: 'json',
		   cache: false,
		   success: function(info){
			var fetch=info.data;
			var subject_name =fetch.subject_name;
			var subject_summary =fetch.subject_summary;
			var status_id =fetch.status_id;
			var subject_passport =fetch.subject_passport;

		
			$('#subject_name').val(subject_name);
			$('#subject_names').val(subject_name);
			$('#subject_summary').val(subject_summary);   
			$('#reg_status_id').val(status_id);  
			_get_viewpix(subject_passport);  
		   }   
		});
	}
	
	
	function _get_viewpix(subject_passport){ 
		var view_pix=''; 
		if (subject_passport==''){              
			view_pix = '<img src="'+website_url+'/uploaded_files/subject_pix/default.png" id="exam-pix" alt="profile picture" />'
		}else {
			view_pix = '<img src="'+website_url+'/uploaded_files/subject_pix/'+subject_passport+'" id="exam-pix" alt="profile picture" />'
		}      
		$('#view_pix').html(view_pix);
	}
	  
	             

	

	
