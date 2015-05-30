// This function set the position left of the header and
// the padding left of the side elements accordingly to 
// the margin-left of the body which is set to auto in CSS
$(window).on("resize", function() {
	var width = $(window).width();
	if (width >= 768) {
		var posLeft = ($('body').outerWidth() - $('.home > p').innerWidth())/2;
		$('.about').css('padding-left', posLeft);
		$('.clients').css('padding-left', posLeft);
		$('.contact').css('padding-left', posLeft);
	}
	else if (width >= 481 && width < 768) {
		$('.about').css('padding-left', '5%');
		$('.clients').css('padding-left', '5%');
		$('.contact').css('padding-left', '5%');
	}
	else {
		$('.about').css('padding-left', '1rem');
		$('.clients').css('padding-left', '1rem');
		$('.contact').css('padding-left', '1rem');
	}
}).resize();


// This function plays an animation before 
// redirecting to the clicked link
$(document).ready(function() {
    $('.project > a').click(function() {
        $('main').addClass('hide');
        var href = $(this).attr('href');
        setTimeout(function() {window.location = href}, 1000);
        return false;
    });
});​

// $(document).ready(function() {
//     setTimeout(function() {
//         $('.splash').addClass('hide');
//     }, 2000);

//     setTimeout(function() {
//         $('.splash').addClass('remove');
//     }, 4000);
// });