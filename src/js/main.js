$('#about').click(function(){
   $('.about').toggleClass('visible');
});

$('#clients').click(function(){
   $('.clients').toggleClass('visible');
});

$('#contact').click(function(){
   $('.contact').toggleClass('visible');
});

$(document).on('keydown', function(e) {
	if ( e.keyCode === 27 ) {
		if ( $('.about').hasClass('visible') )  {
			$('.about').removeClass('visible');
		}
		if ( $('.clients').hasClass('visible') )  {
			$('.clients').removeClass('visible');
		}
		if ( $('.contact').hasClass('visible') )  {
			$('.contact').removeClass('visible');
		}
	}
});