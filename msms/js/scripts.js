
$(document).ready(function(){

var pgurl = window.location.href;     
	$(".menu_lisitng li a").each(function(){if($(this).attr("href") == pgurl || $(this).attr("href") == '' )          
	$(this).addClass("active");     
});

/*var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);     
	$(".menu_lisitng li a").each(function(){if($(this).attr("href") == pgurl || $(this).attr("href") == '' )          
	$(this).addClass("active");     
});
	
$('.content_listing').ClassyScroll();*/

$(".myMarquee").mouseenter(function(){
  document.getElementById("myMarquee").stop();
});
$(".myMarquee").mouseleave(function(){
  document.getElementById("myMarquee").start();
});
$(".myMarqueee").mouseenter(function(){
  document.getElementById("myMarqueee").stop();
});
$(".myMarqueee").mouseleave(function(){
  document.getElementById("myMarqueee").start();
});
$(".myMarqueeee").mouseenter(function(){
  document.getElementById("myMarqueeee").stop();
});
$(".myMarqueeee").mouseleave(function(){
  document.getElementById("myMarqueeee").start();
});

	$(".photo_lisitng a[rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'pp_default',
		slideshow: 3000,
		deeplinking: false,
		autoplay_slideshow: true
	});

	$(".video_lisitng a[rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'pp_default',
		slideshow: false,
		deeplinking: false,
		autoplay_slideshow: false
	});
});
$(".topnav").click(function(){
  $(".top_list").toggle();
});
