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
    console.log(si.currSlideId, type, si.numSlides);
    if(si.currSlideId+1 === si.numSlides) {
    // if(si.currSlideId+2 === si.numSlides) {
      $('.rsContainer').click(function() {
        $('a.showcase__close')[0].click();
      });

      $(document).on('keydown', function(e) {
        if ( e.keyCode === 39 ) { // ESC 
          $('a.showcase__close')[0].click();
        }
      });
    }
  });
});

window.onload = function() {
  var video = document.getElementById("video");
  var playButton = document.getElementById("play-pause");

  playButton.addEventListener("click", function() {
    if (video.paused == true) {
      // Play the video
      video.play();
      // Update the button text to 'Pause'
      playButton.innerHTML = "Pause";
    } else {
      // Pause the video
      video.pause();
      // Update the button text to 'Play'
      playButton.innerHTML = "Play";
    }
  });
}

function pauseAllVideos() {
  var video = document.getElementById("video");
  var playButton = document.getElementById("play-pause");
  video.pause();
  playButton.innerHTML = "Play";
}

$('.button').click(function(e) {
  e.stopPropagation();
});

