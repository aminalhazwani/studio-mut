<div class="about">
	<?php $about = $pages->find('/about') ?>
	<?php echo $about->text()->kirbytext() ?>
	<?php if($about->hasImages()): ?>
	<div class="about__images--top">
		<?php foreach($about->images()->sortBy('sort','asc')->limit(2) as $image): ?>
		<figure class="about__image about__image--top">
			<img src="<?php echo $image->url() ?>"> 
		</figure>
		<?php endforeach ?>
	</div>
	<div class="about__images--bottom">
		<?php foreach($about->images()->sortBy('sort','desc')->limit(2) as $image): ?>
		<figure class="about__image about__image--bottom">
			<img src="<?php echo $image->url() ?>"> 
		</figure>
		<?php endforeach ?>
	</div>
	<figcaption><?php echo $about->caption() ?></figcaption>
	<?php endif ?>

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