jQuery(document).ready(function ($) {

	// Terms conditions checkout in new tab
	$(document.body).off('click', 'a.woocommerce-terms-and-conditions-link');  
	
	// Disabled first option select contact form
	$('#form-field-questions option:first').attr('selected','selected').attr('disabled', 'disabled');
	
	// Carousel new products home
	$('.slide-new-products .woocommerce ul').slick({
		dots: false,
		arrows: true,
		infinite: false,
		prevArrow: '<img class="slick-prev slick-arrow" src="/kibys_nacional/wp-content/themes/kibys/assets/slick/prev.png">',
		nextArrow: '<img class="slick-next slick-arrow" src="/kibys_nacional/wp-content/themes/kibys/assets/slick/next.png">',
		autoplay: false,
		autoplaySpeed: 7000,
		speed: 1000,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					arrows: false,
					dots: true
				}
			},
			{
				breakpoint: 426,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: true,
					dots: false
				}
			}
		]
	});

	
	// Product Gallery 
	$('.woocommerce-product-gallery .flex-control-nav').slick({
		vertical: true,
		infinite: false,
		arrow: true,
		draggable: true,
		prevArrow: '<img class="arrow arrow-prev " src="/wp-content/themes/shop.kibys/assets/slick/prev.png">',
		nextArrow: '<img class="arrow arrow-next" src="/wp-content/themes/shop.kibys/assets/slick/next.png">',	
		slidesToShow: 3,
		slidesToScroll: 1		
	});		
	

});

