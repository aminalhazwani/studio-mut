	<footer>
		<?php $about = $pages->find('/about') ?>
		<?php echo $about->phone()->kirbytext() ?>
		<?php echo $about->mail()->kirbytext() ?>

		<?php $footer = $pages->find('/footer') ?>
		<?php echo $footer->firstCol()->kirbytext() ?>
		<?php echo $footer->secondCol()->kirbytext() ?>
		<?php echo $footer->thirdCol()->kirbytext() ?>
	</footer>

	<?php echo js('assets/scripts/main.min.js') ?>
	</body>
</html>