<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main id="main" class="home m-scene" role="main">
	<div class="home__wrapper">
		<div class="home__header scene_element scene_element--fadein">
			<div class="scene_element scene_element--fadein">
				<?php echo $site->description()->kirbytext() ?>
			</div>
		</div>
		<button class="filter" data-filter="all">All</button>
		<button class="filter" data-filter=".web">Web</button>
		<button class="filter" data-filter=".editorial">Editorial</button>
		<div id="container" class="home__content scene_element scene_element--fadeinup">
		<?php foreach(page('projects')->children()->visible() as $project): ?>
	        <figure class="mix<?php foreach(str::split($project->keywords()) as $tag): ?> <?php echo $tag ?><?php endforeach ?>">
	            <a href="<?php echo $project->url() ?>/">
	                <?php foreach($project->images() as $image): ?>
	                    <?php if($image->cover() != ''): ?>
	                    <img src="/assets/images/1px.png" alt="<?php echo html($project->title()) ?>" style="background-image: url('<?php echo $image->url() ?>')">
	                    <?php endif ?>
	                <?php endforeach ?>
	                <figcaption class="projects__item--title"><?php echo html($project->title()) ?></figcaption>
	            </a>
	        </figure>
	    <?php endforeach ?>
		</div>
	</div>
</main>

<?php echo js('assets/scripts/home.min.js') ?>
<?php snippet('footer') ?>