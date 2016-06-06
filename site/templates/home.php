<?php snippet('head') ?>

	<div class="splash"></div>
	<?php snippet('header') ?>
	<?php snippet('navigation') ?>
  <?php snippet('archive') ?>

  <main>
    <?php snippet('news') ?>
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
    <?php if($project->visibility() == 'homepage'): ?>
      <?php 
        $title = preg_replace('#[ -]+#', '-', $project->title()->html());
        $title = strtolower($title);
      ?>
      <?php if($project->title() == 'Newsletter'): ?>
        <?php snippet('newsletter-home') ?>
      <?php else: ?>
  			<article id="<?php echo $title ?>">
  				<div class="u-bg-blue u-ta-center u-padd-huge">
  					<div class="l-container">
  						<h2 class="h1 fit"><a class="project_title" href="<?php echo $project->url() ?>"><?php echo $project->titl()->kirbytext() ?></a></h2>
  						<h5 class="u-push-btm-none u-fs-sm"><?php echo html($project->client()) ?></h5>
  					</div>
  				</div>
          <?php $cover = $project->image($project->cover()); ?>
          <?php $coverUrl = $project->image($project->cover())->url(); ?>
  				<a href="<?php echo $project->url() ?>">
            <?php if($cover->extension() == 'gif'): ?>
              <img class="lazyload" src="<?php echo $coverUrl ?>">
            <?php else: ?>
              <img class="lazyload" 
                src="<?php echo thumb($cover, array('width' => 1200), false) ?>" 
                srcset="<?php echo thumb($cover, array('width' => 600), false) ?> 600w,
                        <?php echo thumb($cover, array('width' => 800), false) ?> 800w,
                        <?php echo thumb($cover, array('width' => 1200), false) ?> 1200w,
                        <?php echo thumb($cover, array('width' => 1600), false) ?> 1600w,
                        <?php echo thumb($cover, array('width' => 2560), false) ?> 2560w"
                sizes="100vw"
              >
            <?php endif ?>
  				</a>
  			</article>
      <?php endif ?>
    <?php endif ?>
		<?php endforeach ?>
	</main>

<?php snippet('footer') ?>