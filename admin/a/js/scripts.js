

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
function _next_page(next_id,divid) {
	$('#view_login,#reset_password_info,#confirm_password_info').hide();
	 $('#'+next_id).fadeIn(1000);
	$('#page-title').html($('#'+ divid).html());
 }

 function _alert_close(){
	$('#get-more-div').fadeOut(300);
 }



function _get_page(page){
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






