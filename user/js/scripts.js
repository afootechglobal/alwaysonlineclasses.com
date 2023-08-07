//////////////////////////////13/8/2019////////////////////////// by Afolabi Oluwagbnega Sunday

function _open_menu(){
	   $('#menu-back-div').animate({'left':'0px'},200);
	   $('#menu-list-div').animate({'left':'0px'},400);
}
function _close_menu(){
	   $('#menu-back-div').animate({'left':'-100%'},400);
	   $('#menu-list-div').animate({'left':'-230px'},200);
}


/*$(document).ready(function() {
		window.setInterval(function(){
			get_notification_number();
		},30000);
});
*/
	function get_notification_number(){
		var action='get_notification_number';
		var dataString ='action='+ action;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			dataType: 'json',
			cache: false,
			success: function(data){
 	var scheck = data.check;
	if (scheck>0){
		if (scheck>9){var scheck='9+';}
		$('.notification').html('<i class="fa fa-bell-o"></i><div>'+scheck+'</div>');
	}else{
		$('.notification').html('<i class="fa fa-bell-o"></i>');
	}
				}
		});

	}




function _toggle_profile_pix_div(){
	   $('.toggle-profile-div').toggle('slow');
}









function alert_close(){
		$('#get-more-div').html('').fadeOut(200);
}
function alert_secondary_close(){
		$('#get-more-div-secondary').html('').fadeOut(200);
}

function _get_active_link(divid){
		if(divid=='dashboard'){
			 $('#user-desc').fadeIn(500);
		}else{
			 $('#user-desc').hide();
		}
		 $('#sdashboard, #myprofile, #active-users').removeClass('active-li');
		 $('#dashboard, #sactive-users, #suspended-users').removeClass('active-li');
		 $('#active_properties,#sold_properties,#completed_properties,#pending_properties').removeClass('active-li');
		 $('#news_letter').removeClass('active-li');
		 $('#'+divid).addClass('active-li');
		 $('#s'+divid).addClass('active-li');
		 $('#page-title').html($('#'+divid).html());
}
function _open_li(ids){
		 $('#'+ids+'-sub-li').toggle('slow');
}

function _get_page(page, divid){
		 _get_active_link(divid);
		$('#page-content').html('<div class="ajax-loader">Loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
			var action='get-page';
			var dataString ='action='+ action+'&page='+ page;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){
				$('#page-content').html(html);
				if((page=='wallet_report')||(page=='my_exams')){
					 alert_close()
				}
				}
			});
}

function _get_form(page){
		$('#get-more-div').html('<div class="ajax-loader">Loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			var action='get-form';
			var dataString ='action='+ action+'&page='+ page;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){$('#get-more-div').html(html);}
			});
}
function _get_form_with_id(page,ids){
		$('#get-more-div').html('<div class="ajax-loader">Loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			var action='get-form-with-id';
			var dataString ='action='+ action+'&page='+ page+'&ids='+ ids;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){$('#get-more-div').html(html);}
			});
}

function _get_secondary_form_with_id(action,ids){
		$('#get-more-div-secondary').html('<div class="ajax-loader">Loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			var dataString ='action='+ action+'&ids='+ ids;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){$('#get-more-div-secondary').html(html);}
			});
}



function select_search(){
		$('.srch-select').toggle('fast');
};
function srch_custom(text){
		$('#srch-text').html(text);
		$('.custom-srch-div').fadeIn(500);
};



function get_alert_report(id,action,view_report){
		$('#srch-text').html($('#'+id).html());
		$('.custom-srch-div').fadeOut(500);
		$('.system-alert-div').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>');
			var dataString ='action='+ action+'&view_report='+ view_report;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){
				$('.system-alert-div').html(html);
				}
		});
	}
	
