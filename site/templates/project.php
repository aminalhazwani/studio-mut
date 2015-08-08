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
          <img class="project_image project_image-enclosed" src="<?php echo thumb($image, array('width' => 1200, 'height' => 900, 'quality' => 70), false) ?>" sizes="100vw" 
                srcset="<?php echo thumb($image, array('width' => 600, 'height' => 400, 'quality' => 70), false) ?> 600w,
                        <?php echo thumb($image, array('width' => 800, 'height' => 600, 'quality' => 70), false) ?> 800w,
                        <?php echo thumb($image, array('width' => 1200, 'height' => 900, 'quality' => 70), false) ?> 1200w,
                        <?php echo thumb($image, array('width' => 1600, 'height' => 1200, 'quality' => 70), false) ?> 1600w,
                        <?php echo thumb($image, array('width' => 2560, 'height' => 1500, 'quality' => 70), false) ?> 2560w">
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
