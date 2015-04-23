<?php snippet('head') ?>
	<?php snippet('about') ?>
	<?php snippet('clients') ?>
	<?php snippet('contact') ?>
	<div class="overlay"></div>
	<button class="close__side-elements" type="button">close</button>
	
	<main class="home">
		<?php echo $page->intro()->kirbytext() ?>
		<div>
			<?php $tags = $pages->find('/projects')->children()->visible()->pluck('tag', ',', true); ?>
			<?php foreach($tags as $tag): ?>
		   	<button class="filter" data-filter=".<?php echo strtolower($tag) ?>"><?php echo str_replace("-"," ",$tag) ?></button>
			<?php endforeach ?>
			<button class="filter filter--reset" data-filter="*">all</button>
		</div>
		<div class="project__container">
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
	      <figure class="project <?php echo strtolower($project->tag()) ?><?php if($project->previewSize() == 'half'): ?> project__half<?php endif?><?php if($project->previewSize() == 'full'): ?> project__full<?php endif?>">
				<?php foreach($project->images() as $image): ?>
				<?php if($image->cover() == 'ja'): ?>
				<a href="<?php echo $project->url() ?>/">
					<img src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>"/>
				</a>
				<?php endif ?>
				<?php endforeach ?>
	            <figcaption class="projects__item--title">
	            	<span><?php echo str_replace("-"," ",$project->tag()->html()) ?></span>
	            	<a href="<?php echo $project->url() ?>/">
	            		<?php echo html($project->title()) ?>
	         		</a>
	            </figcaption>
	        </figure>
	    <?php endforeach ?>
	 </div>
	</main>
<?php snippet('footer') ?>