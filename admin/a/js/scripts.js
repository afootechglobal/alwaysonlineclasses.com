
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


function _get_active_link(divid){
	$('#dashboard, #admin, #user, #exam, #subject, #blogs, #faqs').removeClass('active-li');
	//$('#_dashboard').removeClass('active-li');
	$('#'+divid).addClass('active-li');
	$('#_'+divid).addClass('active-li');
	//$('#page-title').html($('#'+ divid).html());
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


//    function _driver_endorsement_check(check_endorsement, endorsement_id){
// 	if ((endorsement_id=='DE004')){
// 	if(check_endorsement.checked){
// 		$('#div_'+endorsement_id).fadeIn(200);
// 	}else{
// 		$('#div_'+endorsement_id).fadeOut(200);
// 	}
// 	}else{
// 		////do nothing
// 	}
// }
