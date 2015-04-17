<?php snippet('head') ?>
	<?php snippet('about') ?>
	<?php snippet('clients') ?>
	<?php snippet('contact') ?>
	<main>
		<?php echo $page->intro()->kirbytext() ?>
		<div>
			<?php $tags = $pages->find('/projects')->children()->visible()->pluck('category', ',', true); ?>
			<?php foreach($tags as $tag): ?>
		   	<a href="<?php echo url('/tag:' . $tag)?>">
		   		<?php echo html($tag) ?>
				</a>
			<?php endforeach ?>
		</div>
		<div class="project__container">
		<?php foreach(page('projects')->children()->visible() as $project): ?>
	      <figure class="project<?php if($project->previewSize() == 'half'): ?> project__half<?php endif?><?php if($project->previewSize() == 'full'): ?> project__full<?php endif?>">
				<?php foreach($project->images() as $image): ?>
				<?php if($image->cover() == 'ja'): ?>
				<a href="<?php echo $project->url() ?>/">
					<img src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>"/>
				</a>
				<?php endif ?>
				<?php endforeach ?>
	            <figcaption class="projects__item--title">
	            	<span><?php echo html($project->category()) ?></span>
	            	<a href="<?php echo $project->url() ?>/">
	            		<?php echo html($project->title()) ?>
	         		</a>
	            </figcaption>
	        </figure>
	    <?php endforeach ?>
	 </div>
	</main>
<?php snippet('footer') ?>