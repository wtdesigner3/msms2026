var owl = $('.mainslider');
      owl.owlCarousel({
        margin:0,
		autoplay: true,
		autoplayTimeout:5000,
		smartSpeed:5000,
		dots: false,
		animateOut: 'fadeOut',
		nav: true,
  		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
});

var owl = $('.photo_gallery');
      owl.owlCarousel({
        margin:30,
		autoplay: true,
		autoplayTimeout:4000,
		autoplayHoverPause:true,
		dots: false,
		nav: true,
  		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        }
});
var owl = $('.anounce');
      owl.owlCarousel({
        margin:0,
		autoplay: true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		dots: false,
		nav: true,
  		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
});	
var owl = $('.newss');
      owl.owlCarousel({
        margin:30,
		autoplay: true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		dots: false,
		nav: true,
  		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
});