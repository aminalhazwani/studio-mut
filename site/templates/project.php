<?php snippet('head') ?>
  
  <div class="splash"></div>

  <header class="header header-secondary u-padd-top-quarter u-padd-btm-quarter" style="color: <?php echo $page->headercolor() ?>">
    <div class="l-container">
      <a class="project_home" href="/">Studio Mut</a>
      <?php 
        $title = preg_replace('#[ -]+#', '-', $page->title()->html());
        $title = strtolower($title);
      ?>
      <?php $_SERVER['HTTP_REFERER']; ?>
      <?php if($_SERVER['HTTP_REFERER'] == 'http://localhost:9000/' ): ?>
        <a class="project_close" href="<?php echo $site->url() ?>#<?php echo $title ?>">Close</a>
      <?php else: ?>
        <a class="project_close" href="<?php echo $site->url() ?>">Close</a>
      <?php endif ?>
      <p class="project_count u-push-btm-none"></p>
    </div>
  </header>

  <div class="royalSlider rsDefault slider" style="background-color: <?php echo $page->bkcolor() ?>">
    <?php foreach($page->files()->sortBy('sort', 'asc') as $image): ?>
      <?php if($image->cover() != '1'): ?>

        <?php if($image->measure() == 'enclosed'): ?>
          <figure class="project_figure" style="background-color: <?php echo $image->slidebgcolor() ?>">
            <?php if($image->extension() == 'gif'): ?>
              <img class="project_image-enclosed" src="<?php echo $image->url() ?>">
            <?php else: ?>
              <img class="project_image-enclosed"
                    src="<?php echo thumb($image, array('width' => 1200), false) ?>" 
                    srcset="<?php echo thumb($image, array('width' => 600), false) ?> 600w,
                            <?php echo thumb($image, array('width' => 800), false) ?> 800w,
                            <?php echo thumb($image, array('width' => 1200), false) ?> 1200w,
                            <?php echo thumb($image, array('width' => 1600), false) ?> 1600w,
                            <?php echo thumb($image, array('width' => 2560), false) ?> 2560w"
                    sizes="100vw"
              >
            <?php endif ?>
            <?php if($image->overtext() != ''): ?>
              <figcaption class="project_caption" style="color:<?php echo $image->overtextcolor() ?>">
                <?php echo $image->overtext()->kirbytext() ?>
              </figcaption>
            <?php endif ?>
          </figure>
        <?php endif ?>

        <?php if($image->measure() == 'full'): ?>
          <figure class="project_figure">
            <img class="project_image-full" src="/assets/images/1px.png" style="background-image:url('<?php echo $image->url() ?>')">
            <?php if($image->overtext() != ''): ?>
              <figcaption class="project_caption" style="color:<?php echo $image->overtextcolor() ?>">
                <?php echo $image->overtext()->kirbytext() ?>
              </figcaption>
            <?php endif ?>
          </figure>
        <?php endif ?>

      <?php endif ?>
    <?php endforeach ?>
  </div>

  <?php echo js('assets/js/vendor/vendors.min.js') ?>
  <?php echo js('assets/js/project.min.js') ?>
  <?php $_SERVER['HTTP_REFERER']; ?>
    
      <script type="text/javascript">
        $( document ).ready(function() {
          var si = jQuery('.royalSlider').data('royalSlider');
          var prevSlide = (si.currSlideId === si.numSlides-1) ? si.currSlideId : undefined;
          si.ev.on('rsBeforeAnimStart', function(e) {
              console.log(prevSlide, si.currSlideId);
              if(prevSlide === si.currSlideId){
                <?php if($_SERVER['HTTP_REFERER'] == 'http://localhost:9000/' ): ?>
                  return window.location.href = 'http:<?php echo $site->url() ?>#<?php echo $title ?>';
                <?php else: ?>
                  return window.location.href = 'http:<?php echo $site->url() ?>';
                <?php endif ?>
              }
              prevSlide = si.currSlideId;
          });
        });
      </script>
    
  </body>
</html>
