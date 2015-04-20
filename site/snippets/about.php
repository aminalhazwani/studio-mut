<div class="about">
	<?php $about = $pages->find('/about') ?>
	<?php echo $about->intro()->kirbytext() ?>
	<!-- remember to check images caption. -->

	<?php echo $site->title()->kirbytext() ?>
	<?php echo $about->address()->kirbytext() ?>
	<?php echo $about->phone()->kirbytext() ?>
	<?php echo $about->mail()->kirbytext() ?>

	<?php echo $about->social()->kirbytext() ?>
	<?php echo $about->awards()->kirbytext() ?>
	<?php echo $about->talks()->kirbytext() ?>
	<?php echo $about->newsletter()->kirbytext() ?>
	<?php snippet('newsletter') ?>
	<?php echo $about->interships()->kirbytext() ?>

	<?php echo $about->infomail()->kirbytext() ?>
	<?php snippet('weather') ?>
	<h4>Actual time at Mut</h4>
	<span id="time"></span>

	<?php echo $about->warning()->kirbytext() ?>
</div>