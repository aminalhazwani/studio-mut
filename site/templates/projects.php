<?php snippet('header') ?>

<main class="projects" role="main">
	<div>
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div>

	<?php foreach(page('projects')->children()->visible() as $project): ?>
        <div class="projects__item mix">
            <a class="projects__item--link"  href="<?php echo $project->url() ?>/">
                <p class="projects__item--title"><?php echo html($project->title()) ?></p>
                <!-- 
                <p class="project__item--client"><?php echo html($project->client()) ?></p>
                <p class="project__item--date"><?php echo html($project->date()) ?></p> 
            	-->
            </a>
        </div>
    <?php endforeach ?>
</main>

<?php echo js('assets/scripts/projects.min.js') ?>