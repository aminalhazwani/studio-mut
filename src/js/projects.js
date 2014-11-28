$(function(){
	var layout = 'grid', // Store the current layout as a variable
	$container = $('#Container'), // Cache the MixItUp container
	$changeLayout = $('#ChangeLayout'); // Cache the changeLayout button

	$container.mixItUp({
		animation: {
			animateChangeLayout: true, // Animate the positions of targets as the layout changes
			animateResizeTargets: true, // Animate the width/height of targets as the layout changes
			effects: 'fade rotateX(-40deg) translateZ(-100px)'
		},
		layout: {
			containerClass: 'grid' // Add the class 'list' to the container on load
		}
	});
  
	$changeLayout.on('click', function(){
		if(layout == 'list'){
			layout = 'grid';
			$changeLayout.text('List'); // Update the button text
			$container.mixItUp('changeLayout', {
				containerClass: layout // change the container class to "grid"
			});

			$('.projects__item--thumb').removeClass('block');
	    
	    } else {
			layout = 'list';
			$changeLayout.text('Grid'); // Update the button text
			$container.mixItUp('changeLayout', {
				containerClass: layout // Change the container class to 'list'
			});

			$('.projects__item--thumb').addClass('block');
	    }
	}); 
});