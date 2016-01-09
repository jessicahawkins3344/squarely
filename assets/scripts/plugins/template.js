(function($){
	$(document).ready(function(){

		// Isotope filters
		//-----------------------------------------------
		if ($('.isotope-container').length>0) {
			$(window).load(function() {
				$('.isotope-container').fadeIn();
				var $container = $('.isotope-container').isotope({
					itemSelector: '.isotope-item',
					layoutMode: 'masonry',
					transitionDuration: '0.6s',
					filter: "*"
				});
				// filter items on button click
				$('.filters').on( 'click', 'ul.nav li.nav-item a', function() {
					var filterValue = $(this).attr('data-filter');
					$(".filters").find("li.active.nav-item").removeClass("active");
					$(this).parent().addClass("active");
					$container.isotope({ filter: filterValue });
					return false;
				});
			});
		};

		//Modal
		//-----------------------------------------------
		if($(".modal").length>0) {
			$(".modal").each(function() {
				$(".modal").prependTo( "body" );
			});
		}
	}); // End document ready

	  $("#collapse-bs").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

		// Page scrolling for #page-scroll li classes in navbar

	$('.arrow').click(function () {
		$('body, html').animate({
			scrollTop: $('#portfolio').offset().top
		}, 1500, 'easeInOutExpo');
		return false;
	});

	var wow = new WOW(
		  {
		    boxClass:     'wow',      // animated element css class (default is wow)
		    animateClass: 'animated', // animation css class (default is animated)
		    offset:       100,          // distance to the element when triggering the animation (default is 0)
		    mobile:       true,       // trigger animations on mobile devices (default is true)
		    live:         true,       // act on asynchronously loaded content (default is true)
		    callback:     function(box) {
		      // the callback is fired every time an animation is started
		      // the argument that is passed in is the DOM node being animated
		    }
		  }
		);
		wow.init();
})(this.jQuery);