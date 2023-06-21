

$(window).scroll(function() { 
  var scrollheight = $(window).scrollTop();
  	if (scrollheight >= 100) {
		$("#back2Top").fadeIn(1000);
	} else {
		$('#back2Top').fadeOut(1000);
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
	$('#view_login,#reset_password_info,#confirm_password_info').hide();
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

// function _get_active_link(divid){
// 	$('#signup, #login').removeClass('active-li');
// 	$('#fsignup, #flogin').removeClass('active-li');
// 	$('#'+divid).addClass('active-li');
// 	$('#f'+divid).addClass('active-li');
// }

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





















