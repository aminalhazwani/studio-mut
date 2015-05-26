// This function load and setup the Royal Slider
$(function() {
 	var sliderJQ = $('.showcase__slider').royalSlider({
		autoScaleSlider: false,
		autoHeight: false,
		keyboardNavEnabled: true,
		deeplinking: {
			enabled: true,
			change: true,
			prefix: 'mut'
		},
		loopRewind: false,
		controlNavigation: 'none',
		arrowsNav: false,
		numImagesToPreload: 99
	});
	var sliderInstance = sliderJQ.data('royalSlider');
	var slideCountEl = $('<div class="showcase__count rsSlideCount"></div>').appendTo( '.showcase' );
	function updCount() {
		slideCountEl.html( (sliderInstance.currSlideId+1) + '&nbsp;&nbsp;/&nbsp;&nbsp;' + sliderInstance.numSlides );
	}
	sliderInstance.ev.on('rsAfterSlideChange', updCount);
	sliderInstance.ev.on('rsAfterSlideChange', pauseAllVideos );
	updCount();

	var si = jQuery('.royalSlider').data('royalSlider');
	si.ev.on('rsBeforeMove', function(e, type, action) {
		if(si.currSlideId+1 === si.numSlides && type === "next") {
			$('.showcase__close').addClass("swing");
			setTimeout(function() {
				$('.showcase__close').removeClass("swing")
			},600);
		}
		if(si.numSlides+si.currSlideId <= si.numSlides && type === "prev") {
			$('.showcase__close').addClass("swing");
			setTimeout(function() {
			$('.showcase__close').removeClass("swing")
			},600);
		}
	});
});


// These functions handle videos in royal slider
window.onload = function() {
 	var currentFigure = $('.showcase__slider--slide');
  	currentFigure.each(function() {
		var video = $(this).children('.showcase__image--video');
		var playButton = $(this).children('.button');
		playButton.on("click", function() {
			if (video.get(0).paused === true) {
				video.get(0).play();
				playButton.addClass('play');
	  		} 
	  		else {
				video.get(0).pause();
				playButton.removeClass('play');
	  		}
		});
	})
}

function pauseAllVideos() {
	$('video').each(function() {
		$(this).get(0).pause();
		$('.button').removeClass('play');
	});
}

$('.button').click(function(e) {
	e.stopPropagation();
});


// This function redirect to the previous page when 
// a user clicks on the close button of the slider
$('.showcase__close').click(function() {
	var loc = window.location.href,
	index = loc.indexOf('#');
	if (index > 0) {
		window.location = loc.substring(0, index);
  	}
	history.go(-1);
});