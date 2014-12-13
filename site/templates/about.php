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
					<h4>Mut clients</h4>
				</div>
			</div>

			<div class="about__more--col">
				<div class="about__more--social">
					<h4>Mut on</h4>
					<?php echo $page->social()->kirbytext() ?>
				</div>

				<div class="about__more--awards">
					<h4>Mut wins</h4>
					<?php echo $page->awards()->kirbytext() ?>
				</div>

				<div class="about__more--talks">
					<h4>Mut talks</h4>
					<?php echo $page->talks()->kirbytext() ?>
				</div>

				<div class="about__more--newsletter">
					<h4>Up to date with Mut</h4>
					<?php echo $page->newsletter()->kirbytext() ?>
				</div>
			</div>

			<div class="about__more--col">
				<div class="about__more--info-mail">
					<h4>Ask Mut</h4>
					<?php echo $page->infomail()->kirbytext() ?>
				</div>

				<div class="about__more--weather">
					<h4>Todays weather at Oswaldweg, Bolzano</h4>
					<p>
						<?php snippet('weather') ?>
					</p>
				</div>

				<div class="about__more--time">
					<h4>Actual time at Mut</h4>
					<span id="time"></span>
				</div>

				<div class="about__more--warning">
					<h4>Warning</h4>
					<?php echo $page->warning()->kirbytext() ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php echo js('assets/scripts/about.min.js') ?>
<?php snippet('footer') ?>