function _fetch_custom_alert_report(action,view_report){
		var datefrom=$('#datepicker-from').val();
		var dateto=$('#datepicker-to').val();
			if((datefrom=='')||(dateto=='')){
$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> Search Date Fields Empty<br /><span>Please fill all the feilds</span>').fadeIn(500).delay(5000).fadeOut(100);
			}else{
		$('.system-alert-div').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>');
			var dataString ='action='+ action+'&datefrom='+datefrom+'&dateto='+dateto+'&view_report='+ view_report;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){
				$('.system-alert-div').html(html);
				}
		});
			}
};


	function _fetch_random_alert_search(action){
		var view_report='random_search';
			var all_search_txt = $('#all_search_txt').val();
		$('.system-alert-div').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
			var dataString ='action='+ action+'&view_report='+ view_report+'&all_search_txt='+ all_search_txt;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){$('.system-alert-div').html(html);}
			});
	}

	function _read_alert(alert_id){	
		 $('#'+alert_id+'viewed').html('<i class="fa fa-check"></i><i class="fa fa-check"></i>');
		 $('#'+alert_id).addClass('system-alert alert-seen');

		$('#get-more-div').html('<div class="ajax-loader">Loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			var action='read_alert';
			var dataString ='action='+ action+'&alert_id='+ alert_id;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){$('#get-more-div').html(html);}
			});
	}































function _create_user(){
			var fullname = $('#fullname').val();
			var email = $('#email').val();
			var phone = $('#phone').val();
			var role_id = $('#role_id').val();
			var status_id = $('#status_id').val();
			if((fullname=='')||(email=='')||(phone=='')||(email.indexOf('@')<=0)){
		$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> Please Fill All Necessary Fields<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
			}else{
			if (confirm("Confirm!!\n\n Are you sure to REGISTER THIS ADMINISTRATOR?")){
		$('#create-user-btn').html('PROCESSING...');
			document.getElementById('create-user-btn').disabled=true;
			var action ='create_user';
			var dataString ='action='+ action+'&fullname='+ fullname+'&email='+ email+'&phone='+ phone+'&role_id='+ role_id+'&status_id='+ status_id;
			$.ajax({
				type: "POST",
				url: "config/code",
				data: dataString,
				dataType: 'json',
				cache: false,
				success: function(data){
				var scheck = data.check;
					if(scheck==1){
						if (status_id=='A'){
						_get_page('active-user-list', 'active-users');
						}else{
						_get_page('suspended-user-list', 'suspended-users');	
						}
						$('#success-div').html('<div><i class="fa fa-check"></i></div> NEW ADMINISTRATOR REGISTERED SUCCESSFULLY!').fadeIn(500).delay(5000).fadeOut(100);
						alert_close();
					}else{
						$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> Account Already Exist!<br><span> An acount with this email already exist</span>').fadeIn(500).delay(5000).fadeOut(100);
					}
						$('#create-user-btn').html('<i class="fa fa-check"></i> SUBMIT');
						document.getElementById('create-user-btn').disabled=false;
						
				}
			});
			}else{
				return false;
			}
			}
}


function _get_users_profile(users_id, divid){
			if(divid!=''){
				_get_active_link(divid);
			}
		$('#page-content').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
			var action='user-profile';
			var dataString ='action='+ action+'&users_id='+ users_id;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){$('#page-content').html(html);}
			});
}


$(function(){
    Test = {
        UpdatePreview: function(obj){
          // if IE < 10 doesn't support FileReader
          if(!window.FileReader){
             // don't know how to proceed to assign src to image tag
          } else {
			  _upload_profile_pix();
             var reader = new FileReader();
             var target = null;

             reader.onload = function(e) {
              target =  e.target || e.srcElement;
               $("#passportimg1,#passportimg2,#passportimg3,#passportimg4").prop("src", target.result);
             };
              reader.readAsDataURL(obj.files[0]);
          }
        }
    };
});


function _upload_profile_pix(){
		var action = 'update_profile_pix';
        var file_data = $('#passport').prop('files')[0];
		if (file_data==''){}else{ 
        var form_data = new FormData();                  
        form_data.append('passport', file_data);
        form_data.append('action', action);
        $.ajax({
            url: "config/code",
            type: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData:false,
            success: function(html){
		$('#success-div').html('<div><i class="fa fa-check"></i></div> Passport Updated Successfully').fadeIn(500).delay(5000).fadeOut(100);
            $('#passport').val('');
			}
        });
		}
}


