(function () {
	function hasClass(element, cls) {
	    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
	}

	var btnToggleMenu 			= document.querySelector('.btn-toggle-menu'),
		perspectiveContainer	= document.querySelector('.perspective-container'),
		perspective 			= document.querySelector('.perspective');

	btnToggleMenu.addEventListener('click', function () {
		btnToggleMenu.classList.toggle('toggled');
 		
		if (!hasClass(perspective, 'toggled')) {
			Velocity(
				perspectiveContainer, 
				{ 
		            translateX: "-35%",
		            rotateY: "45deg",
		            translateZ: "-70px"					
				}, 
				{ duration: 400 }, 
				"easeOutCubic"
			);
		} else {
			Velocity(
				perspectiveContainer, 
				{ 
		            translateX: "0%",
		            rotateY: "0deg",
		            translateZ: "0px"					
				}, 
				{ duration: 400 }, 
				"easeOutCubic"
			);
		}

		perspective.classList.toggle('toggled');
	});

	perspectiveContainer.addEventListener('click', function () {
		if (hasClass(perspective, 'toggled')) {
			btnToggleMenu.className = 'btn-toggle-menu';

			Velocity(
				perspectiveContainer, 
				{ 
		            translateX: "0%",
		            rotateY: "0deg",
		            translateZ: "0px"					
				}, 
				{ duration: 400 }, 
				"easeOutCubic"
			);			

			perspective.className = 'perspective';
		}
	})
})();