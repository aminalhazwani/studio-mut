<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('menu-button') ?>
<?php snippet('navigation') ?>

<main class="about" role="main">
	<div class="about__intro">
		<?php echo $page->intro()->kirbytext() ?>
	</div>
	<div class="about__team">
		<div class="about__team--designer">
			<?php echo $page->thomastext()->kirbytext() ?>
		</div>
		<div class="about__team--designer">
			<?php echo $page->martintext()->kirbytext() ?>
		</div>
	</div>
	<div class="about__info">
		<div class="about__info--clients">
			<?php echo $page->clients()->kirbytext() ?>
		</div>
		<div class="about__info--publications">
			<?php echo $page->publications()->kirbytext() ?>
		</div>
		<div class="about__info--awards">
			<?php echo $page->awards()->kirbytext() ?>
		</div>
	</div>
</main>

<?php echo js('assets/scripts/about.min.js') ?>
<?php snippet('footer') ?>