$(document).ready(function(){

	// Remove click delay
	$(function() {
	    FastClick.attach(document.body);
	});

	// Set project-header height to 100vh - 60px to account for iPhone Safari bottom bar
    if(/iP/.test(navigator.platform) && /Safari/i.test(navigator.userAgent)){
        $('.project-header').addClass('iphone-safari');
    }	

	// Replace all SVG images with inline SVG
	$('img.svg').each(function(){
	    var $img = $(this);
	    var imgID = $img.attr('id');
	    var imgClass = $img.attr('class');
	    var imgURL = $img.attr('src');

	    $.get(imgURL, function(data) {
	        // Get the SVG tag, ignore the rest
	        var $svg = $(data).find('svg');

	        // Add replaced image's ID to the new SVG
	        if(typeof imgID !== 'undefined') {
	            $svg = $svg.attr('id', imgID);
	        }
	        // Add replaced image's classes to the new SVG
	        if(typeof imgClass !== 'undefined') {
	            $svg = $svg.attr('class', imgClass+' replaced-svg');
	        }

	        // Remove any invalid XML tags as per http://validator.w3.org
	        $svg = $svg.removeAttr('xmlns:a');

	        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
	        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	        }

	        // Replace image with new SVG
	        $img.replaceWith($svg);
	    }, 'xml');
	});    

	var menuToggled = false;

	$('.btn-toggle-menu').on('click', function(){
		projectsSlider.slick('slickSetOption', 'swipe', menuToggled);

		menuToggled = !menuToggled;

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
			projectsSlider.slick('slickSetOption', 'swipe', true);

			$('.btn-toggle-menu').removeClass('toggled');

			$('.perspective').removeClass('toggled');

			$('.perspective-container').velocity({
				translateX: "0%",
				rotateY: "0deg",
				translateZ: "0px"	
			}, 400, 'easeOutCubic');
		}
	});

	var projectsSlider = $('.projects .slider');

	projectsSlider.slick({
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

	var globalCurrentSlide = $('.projects .slider').slick('slickCurrentSlide');		
	
	$('.btn-project-prev').on('click', function(){
		projectsSlider.slick('slickPrev');				
	});

	$('.btn-project-next').on('click', function(){
		projectsSlider.slick('slickNext');		
	});

	$('.btn-project-show').on('click', function(){
		showProject(globalCurrentSlide);
	});

	$('.btn-project-hide').on('click', function(){
		hideProject(globalCurrentSlide);
	});

	var projectShown = false;

	function showProject(slide) {
		$('body').addClass('project-opened');

		$('.projects .slide-' + slide + ' .project-body').velocity({
			top: "0px"
		}, {
			'duration': 400,
			'display': 'block',
			complete: function() {
				$('.projects .slide-' + slide + ' .project-header').hide();

				$('.projects .slide-' + slide + ' .project-body').css('position', 'relative');
				
				projectShown = true;
				
				projectsSlider.slick('slickSetOption', 'swipe', false);
			}
		}, 'easeOutQuint');
	};

	function hideProject(slide) {
		$('body').removeClass('project-opened');

		$('.projects .slide-' + slide + ' .project-body').css('position', 'absolute');

		$('.projects .slide-' + slide + ' .project-header').show();

		$('.projects .slide-' + slide + ' .project-body').velocity({
			top: "100vh"
		}, {
			'duration': 400,
			'display': 'none',
			complete: function() {
				projectShown = false;

				projectsSlider.slick('slickSetOption', 'swipe', true);
			}
		}, 'easeOutQuint');		
	}

	// "Manually" binding arrow keys so we don't need to select the slider to use them
	$(document).on('keydown', function(event){
		var scrollTop = $('body').scrollTop();	

		// Arrow left
		if(event.keyCode == 37 && !projectShown) {
			projectsSlider.slick('slickPrev');					
		} 
		
		// Arrow right
		else if (event.keyCode == 39 && !projectShown) {
			projectsSlider.slick('slickNext');				
		} 

		// Arrow down || enter
		else if ((event.keyCode == 40 && !projectShown) || (event.keyCode == 13 && !projectShown)) {
			showProject(globalCurrentSlide);
		}

		// Arrow up
		else if (event.keyCode == 38 && scrollTop == 0 && projectShown) {
			hideProject(globalCurrentSlide);
		}
	});

	var slidesCount = $('.projects .slide').length;

	projectsSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
		if(nextSlide == 1) {
			$('.btn-project-prev').removeClass('disabled');
		} else if (nextSlide == 0) {
			$('.btn-project-prev').addClass('disabled');
		}

		if (nextSlide == slidesCount - 1) {
			$('.btn-project-next').addClass('disabled');
		} else if (nextSlide == slidesCount - 2) {
			$('.btn-project-next').removeClass('disabled');
		}

		// update globalCurrentSlide value to keep track what project we want to show
		if (nextSlide > currentSlide) {
			globalCurrentSlide++;
		} else if (nextSlide < currentSlide) {
			globalCurrentSlide--;
		}

		// Load the n + 1 th project's background ahead of time
		if (nextSlide > 0) {
			$('.projects .slide-' + (parseInt(nextSlide) + 1)).addClass('loaded');
		}

		var images = $('.projects .slide-' + (parseInt(nextSlide) + 1) + ' .project-body img');

		for (var i = 0; i < images.length; i++) {
			var image = $(images[i]).attr('data-src');

			$(images[i]).attr('src', image);
		}		
	});	

	$('.btn-scroll-top').on('click', function(){
		$('.projects .slide-' + globalCurrentSlide + ' .project-body')
			.velocity('scroll', 600);
	});

	$('.btn-scroll-to-map').on('click', function(e){
		e.preventDefault();
		
		$('.google-map').velocity('scroll', 600);
	});
});
