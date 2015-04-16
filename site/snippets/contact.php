<div class="contact">
	<?php $about = $pages->find('/about') ?>
	<?php echo $site->title()->kirbytext() ?>
	<?php echo $about->address()->kirbytext() ?>
	<?php echo $about->phone()->kirbytext() ?>
	<?php echo $about->mail()->kirbytext() ?>
</div>