///////////////change user password//////////////
function _update_user_password(userid){
 			$('.success-div').hide()
			var oldpass = $('#oldpass').val();
			var newpass = $('#newpass').val();
			var cnewpass = $('#cnewpass').val();
			if((oldpass=='')||(newpass=='')||(cnewpass=='')){
$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> Please Fill The Passwords<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
			}
			else if(newpass!=cnewpass){
$('#not-success-div').html('<div><i class="fa fa-close"></i></div>New Password Not Match<br /><span>Check the fields again</span>').fadeIn(500).delay(5000).fadeOut(100);
			}else{
		$('#update-user-password-btn').html('Updating...');
		var action ='update_user_password';
			var dataString ='action='+ action+'&userid='+ userid+'&oldpass='+ oldpass+'&newpass='+ newpass;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function(data){
		$('#update-user-password-btn').html('<i class="fa fa-refresh"></i> CHANGE PASSWORD ');
			var scheck = data.check;
				if(scheck==0){
$('#not-success-div').html('<div><i class="fa fa-close"></i></div> Incorrect Old Password <br /><span>The old password is not correct</span>').fadeIn(500).delay(5000).fadeOut(100);
				}else{
$('#success-div').html('<div><i class="fa fa-check"></i></div> Password Updated Successfully!<br /><span>Please Re-Login To Continue</span>').fadeIn(500).delay(5000).fadeOut(100);
				alert_close()
				}				
				}
			});
			}
}



function _update_user_profile(user_id){
			var fullname = $('#fullname').val();
			var email = $('#email').val();
			var phone = $('#phone').val();
			var role_id = $('#role_id').val();
			var status_id = $('#status_id').val();
			if((fullname=='')||(email=='')||(phone=='')||(email.indexOf('@')<=0)){
		$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> Please Fill All Necessary Fields<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
			}else{
			if (confirm("Confirm!!\n\n Are you sure to UPDATE?")){
		$('#update-user-btn').html('Updating...');
			document.getElementById('update-user-btn').disabled=true;
			var action ='update_users_profile';
			var dataString ='action='+ action+'&user_id='+ user_id+'&fullname='+ fullname+'&email='+ email+'&phone='+ phone+'&role_id='+ role_id+'&status_id='+ status_id;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function(data){
			var scheck = data.check;
			if(scheck==1){
				$('#success-div').html('<div><i class="fa fa-check"></i></div> User Profile Updated Successfully!').fadeIn(500).delay(5000).fadeOut(100);
				_get_users_profile(user_id,'myprofile');
			}else{
				$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> Email Error!<br><span> Email Cannot Be Use</span>').fadeIn(500).delay(5000).fadeOut(100);
			}
				$('#update-user-btn').html('Update <i class="fa fa-check"></i>');
				document.getElementById('update-user-btn').disabled=false;
				}
			});
			}else{
				return false;
			}
			}
	
}

	function _fetch_users_list(status_id){
			var all_search_txt = $('#all_search_txt').val();
		$('#search-content').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
			var action='fetch_users_list';
			var dataString ='action='+ action+'&all_search_txt='+ all_search_txt+'&status_id='+ status_id;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){$('#search-content').html(html);}
			});
	}















function isNumber(evt){
	evt=(evt) ? evt: window.event;
	var charcode=(evt.which) ? evt.which : evt.keyCode;
	if(charcode>31 && (charcode<46 || charcode>57)){
		return false;
	}
	return true;
}




function _add_property_pix(property_id){
			var action = 'upload_property_pix';
			var pro_pix = $('#property_pix').val();
			var property_pix = $('#property_pix').prop('files')[0];
		if (pro_pix==''){}else{ 
        $("#tap-to-upload").html('<div class="img"><img src="../../uploaded_files/property_pix/loading.gif" alt="Tap to upload"/></div>');
        var form_data = new FormData();                  
        form_data.append('property_id', property_id);
        form_data.append('property_pix', property_pix);
        form_data.append('action', action);
        $.ajax({
            url: "config/code",
            type: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData:false,
            success: function(html){
			  $('.property-pictures-div').html(html);
			}
        });
		}
		
}

