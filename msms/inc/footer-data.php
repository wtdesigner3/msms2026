 
   <a class="blinks" href="#enq" class="adm" > Admission Enquiry</a>
 
 <style>.adm {
    z-index: 9999999;
    position: fixed;
    bottom: 350px;
    right: 0px;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s;
    cursor: pointer;
}

</style>
 
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/hover.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      $(this).parent().siblings().removeClass('open');
      $(this).parent().toggleClass('open');
    });
  });
</script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/numscroller.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/owl.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.modernizr.js"></script>
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
<!--<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.queryloader2.min.js"></script>-->
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.classyscroll.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/script.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/scripts.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">new WOW().init();</script>

