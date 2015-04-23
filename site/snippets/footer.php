	<footer>
		<?php $about = $pages->find('/about') ?>
		<?php echo $about->phone()->kirbytext() ?>
		<?php echo $about->mail()->kirbytext() ?>

		<?php $footer = $pages->find('/footer') ?>
		<?php echo $footer->firstCol()->kirbytext() ?>
		<?php echo $footer->secondCol()->kirbytext() ?>
		<?php echo $footer->thirdCol()->kirbytext() ?>
	</footer>

	<!-- Scripts -->
  	<?php echo js('assets/scripts/vendor/vendor.min.js') ?>
	<?php echo js('assets/scripts/main.min.js') ?>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<?php if($page->template() == 'home'): ?>
	<script>		
		// var $container = $('.project__container');
		// var $container = $('.project__container').imagesLoaded( function() {
		// 	$container.isotope({
		// 		itemSelector: '.project'
		// 	});
		// 	$('.filter').click(function(){
		// 	  var selector = $(this).attr('data-filter');
		// 	  $container.isotope({ filter: selector });
		// 	  return false;
		// 	});
		// });
	</script>
	<?php endif ?>
	</body>
</html>