function _delete_property_pix(sn,property_id){
	var action='delete_property_pix'
	  if (confirm("Confirm!!\n\n Are you sure to DELETE THIS PICTURE?")){
        $("#pix"+sn).html('<div class="img"><img src="../../uploaded_files/property_pix/loading.gif" alt="Loading"/></div>');
			  var dataString ='action='+ action+'&sn='+ sn+'&property_id='+ property_id;
			  $.ajax({
			  type: "POST",
			  url: "config/code",
			  data: dataString,
			  cache: false,
			  success: function(html){
				$('.property-pictures-div').html(html);
				  }
			  });
		  }else{
			  return false;
		  }
}


function _fetch_instagram_for_reg(){
	var property_embed_code = encodeURIComponent($('#property_embed_code').val());
		if(property_embed_code==''){
	$('#iframe').fadeOut(100);
		}else{
	$('#iframe').fadeIn(100);
		var action='fetch_instagram_for_reg';
		var dataString ='action='+ action+'&property_embed_code='+ property_embed_code;
		$.ajax({
		type: "POST",
		url: "config/code",
		data: dataString,
		cache: false,
		success: function(html){$('.iframe').html(html);}
		});
		}
}


	
function _create_property(){
	var building_name = $('#building_name').val();
	var property_mini_desc = $('#property_mini_desc').val();
	var property_location = $('#property_location').val();
	var property_starting_price = $('#property_starting_price').val();
	var property_instagram_url = encodeURIComponent($('#property_instagram_url').val());
	var property_embed_code = encodeURIComponent($('#property_embed_code').val());
	var property_status = $('#property_status').val();


	if ((building_name=='')||(property_mini_desc=='')||(property_location=='')||(property_starting_price=='')||(property_instagram_url=='')||(property_embed_code=='')||(property_status=='')){
		$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> Fields cannot be empty<br /><span>Fill all necessary fields to continue</span>').fadeIn(500).delay(5000).fadeOut(100);
	}else{
		
		$('#create-property-btn').html('PROCESSING...');
			document.getElementById('create-property-btn').disabled=true;

		var action ='create_property';
		var dataString ='action='+ action+'&building_name='+ building_name+'&property_mini_desc='+ property_mini_desc+'&property_location='+ property_location+'&property_starting_price='+ property_starting_price+'&property_instagram_url='+ property_instagram_url+'&property_embed_code='+ property_embed_code+'&property_status='+ property_status;
		$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			dataType: 'json',
			cache: false,
			success: function(data){
			var scheck = data.check;
				if(scheck==1){
					$('#success-div').html('<div><i class="fa fa-check"></i></div> PROPERTY REGISTERED SUCCESSFULLY!').fadeIn(500).delay(5000).fadeOut(100);
					alert_close();
					if (property_status=='FS'){
						_get_page('active_properties','active_properties');
					}else if(property_status=='CMP'){
						_get_page('completed_properties','completed_properties');
					}else if(property_status=='P'){
						_get_page('pending_properties','pending_properties');
					}else if(property_status=='CMP'){
						_get_page('completed_properties','completed_properties');
					}else{
						_get_page('sold_properties','sold_properties');
					}
				}else{
				  $('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> ERROR! -- Kindly Upload at least 2 Property Pictures').fadeIn(500).delay(5000).fadeOut(100);
					$('#create-property-btn').html('<i class="fa fa-check"></i> SUBMIT');
					document.getElementById('create-property-btn').disabled=false;
				}	
			}
		});
	}
}

