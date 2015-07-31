<?php snippet('head') ?>

  <header class="header header-secondary u-padd-top u-padd-btm">
    <div class="l-container">
      <a href="/">Studio Mut</a>
    </div>
  </header>

  <div class="showcase__slider royalSlider rsDefault">
    <?php foreach($page->files()->sortBy('sort', 'asc') as $image): ?>
      <?php if($image->poster() == ''): ?>
      <?php if($image->measure() == 'enclosed'): ?>
        <?php if($image->type() != 'video'): ?>
          <figure class="showcase__slider--slide">
            <img class="showcase__image--enclosed" src="<?php echo $image->url() ?>">
            <?php if($image->overtext() != ''): ?>
              <figcaption class="showcase__image--text"><?php echo $image->overtext()->kirbytext() ?></figcaption>
            <?php endif ?>
          </figure>
        <?php else: ?>
          <figure class="showcase__slider--slide">
            <video class="showcase__image--enclosed showcase__image--video" poster="<?php echo $image->name() ?>.jpg">
              <source src="<?php echo $image->url() ?>" type="video/mp4">
            </video>
            <button class="button" type="button" style="position: absolute; z-index: 1">Play</button>
          </figure>
        <?php endif ?>
      <?php endif ?>
      <?php if($image->measure() == 'full'): ?>
        <figure class="showcase__slider--slide">
          <img class="showcase__image--full" src="../../assets/images/1px.png" style="background-image:url('<?php echo $image->url() ?>');">
            <?php if($image->overtext() != ''): ?>
              <figcaption class="showcase__image--text"><?php echo $image->overtext()->kirbytext() ?></figcaption>
            <?php endif ?>
        </figure>
      <?php endif ?>
      <?php endif ?>
    <?php endforeach ?>
  </div>

  <?php echo js('assets/js/vendor/vendors.min.js') ?>
  <?php if($page->template() == 'home'): ?>
    <?php echo js('assets/js/home.min.js') ?>
  <?php endif ?>
  <?php if($page->template() == 'project'): ?>
    <?php echo js('assets/js/project.min.js') ?>
  <?php endif ?>
  <?php if($page->template() == 'about'): ?>
    <?php echo js('assets/js/about.min.js') ?>
  <?php endif ?>
  </body>
</html>
