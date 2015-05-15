<div class="contact">
	<?php $about = $pages->find('/about') ?>
	<p class="contact__headline">Contact Studio Mut</p>
	<a class="close__side-elements"><span class="close__side-elements--line"></span></a>
	<div class="contact__content">
		<?php echo $site->title()->kirbytext() ?>
		<?php echo $about->address()->kirbytext() ?>
		<?php echo $about->phone()->kirbytext() ?>
		<?php echo $about->mail()->kirbytext() ?>
	</div>
</div>