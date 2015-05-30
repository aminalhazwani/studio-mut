<div class="about">
	<?php $about = $pages->find('/about') ?>
	<div class="about__wrapper">
		<p class="about__headline">About Studio Mut</p>
		<div class="about__content about__text">
			<?php echo $about->text()->kirbytext() ?>
		</div>

		<div class="about__images">
			<div class="about__images--top">
				<?php if($about->hasImages()): ?>
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
				<?php endif ?>
			</div>
		</div>

		<figcaption class="about__images--caption"><?php echo $about->caption() ?></figcaption>

		<div class="about__content about__contacts">
			<?php echo $site->title()->kirbytext() ?>
			<?php echo $about->address()->kirbytext() ?>
			<?php echo $about->phone()->kirbytext() ?>
			<?php echo $about->mail()->kirbytext() ?>
		</div>

		<div class="about__columns">
			<div class="about__column">
				<div class="about__content about__social">
					<?php echo $about->social()->kirbytext() ?>
				</div>

				<div class="about__content about__awards">
					<?php echo $about->awards()->kirbytext() ?>
				</div>

				<div class="about__content about__talks">
					<?php echo $about->talks()->kirbytext() ?>
				</div>

				<div class="about__content about__newsletter">
					<?php echo $about->newsletter()->kirbytext() ?>
					<?php snippet('newsletter') ?>
				</div>

				<div class="about__content about__interships">
					<?php echo $about->interships()->kirbytext() ?>
				</div>
			</div>

			<div class="about__column">
				<div class="about__content about__info">
					<?php echo $about->infomail()->kirbytext() ?>
				</div>

				<div class="about__content about__weather">
					<!--<?php snippet('weather') ?>-->
				</div>

				<div class="about__content about__time">
					<h4>Actual time at Mut</h4>
					<span id="time"></span>
				</div>

				<div class="about__content about__warning">
					<?php echo $about->warning()->kirbytext() ?>
				</div>
			</div>
		</div>
	</div>
</div>