$('#about').click(function(){
   $('.about').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
   // if (!$('.clients').hasClass('visible')) {
   // 	$('.close__side-elements').removeClass('active');
   // }
   // if (!$('.contact').hasClass('visible')) {
   // 	$('.close__side-elements').removeClass('active');
   // }
});

$('#clients').click(function(){
   $('.clients').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
});

$('#contact').click(function(){
   $('.contact').addClass('visible');
   $('.overlay').addClass('active');
   $('.close__side-elements').addClass('active');
});

$('.overlay').click(function(){
   if ( $('.about').hasClass('visible') )  {
		$('.about').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
	if ( $('.clients').hasClass('visible') )  {
		$('.clients').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
	if ( $('.contact').hasClass('visible') )  {
		$('.contact').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
});

$('.close__side-elements').click(function(){
	if ( $('.about').hasClass('visible') )  {
		$('.about').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
	if ( $('.clients').hasClass('visible') )  {
		$('.clients').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
	if ( $('.contact').hasClass('visible') )  {
		$('.contact').removeClass('visible');
		$('.overlay').removeClass('active');
		$('.close__side-elements').removeClass('active');
	}
});

$(document).on('keydown', function(e) {
	if ( e.keyCode === 27 ) {
		if ( $('.about').hasClass('visible') )  {
			$('.about').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
		}
		if ( $('.clients').hasClass('visible') )  {
			$('.clients').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
		}
		if ( $('.contact').hasClass('visible') )  {
			$('.contact').removeClass('visible');
			$('.overlay').removeClass('active');
			$('.close__side-elements').removeClass('active');
		}
	}
});