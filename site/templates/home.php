<?php snippet('head') ?>

	<div class="splash"></div>
	<?php snippet('header') ?>
	<?php snippet('navigation') ?>

	<main>
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
			<article>
				<div class="bg-blue u-ta-center u-padd-huge">
					<div class="l-container">
						<h2 class="h1 fit"><a href="<?php echo $project->url() ?>"><?php echo $project->titl()->kirbytext() ?></a></h2>
						<h5 class="u-push-btm-none"><?php echo html($project->client()) ?></h5>
					</div>
				</div>
				<?php foreach($project->images() as $image): ?>
					<?php if($image->cover() == 'ja'): ?>
						<a href="<?php echo $project->url() ?>">
							<img src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>">
						</a>
					<?php endif ?>
				<?php endforeach ?>
			</article>
		<?php endforeach ?>
	</main>

<?php snippet('footer') ?>