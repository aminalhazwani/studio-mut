<?php snippet('head') ?>

  <header class="header header-secondary u-padd-top u-padd-btm">
    <div class="l-container">
      <a href="/">Studio Mut</a>
    </div>
  </header>

  <div class="slider royalSlider">
    <?php foreach($page->files() as $image): ?>
      <figure class="project_figure">
        <img class="project_image" src="<?php echo $image->url() ?>">
      </figure>
    <?php endforeach ?>
  </div>

  <?php echo js('assets/js/vendor/vendors.min.js') ?>
  <?php echo js('assets/js/project.min.js') ?>
  </body>
</html>