function _update_property(property_id){
	var building_name = $('#building_name').val();
	var property_mini_desc = $('#property_mini_desc').val();
	var property_location = $('#property_location').val();
	var property_starting_price = $('#property_starting_price').val();
	var property_instagram_url = encodeURIComponent($('#property_instagram_url').val());
	var property_embed_code = encodeURIComponent($('#property_embed_code').val());
	var property_status = $('#property_status').val();


	if ((building_name=='')||(property_mini_desc=='')||(property_location=='')||(property_starting_price=='')||(property_instagram_url=='')||(property_embed_code=='')||(property_status=='')){
		$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> Fields cannot be empty<br /><span>Fill all necessary fields to continue</span>').fadeIn(500).delay(5000).fadeOut(100);
	}else{
		
		$('#update-property-btn').html('PROCESSING...');
			document.getElementById('update-property-btn').disabled=true;

		var action ='update_property';
		var dataString ='action='+ action+'&property_id='+ property_id+'&building_name='+ building_name+'&property_mini_desc='+ property_mini_desc+'&property_location='+ property_location+'&property_starting_price='+ property_starting_price+'&property_instagram_url='+ property_instagram_url+'&property_embed_code='+ property_embed_code+'&property_status='+ property_status;
		$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			dataType: 'json',
			cache: false,
			success: function(data){
			var scheck = data.check;
				if(scheck==1){
					$('#success-div').html('<div><i class="fa fa-check"></i></div> PROPERTY UPDATED SUCCESSFULLY!').fadeIn(500).delay(5000).fadeOut(100);
					alert_close();
					if (property_status=='FS'){
						_get_page('active_properties','active_properties');
					}else if(property_status=='CMP'){
						_get_page('completed_properties','completed_properties');
					}else if(property_status=='P'){
						_get_page('pending_properties','pending_properties');
					}else{
						_get_page('sold_properties','sold_properties');
					}
				}else{
				  $('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> ERROR! -- Kindly Upload at least 2 Property Pictures').fadeIn(500).delay(5000).fadeOut(100);
					$('#update-property-btn').html('<i class="fa fa-check"></i> SUBMIT');
					document.getElementById('update-property-btn').disabled=false;
				}	
			}
		});
	}
}


	function _fetch_property_list(status_id){
			var all_search_txt = $('#all_search_txt').val();
		$('#search-content').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
			var action='fetch_property_list';
			var dataString ='action='+ action+'&all_search_txt='+ all_search_txt+'&status_id='+ status_id;
			$.ajax({
			type: "POST",
			url: "config/code",
			data: dataString,
			cache: false,
			success: function(html){$('#search-content').html(html);}
			});
	}



function _update_settings(){
		var sender_name=$('#sender_name').val();
		var smtp_host=$('#smtp_host').val();
		var smtp_username=$('#smtp_username').val();
		var smtp_password=$('#smtp_password').val();
		var smtp_port=$('#smtp_port').val();
		var support_email=$('#support_email').val();
	
			if((sender_name=='')||(smtp_host=='')||(smtp_username=='')||(smtp_password=='')||(smtp_port=='')||(support_email=='')){
			$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> USER ERROR!<br /><span>Please fill all the feilds</span>').fadeIn(500).delay(5000).fadeOut(100);
			}else{
				$('#get-more-div').html('<div class="ajax-loader">Loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
					var action='update_settings';
					var dataString ='action='+ action+'&sender_name='+ sender_name+'&smtp_host='+ smtp_host+'&smtp_username='+ smtp_username+'&smtp_password='+ smtp_password+'&smtp_port='+ smtp_port+'&support_email='+ support_email;
					$.ajax({
					type: "POST",
					url: "config/code",
					data: dataString,
					cache: false,
					success: function(html){
						$('#get-more-div').html('').fadeOut(1000);
						$('#success-div').html('<div><i class="fa fa-check"></i></div>SYSTEM SETTINGS UPDATED SUCCESSFULLY!').fadeIn(500).delay(5000).fadeOut(100);
						}
					});
				}
}





function exportTableToExcel(tableID,filename){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20').replace(/#/g, '%23');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
   
    // Create download link element
    downloadLink = document.createElement("a");
   
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        //triggering the function
        downloadLink.click();
    }
}









