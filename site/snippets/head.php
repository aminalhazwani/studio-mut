<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta name="format-detection" content="telephone=no">

	<!-- Page title -->
	<?php if($page->template() != 'home'): ?>
		<title><?php echo $site->title()->html() ?> – <?php echo $page->title()->html() ?></title>
	<?php else: ?>
		<title><?php echo $site->title()->html() ?></title>
	<?php endif ?>

	<!-- Page description -->
	<?php if($page->template() != 'home'): ?>
		<meta name="description" content="<?php echo $page->text()->html() ?>">
	<?php else: ?>
		<meta name="description" content="<?php echo $site->description()->html() ?>">
	<?php endif ?>

	<!-- Page keywords -->
	<?php if($page->template() != 'home'): ?>
		<meta name="keywords" content="<?php echo $page->category()->html() ?>">
	<?php else: ?>
		<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	<?php endif ?>

	<!-- Favicon and Touch icons -->
	<link rel="icon" type="image/png" href="#">
	<link href="#" rel="apple-touch-icon" />
	<link href="#" rel="apple-touch-icon" sizes="76x76" />
	<link href="#" rel="apple-touch-icon" sizes="120x120" />
	<link href="#" rel="apple-touch-icon" sizes="152x152" />

	<!-- Opengraph data -->
	<?php if($page->template() != 'home'): ?>
		<meta property="og:title" content="<?php echo $page->title()->html() ?> – <?php echo $site->title()->html() ?>" />
	<?php else: ?>
		<meta property="og:title" content="<?php echo $site->title()->html() ?>" />
	<?php endif ?>

	<?php if($page->template() == 'project'): ?>
		<meta property="og:description" content="<?php echo $page->text()->html() ?>">
	<?php endif ?>
	<?php if($page->template() == 'about'): ?>
		<meta property="og:description" content="<?php echo $page->introtext()->html() ?>">
	<?php endif ?>
	<?php if($page->template() == 'home'): ?>
		<meta property="og:description" content="<?php echo $site->description()->html() ?>">
	<?php endif ?>

	<meta property="og:url" content="<?php echo $page->url() ?>" />

	<?php if($page->template() == 'project'): ?>
		<?php foreach($page->images() as $image): ?>
			<?php if($image->cover() == 'ja'): ?>
				<meta property="og:image" content="<?php echo $image->url() ?>" />
			<?php endif ?>
		<?php endforeach ?>
	<?php endif ?>
	<?php if($page->template() != 'project'): ?>
		<?php $projects = $pages->find('/projects') ?>
			<?php foreach($projects->children()->first()->images() as $image): ?>
				<?php if($image->cover() == 'ja'): ?>
					<meta property="og:image" content="<?php echo $image->url() ?>" />
				<?php endif ?>
		<?php endforeach ?>
	<?php endif ?>

	<!-- Stylesheets -->
	<?php echo css('assets/css/main.css') ?>
</head>
<body <?php if($page->template() == 'project'): ?>class="<?php echo $page->bkcolor() ?>"<?php endif ?>>
	<!--[if lt IE 10]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->