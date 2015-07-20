<?php snippet('head') ?>

	<main>
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
			<article>
				<div class="bg-blue u-padd u-sm-padd-double u-ta-center">
					<div class="l-container">
						<h2 class="h1"><?php echo html($project->title()) ?></h2>
						<h5 class="u-push-btm-none"><?php echo html($project->client()) ?></h5>
					</div>
				</div>
				<?php foreach($project->images() as $image): ?>
					<?php if($image->cover() == 'ja'): ?>
						<img src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>">
					<?php endif ?>
				<?php endforeach ?>
			</article>
		<?php endforeach ?>
	</main>

<?php snippet('footer') ?>