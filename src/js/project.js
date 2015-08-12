$(function() {
  var sliderJQ = $('.slider').royalSlider({
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
    numImagesToPreload: 2
  });
  var sliderInstance = sliderJQ.data('royalSlider');
  var slideCountEl = $('<span class="rsSlideCount"></span>').appendTo( '.project_count ' );
  function updCount() {
    slideCountEl.html( (sliderInstance.currSlideId+1) + '&nbsp;&nbsp;/&nbsp;&nbsp;' + sliderInstance.numSlides );
  }
  sliderInstance.ev.on('rsAfterSlideChange', updCount);
  updCount();

  function goBack() {
    window.history.back();
  }

  var si = jQuery('.royalSlider').data('royalSlider');
  si.ev.on('rsBeforeMove', function(e, type, action) {
      console.log(si.currSlideId, type, si.numSlides);
      if(si.currSlideId == si.numSlides-1 && type == 'next') {
        goBack();
      }
  });
});

$('.project_caption').find('h1').fitText();

