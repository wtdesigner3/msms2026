<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/hover.js"></script>
<!--<script type="text/javascript">
$('.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
	event.preventDefault(); 
	event.stopPropagation(); 
	$(this).parent().siblings().removeClass('open');
	$(this).parent().toggleClass('open');
});
</script>-->

<script type="text/javascript" src="<?php echo SITE_URL;?>js/numscroller.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/owl.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.modernizr.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.queryloader2.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.classyscroll.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/script.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/scripts.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/wow.min.js"></script>
<script src="js/stickySidebar.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script type="text/javascript">new WOW().init();</script>

<script src="<?php echo SITE_URL;?>js/flip.js"></script>
<script>
   $(document).ready(function(){
   $(".demo1 .rotate").textrotator({
        animation: "fade",
        speed: 2000
      });
      $(".demo2 .rotate").textrotator({
        animation: "flip",
        speed: 1250
      });
      $(".demo3 .rotate").textrotator({
        animation: "flipCube",
        speed: 1500
      });
      $(".demo4 .rotate").textrotator({
        animation: "flipUp",
        speed: 2500
      });
      $(".demo5 .rotate").textrotator({
        animation: "spin",
        speed: 2000
      });
  });
  
 </script>



<script>
		$(document).ready(function() {
	
			$('#sidebar').stickySidebar({
				sidebarTopMargin: 20,
				footerThreshold: 40
			});
		
		});
                
                
      // ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>