<?php snippet('head') ?>
  
  <div class="splash"></div>

  <header class="header header-secondary u-padd-top-half u-padd-btm-half u-sm-padd-top u-sm-padd-btm">
    <div class="l-container">
      <a href="/">Studio Mut</a>
      <?php $_SERVER['HTTP_REFERER']; ?>
      <?php if($_SERVER['HTTP_REFERER'] == 'http://localhost:9000/' ): ?>
        <a class="project_close" href="javascript:history.back(1)">Close</a>
      <?php else: ?>
        <a class="project_close" href="<?php echo $site->url() ?>">Close</a>
      <?php endif ?>
      <p class="project_count u-push-btm-none"></p>
    </div>
  </header>

  <div class="royalSlider rsDefault slider">
    <?php foreach($page->files()->sortBy('sort', 'asc') as $image): ?>

      <?php if($image->measure() == 'enclosed'): ?>
        <figure class="project_figure">
          <img class="project_image project_image-enclosed" 
                src="<?php echo thumb($image, array('width' => 1200), false) ?>" 
                srcset="<?php echo thumb($image, array('width' => 600), false) ?> 600w,
                        <?php echo thumb($image, array('width' => 800), false) ?> 800w,
                        <?php echo thumb($image, array('width' => 1200), false) ?> 1200w,
                        <?php echo thumb($image, array('width' => 1600), false) ?> 1600w,
                        <?php echo thumb($image, array('width' => 2560), false) ?> 2560w"
                sizes="100vw"
          >
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
  <?php $_SERVER['HTTP_REFERER']; ?>
    <?php if($_SERVER['HTTP_REFERER'] == 'http://localhost:9000/' ): ?>
      <script type="text/javascript">
        $( document ).ready(function() {
          function goBack() {
            window.history.back();
          }
          var si = jQuery('.royalSlider').data('royalSlider');
          si.ev.on('rsBeforeMove', function(e, type, action) {
              console.log(si.currSlideId, type, si.numSlides);
              if(si.currSlideId == si.numSlides-1 && type == 'next') {
                goBack();
              }
          });
        });
      </script>
    <?php else: ?>
      <script type="text/javascript">
        $( document ).ready(function() {
          var si = jQuery('.royalSlider').data('royalSlider');
          si.ev.on('rsBeforeMove', function(e, type, action) {
              console.log(si.currSlideId, type, si.numSlides);
              if(si.currSlideId == si.numSlides-1 && type == 'next') {
                window.location.href = 'http://localhost:9000/';
              }
          });
        });
      </script>
    <?php endif ?>
  </body>
</html>
