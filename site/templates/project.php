<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('menu-button') ?>
<?php snippet('navigation') ?>

<main class="project" role="main">
    <header class="project__header">
        <div class="project__header--meta">
            <h1 class="project__header--meta--title">
                <?php echo $page->title()->html() ?>
            </h1>
            <p class="project__header--meta--client"><?php echo $page->client() ?></p>
            <!-- <span class="project__header--meta--category"><?php echo $page->keywords() ?></span> -->
            <time class="project__header--meta--date" datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('M. Y') ?></time> ~
        </div>
        <div class="project__header--intro">
            <?php echo $page->intro()->kirbytext() ?>
        </div>
    </header>

    <article class="project__article">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <img class="project__article--image--<?php echo $image->measure() ?>" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
    <?php endforeach ?>
    </article>

    <!-- <nav class="nextprev cf" role="navigation">
    <?php if($prev = $page->prevVisible()): ?>
    <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
    <?php endif ?>
    <?php if($next = $page->nextVisible()): ?>
    <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
    <?php endif ?>
    </nav> -->
</main>

<?php echo js('assets/scripts/project.min.js') ?>
<?php snippet('footer') ?>