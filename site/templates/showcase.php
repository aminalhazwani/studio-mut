<?php snippet('header') ?>

<main class="main" role="main">

    <div class="showcase">
        <a class="showcase__close" href="<?php echo $site->url() ?>/projects">
            <span class="showcase__close--line"></span>
        </a>

        <div class="showcase__slider royalSlider rsDefault" <?php if($page->pagebkcolor() != ''): ?>style="background-color:<?php echo $page->pagebkcolor() ?>"<?php endif ?>>
            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
                <figure class="showcase__slider--slide" <?php if($image->slidebkcolor() != ''): ?>style="background-color:<?php echo $image->slidebkcolor() ?>"<?php endif ?>>
                    <img class="showcase__image--<?php echo $image->measure() ?>" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
                    <?php if($image->overtetext() != ' '): ?>
                        <figcaption class="showcase__image--text"><?php echo $image->overtext()->kirbytext() ?></figcaption>
                    <?php endif ?>
                </figure>
            <?php endforeach ?>
        </div>
    </div>

</main>