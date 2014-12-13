<?php snippet('head') ?>
<?php snippet('menu-button') ?>
<?php snippet('navigation') ?>

<main class="main" role="main">
	<div class="about__wrapper">
		<div class="about__intro">
			<?php echo $page->intro()->kirbytext() ?>
		</div>
		<div class="about__more">
			<div class="about__more--designers">
				<div>
					<span>A)</span><span>Thomas K. Kronbichler</span>
				</div>
				<div>
					<span>B)</span><span>Martin Kerschbaumer</span>
				</div>
			</div>

			<div class="about__more--address">
				<?php echo $site->title()->kirbytext() ?>
				<?php echo $page->address()->kirbytext() ?>
				<?php echo $page->phone()->kirbytext() ?>
				<a href="mailto:<?php echo $page->mail()->html() ?>"><?php echo $page->mail()->html() ?></a>
			</div>

			<div class="about__more--col">
				<div class="about__more--clients">
					<?php echo $page->clients()->kirbytext() ?>
				</div>
			</div>

			<div class="about__more--col">
				<div class="about__more--social">
					<?php echo $page->social()->kirbytext() ?>
				</div>

				<div class="about__more--awards">
					<?php echo $page->awards()->kirbytext() ?>
				</div>

				<div class="about__more--talks">
					<?php echo $page->talks()->kirbytext() ?>
				</div>

				<div class="about__more--newsletter">
					<?php echo $page->newsletter()->kirbytext() ?>
				</div>
			</div>

			<div class="about__more--col">
				<div class="about__more--info-mail">
					<?php echo $page->infomail()->kirbytext() ?>
				</div>

				<div class="about__more--interships">
					<?php echo $page->interships()->kirbytext() ?>
				</div>

				<div class="about__more--weather">
					<h4>Todays weather at Oswaldweg, Bolzano</h4>
					<?php snippet('weather') ?>
				</div>

				<div class="about__more--time">
					<h4>Actual time at Mut</h4>
					<span id="time"></span>
				</div>

				<div class="about__more--warning">
					<?php echo $page->warning()->kirbytext() ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php echo js('assets/scripts/about.min.js') ?>
<?php snippet('footer') ?>