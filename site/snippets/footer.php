	<footer class="footer">
		<div class="footer__container">
			<div class="footer__contacts">
				<?php $about = $pages->find('/about') ?>
				<?php echo $about->phone()->kirbytext() ?>
				<?php echo $about->mail()->kirbytext() ?>
				<?php echo $about->address()->kirbytext() ?>
			</div>
			<div class="footer__about">
				<?php $footer = $pages->find('/footer') ?>
				<?php echo $footer->firstCol()->kirbytext() ?>
				<?php echo $footer->secondCol()->kirbytext() ?>
				<?php echo $footer->thirdCol()->kirbytext() ?>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
  	<?php echo js('assets/scripts/vendor/vendor.min.js') ?>
	<?php echo js('assets/scripts/main.min.js') ?>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	</body>
</html>