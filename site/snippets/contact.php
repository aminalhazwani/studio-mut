<aside class="contact">
	<?php $about = $pages->find('/about') ?>
	<p class="contact__headline">Contact Studio Mut</p>
	<div class="contact__content">
		<?php echo $site->title()->kirbytext() ?>
		<?php echo $about->address()->kirbytext() ?>
		<?php echo $about->phone()->kirbytext() ?>
		<?php echo $about->mail()->kirbytext() ?>
	</div>
</aside>