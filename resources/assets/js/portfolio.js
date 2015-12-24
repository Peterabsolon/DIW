$(document).ready(function() {
	$('.projects .slider').slick({
		cssEase: 'easeInOut',
		speed: 150,
		focusOnSelect: true,
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		lazyLoad: 'ondemand'
	});
 
	$('.slick-current').trigger('click');
});