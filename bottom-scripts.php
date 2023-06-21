<div class="live-help-div" title="Chat With Us Now" onclick="_open_live_chat()">
    <div class="pix-div">
    	<img src="<?php echo $website_url?>/all-images/images/cutomercare.jpg" alt="Customer Care"/>
    </div>
    <i class="fa fa-question"></i> Live Help
</div>

<div id="back2Top" title="Back to top"  onclick="_back_to_top();"><i class="bi-box-arrow-up"></i></div>




<script type="text/javascript">
$(".sb-container").scrollBox();
</script>
<script>
AOS.init({
  easing: 'ease-in-out-sine'
});

$(document).ready(function() {
  setTimeout(function(){
	  $('#loader-wrapper').addClass('loaded');
  }, 3000);
  $(".loader-wrapper").delay(4000).fadeOut(800); 
});

<?php if ($scookies_check==''){?>
	//_get_form('accept-cookies');
<?php }?>
</script>
<script src="<?php echo $website_url?>/slide-property/carousel/product-slide.js" type="text/javascript" ></script>



<!-- Go to www.addthis.com/dashboard to customize your tools--> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5930550f7bd6701f"></script>


<div class="media-link-div">
    <a href="tel:+14154944044" title="Call Customer Care">
    <li style="background:#008040;"><i class="bi-telephone-outbound-fill"></i></li></a>
    <a href="https://web.facebook.com/CityOneLimo/" target="_blank" title="Facebook">
    <li style="background:#2980b9;"><i class="bi-facebook"></i></li></a>
    <a href="https://twitter.com/Cityonelimo" target="_blank" title="Twitter">
    <li style="background:#3498db;"><i class="bi-twitter"></i></li></a>
    <a href="https://www.instagram.com/cityone_limo/" target="_blank" title="Instagram">
    <li style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></li></a>
    <a href="https://api.whatsapp.com/send?text=Hello CityOne Limo&amp;phone=+14158699686" target="_blank" title="Whatsapp">
      <li style="background:#25D366;"><i class="bi-whatsapp"></i></li></a>
</div>