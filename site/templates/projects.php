<?php snippet('header') ?>

<main class="projects" role="main">
	<div>
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div>

    <div class="projects__index">
	<?php foreach(page('projects')->children()->visible() as $project): ?>
        <figure>
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
    <figure><figure>
    </div>
</main>

<?php echo js('assets/scripts/projects.min.js') ?>