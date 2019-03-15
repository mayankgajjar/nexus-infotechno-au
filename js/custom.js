$(document).ready(function() {
    if ($(".partner-slider").length > 0) {
        $('.partner-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }		
	if ($(".blockchain-slider").length > 0) {
        $('.blockchain-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }
	if ($(".platform-slider").length > 0) {
        $('.platform-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }
	
    if ($(".techno-slider").length > 0) {
        $('.techno-slider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3700,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }
    if ($(".testimonial-slider").length > 0) {
        $('.testimonial-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3400,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }
    if ($(".blog-slider").length > 0) {
        $('.blog-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3100,
            arrows: false,
            dots: true,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }
	
	if ($(".portfolios-page").length > 0) {
		$('.grid').isotope({
		  itemSelector: '.grid-item',
		});

		// filter items on button click
		$('.filter-button-group').on( 'click', 'li', function() {
		  var filterValue = $(this).attr('data-filter');
		  $('.grid').isotope({ filter: filterValue });
		  $('.filter-button-group li').removeClass('active');
		  $(this).addClass('active');
		});
	}
	
	if ($("#skillset").length > 0) {
		$("#skillset").skillset({

			object: object,
			duration: 40

		});
	}
});

$('#slider').slick({
    autoplay: true,
    speed: 800,
    lazyLoad: 'progressive',
    arrows: false,
    dots: true,
}).slickAnimation();

$(window).scroll(function() {
    if ($(window).scrollTop() >= 100) {
        $('#header').addClass('fixed-header');
    } else {
        $('#header').removeClass('fixed-header');
    }
});
$(document).ready(function() {
    $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});
$(window).load(function() {
    // Animate loader off screen
    $(".loader").fadeOut("slow");
});

var object = [

    {

        'headline': 'Design & Development',
        'value': 8,
        'length': 10,


    }, {

        'headline': 'Wireframes & Designs',
        'value': 6,
        'length': 10,


    }, {

        'headline': 'Marketing',
        'value': 3,
        'length': 10,


    }

];