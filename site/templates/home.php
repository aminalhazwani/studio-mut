<?php snippet('head') ?>
	<?php snippet('about') ?>
	<?php snippet('clients') ?>
	<?php snippet('contact') ?>
	<div class="overlay"></div>
	<div class="splash"><span class="splash__text">M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U&nbsp;&nbsp;T</span></div>
	
	<main id="main">
		<div class="home">
			<?php echo $page->intro()->kirbytext() ?>
			<div>
				<button class="filter filter--reset" data-filter="*">everything</button>
				<?php $tags = $pages->find('/projects')->children()->visible()->pluck('tag', ',', true); ?>
				<?php foreach($tags as $tag): ?>
			   	<button class="filter" data-filter=".<?php echo strtolower($tag) ?>"><?php echo str_replace("-"," ",$tag) ?></button>
				<?php endforeach ?>
			</div>
			<div class="project__container">
			<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
		      <figure class="project <?php echo strtolower($project->tag()) ?><?php if($project->previewSize() == 'half'): ?> project__half<?php endif?><?php if($project->previewSize() == 'full'): ?> project__full<?php endif?>">
					<?php foreach($project->images() as $image): ?>
					<?php if($image->cover() == 'ja'): ?>
					<a href="<?php echo $project->url() ?>/" alt="<?php echo html($project->title()) ?>">
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>"/>
					</a>
					<?php endif ?>
					<?php endforeach ?>
		            <figcaption class="project__item--caption">
		            	<a class="project__item--title" href="<?php echo $project->url() ?>/" alt="<?php echo html($project->title()) ?>">
		            		<?php echo html($project->title()) ?>
		         		</a>
		            </figcaption>
		        </figure>
		    <?php endforeach ?>
			</div>
		</div>

		<footer class="footer">
			<div class="footer__container">
				<div class="footer__contacts">
					<?php $about = $pages->find('/about') ?>
					<?php echo $about->phone()->kirbytext() ?>
					<?php echo $about->mail()->kirbytext() ?>
					<?php echo $about->address()->kirbytext() ?>
				</div>
				<div class="footer__about">
					<?php $footer = $pages->find('/footer') ?>
					<?php echo $footer->firstCol()->kirbytext() ?>
					<?php echo $footer->secondCol()->kirbytext() ?>
					<?php echo $footer->thirdCol()->kirbytext() ?>
				</div>
			</div>
		</footer>
	</main>

<?php snippet('footer') ?>