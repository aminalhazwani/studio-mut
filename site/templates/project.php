<?php snippet('head') ?>
  
  <header class="header header-secondary u-padd-top u-padd-btm">
    <div class="l-container">
      <a href="/">Studio Mut</a>
      <a class="project_close" href="#">Close</a>
      <p class="project_count"></p>
    </div>
  </header>

  <div class="royalSlider rsDefault slider">
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
