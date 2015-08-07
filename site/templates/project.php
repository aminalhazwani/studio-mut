<?php snippet('head') ?>
  
  <header class="header header-secondary u-padd-top u-padd-btm">
    <div class="l-container">
      <a href="/">Studio Mut</a>
      <a class="project_close" href="<?php echo $site->url() ?>">Close</a>
      <p class="project_count"></p>
    </div>
  </header>

  <div class="royalSlider rsDefault slider">
    <?php foreach($page->files()->sortBy('sort', 'asc') as $image): ?>

      <?php if($image->measure() == 'enclosed'): ?>
        <figure class="project_figure">
          <img class="project_image project_image-enclosed" src="<?php echo $image->url() ?>">
          <?php if($image->overtext() != ''): ?>
            <figcaption class="project_caption <?php echo $image->overtextcolor() ?>">
              <?php echo $image->overtext()->kirbytext() ?>
            </figcaption>
          <?php endif ?>
        </figure>
      <?php endif ?>

      <?php if($image->measure() == 'full'): ?>
        <figure class="project_figure">
          <img class="project_image project_image-full" src="/assets/images/1px.png" style="background-image:url('<?php echo $image->url() ?>')">
          <?php if($image->overtext() != ''): ?>
            <figcaption class="project_caption <?php echo $image->overtextcolor() ?>">
              <?php echo $image->overtext()->kirbytext() ?>
            </figcaption>
          <?php endif ?>
        </figure>
      <?php endif ?>

    <?php endforeach ?>
  </div>

  <?php echo js('assets/js/vendor/vendors.min.js') ?>
  <?php echo js('assets/js/project.min.js') ?>
  </body>
</html>
