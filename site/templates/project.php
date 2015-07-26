<?php snippet('head') ?>

  <header class="header header-secondary u-padd-top u-padd-btm">
    <div class="l-container">
      <a href="/">Studio Mut</a>
    </div>
  </header>

  <div>
    <?php foreach($page->files() as $image): ?>
    <figure>
      <img class="u-img-max" src="<?php echo $image->url() ?>">
    </figure>
    <?php endforeach ?>
  </div>

<?php snippet('footer') ?>
