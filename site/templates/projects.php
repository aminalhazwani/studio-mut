<?php snippet('header') ?>

<main class="main" role="main">

	<div class="text">
	<h1><?php echo $page->title()->html() ?></h1>
	<?php echo $page->text()->kirbytext() ?>
	</div>

	<button id="ChangeLayout">List</button>

	<?php snippet('projects') ?>

</main>

<?php echo js('assets/scripts/projects.min.js') ?>