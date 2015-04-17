<?php snippet('head') ?>

    <main class="showcase" role="main">
        <a class="showcase__close" href="<?php echo $site->url() ?>">
            <span class="showcase__close--line"></span>
        </a>
        <div class="showcase__slider royalSlider rsDefault" <?php if($page->pagebkcolor() != ''): ?>style="background-color:<?php echo $page->pagebkcolor() ?>"<?php endif ?>>
            <?php foreach($page->files()->sortBy('sort', 'asc') as $image): ?>
                <?php if($image->measure() == 'enclosed'): ?>
                    <?php if($image->extension() != 'mp4'): ?>
                    <figure class="showcase__slider--slide" <?php if($image->slidebkcolor() != ''): ?>style="background-color:<?php echo $image->slidebkcolor() ?>"<?php endif ?>>
                        <img class="showcase__image--enclosed" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
                        <?php if($image->overtetext() != ''): ?>
                            <figcaption class="showcase__image--text"><?php echo $image->overtext()->kirbytext() ?></figcaption>
                        <?php endif ?>
                    </figure>
                    <?php else: ?>
                    <figure class="showcase__slider--slide" <?php if($image->slidebkcolor() != ''): ?>style="background-color:<?php echo $image->slidebkcolor() ?>"<?php endif ?>>
                        <video id="video" class="showcase__image--enclosed showcase__image--video" poster="">
                            <source src="<?php echo $image->url() ?>" type="video/mp4">
                        </video>
                        <?php if($image->overtetext() != ''): ?>
                            <figcaption class="showcase__image--text"><?php echo $image->overtext()->kirbytext() ?></figcaption>
                        <?php endif ?>
                    </figure>
                    <?php endif ?>
                <?php endif ?>
                <?php if($image->measure() == 'full'): ?>
                    <figure class="showcase__slider--slide" <?php if($image->slidebkcolor() != ''): ?>style="background-color:<?php echo $image->slidebkcolor() ?>"<?php endif ?>>
                        <img class="showcase__image--full" src="/assets/images/1px.png" alt="<?php echo $page->title()->html() ?>" style="background-image:url('<?php echo $image->url() ?>');">
                        <?php if($image->overtetext() != ''): ?>
                            <figcaption class="showcase__image--text"><?php echo $image->overtext()->kirbytext() ?></figcaption>
                        <?php endif ?>
                    </figure>
                <?php endif ?>
                
            <?php endforeach ?>
        </div>

        <div class="showcase__info">
            <span class="showcase__info--title">
                <?php echo $page->title()->html() ?>
            </span>
            <a class="showcase__info--more" href="#">Project Information</a>
        </div>
    </main>

    <!-- Scripts -->
    <?php echo js('assets/scripts/vendor/vendor.min.js') ?>
    <?php echo js('assets/scripts/main.min.js') ?>
    </body>
</html>
