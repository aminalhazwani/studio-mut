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
      console.log('video is playing');
      video.play();
      playButton.innerHTML = "Pause";
    } else {
      console.log('video is pause');
      video.pause();
      playButton.innerHTML = "Play";
    }
  });
}

window.onload = function() {
  // var video = $('.showcase__image--video');
  var currentFigure = $('.showcase__slider--slide');
  currentFigure.each(function() {
    var video = $(this).children('.showcase__image--video');
    // var videoElement = video.get(0);
    var playButton = $(this).children('.button');
    playButton.on("click", function() {
      console.log(playButton);
      console.log('click');
      if (video.get(0).paused == true) {
        console.log('video is playing');
        video.get(0).play();
        playButton.innerHTML = "Pause";
      } else {
        console.log('video is pause');
        video.get(0).pause();
        playButton.innerHTML = "Play";
      }
    });
  })
  // var playButton = document.getElementById("play-pause");
  //var playButton = $('.button');
}


function pauseAllVideos() {
  var video = document.getElementById("video");
  var playButton = document.getElementById("play-pause");
  if (video.paused === false) {
    video.pause();
    playButton.innerHTML = "Play";
    console.log('video is paused by slide');
  }
}

$('.button').click(function(e) {
  e.stopPropagation();
});

