$('#about').click(function(){
   $('.about').toggleClass('visible');
   $('.overlay').toggleClass('active');
});

$('#clients').click(function(){
   $('.clients').toggleClass('visible');
   $('.overlay').toggleClass('active');
});

$('#contact').click(function(){
   $('.contact').toggleClass('visible');
   $('.overlay').toggleClass('active');
});

$('.overlay').click(function(){
   if ( $('.about').hasClass('visible') )  {
		$('.about').removeClass('visible');
		$('.overlay').removeClass('active');
	}
	if ( $('.clients').hasClass('visible') )  {
		$('.clients').removeClass('visible');
		$('.overlay').removeClass('active');
	}
	if ( $('.contact').hasClass('visible') )  {
		$('.contact').removeClass('visible');
		$('.overlay').removeClass('active');
	}
});

$(document).on('keydown', function(e) {
	if ( e.keyCode === 27 ) {
		if ( $('.about').hasClass('visible') )  {
			$('.about').removeClass('visible');
			$('.overlay').removeClass('active');
		}
		if ( $('.clients').hasClass('visible') )  {
			$('.clients').removeClass('visible');
			$('.overlay').removeClass('active');
		}
		if ( $('.contact').hasClass('visible') )  {
			$('.contact').removeClass('visible');
			$('.overlay').removeClass('active');
		}
	}
});