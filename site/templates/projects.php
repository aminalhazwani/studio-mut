<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('menu-button') ?>
<?php snippet('navigation') ?>

<main class="projects" role="main">
	<div class="projects__index">
	<?php foreach($pages->find('projects')->children()->visible() as $project): ?>
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
<?php snippet('footer') ?>