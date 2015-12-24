$(document).ready(function(){
	$('.btn-toggle-menu').on('click', function(){
		$(this).toggleClass('toggled');

		if (!$('.perspective').hasClass('toggled')) {
			$('.perspective-container').velocity({
				translateX: "-35%",
				rotateY: "45deg",
				translateZ: "-70px"	
			}, 400, 'easeOutCubic');
		} else {
			$('.perspective-container').velocity({
				translateX: "0%",
				rotateY: "0deg",
				translateZ: "0px"	
			}, 400, 'easeOutCubic');
		}

		$('.perspective').toggleClass('toggled');
	});

	$('.perspective-container').on('click', function(){
		if($('.perspective').hasClass('toggled')) {
			$('.btn-toggle-menu').removeClass('toggled');

			$('.perspective').removeClass('toggled');

			$('.perspective-container').velocity({
				translateX: "0%",
				rotateY: "0deg",
				translateZ: "0px"	
			}, 400, 'easeOutCubic');
		}
	});

	$('.projects .slider').slick({
		cssEase: 'easeInOut',
		speed: 150,
		focusOnSelect: true,
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		accessibility: false
	});	
});
