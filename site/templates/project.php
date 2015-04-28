<?php snippet('head') ?>
    <?php snippet('about') ?>
    <?php snippet('clients') ?>
    <?php snippet('contact') ?>
    <?php snippet('contact') ?>
    <?php snippet('project-information') ?>
    
    <div class="overlay"></div>
    <button class="close__side-elements" type="button">close</button>

    <main id="main">
        <div class="showcase">
        <a class="showcase__close" href="<?php echo $site->url() ?>">
            <span class="showcase__close--line"></span>
        </a>
        <div class="showcase__slider royalSlider rsDefault" <?php if($page->pagebkcolor() != ''): ?>style="background-color:<?php echo $page->pagebkcolor() ?>"<?php endif ?>>
            <?php foreach($page->files()->sortBy('sort', 'asc') as $image): ?>
                <?php if($image->poster() == ''): ?>
                    <?php if($image->measure() == 'enclosed'): ?>
                        <?php if($image->type() != 'video'): ?>
                        <figure class="showcase__slider--slide" <?php if($image->slidebkcolor() != ''): ?>style="background-color:<?php echo $image->slidebkcolor() ?>"<?php endif ?>>
                            <img class="showcase__image--enclosed" src="<?php echo $image->url() ?>" alt="<?php if($image->caption() != ''): ?><?php echo $image->caption()->html() ?><?php else: ?><?php echo $page->title()->html() ?><?php endif ?>">
                            <?php if($image->overtext() != ''): ?>
                                <figcaption class="showcase__image--text"><?php echo $image->overtext()->kirbytext() ?></figcaption>
                            <?php endif ?>
                        </figure>
                        <?php else: ?>
                        <figure class="showcase__slider--slide" <?php if($image->slidebkcolor() != ''): ?>style="background-color:<?php echo $image->slidebkcolor() ?>"<?php endif ?>>
                            <video class="showcase__image--enclosed showcase__image--video" poster="<?php echo $image->name() ?>.jpg">
                                <source src="<?php echo $image->url() ?>" type="video/mp4">
                            </video>
                            <button class="button" type="button" style="position: absolute; z-index: 1">Play</button>
                        </figure>
                        <?php endif ?>
                    <?php endif ?>
                    <?php if($image->measure() == 'full'): ?>
                        <figure class="showcase__slider--slide" <?php if($image->slidebkcolor() != ''): ?>style="background-color:<?php echo $image->slidebkcolor() ?>"<?php endif ?>>
                            <img class="showcase__image--full" src="/assets/images/1px.png" alt="<?php if($image->caption() != ''): ?><?php echo $image->caption()->html() ?><?php else: ?><?php echo $page->title()->html() ?><?php endif ?>" style="background-image:url('<?php echo $image->url() ?>');">
                            <?php if($image->overtext() != ''): ?>
                                <figcaption class="showcase__image--text"><?php echo $image->overtext()->kirbytext() ?></figcaption>
                            <?php endif ?>
                        </figure>
                    <?php endif ?>
                <?php endif ?>
                
            <?php endforeach ?>
        </div>

        <div class="showcase__info">
            <span class="showcase__info--title">
                <?php echo $page->title()->html() ?>
            </span>
            <a class="showcase__info--more" href="#">Project Information</a>
        </div>
        </div>
    </main>
    <?php echo js('assets/scripts/vendor/vendor.min.js') ?>
    <?php echo js('assets/scripts/main.min.js') ?>
    </body>
</html>
