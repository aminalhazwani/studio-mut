<?php snippet('head') ?>
  
  <div class="splash"></div>

  <header class="header header-secondary u-padd-top-quarter u-padd-btm-quarter" style="color: <?php echo $page->headercolor() ?>">
    <div class="l-container">
      <a class="project_home" href="/">Studio Mut</a>
      <?php 
        $title = preg_replace('#[ -]+#', '-', $page->title()->html());
        $title = strtolower($title);
      ?>
      <?php $prevPage = $_SERVER['HTTP_REFERER']; ?>
      <?php if(strpos($prevPage, $site->url()) !== false ): ?>
        <?php if($page->visibility() == 'homepage'): ?>
          <a class="project_close" href="<?php echo $site->url() ?>#<?php echo $title ?>">Close</a>
        <?php else: ?>
          <a class="project_close" href="<?php echo $prevPage ?>#archive">Close</a>
        <?php endif ?>
      <?php else: ?>
        <?php if($page->visibility() == 'homepage'): ?>
          <a class="project_close" href="<?php echo $site->url() ?>#<?php echo $title ?>">Close</a>
        <?php else: ?>
          <a class="project_close" href="<?php echo $site->url() ?>#archive">Close</a>
        <?php endif ?>
      <?php endif ?>
      <p class="project_count u-push-btm-none"></p>
    </div>
  </header>

  <div class="royalSlider rsDefault slider" <?php if($page->bkcolor() != ''): ?>style="background-color: <?php echo $page->bkcolor() ?>"<?php endif ?>>
    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <?php if($image->video() == '1'): ?>
        <figure class="project_figure" <?php if($image->slidebgcolor() != ''): ?>style="background-color: <?php echo $image->slidebgcolor() ?>"<?php endif ?>>
          <video id="project_video" class="project_image-enclosed" loop>
            <source src="<?php echo $page->url() ?>/<?php echo $image->name() ?>.mp4" type="video/mp4">
          </video>
          <script>
            var is_ios = /(iPad|iPhone|iPod)/g.test( navigator.userAgent );
            if(is_ios) {
              console.log("is ios");
              $("#project_video").attr("poster", "<?php echo $image->url() ?>");
            }
          </script>
        </figure>
      <?php else: ?>
        <?php $cover = $page->image($page->cover()); ?>
        <?php if($image != $cover): ?>
          <?php if($image->measure() == 'enclosed'): ?>
            <figure class="project_figure" <?php if($image->slidebgcolor() != ''): ?>style="background-color: <?php echo $image->slidebgcolor() ?>"<?php endif ?>>
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
                <figcaption class="project_caption" <?php if($image->overtextcolor() != ''): ?>style="color:<?php echo $image->overtextcolor() ?>"<?php endif ?>>
                  <?php echo $image->overtext()->kirbytext() ?>
                </figcaption>
              <?php endif ?>
            </figure>
          <?php endif ?>
          <?php if($image->measure() == 'full'): ?>
            <figure class="project_figure">
              <img class="project_image-full" src="../assets/images/1px.png" style="background-image:url('<?php echo $image->url() ?>')">
              <?php if($image->overtext() != ''): ?>
                <figcaption class="project_caption" style="color:<?php echo $image->overtextcolor() ?>">
                  <?php echo $image->overtext()->kirbytext() ?>
                </figcaption>
              <?php endif ?>
            </figure>
          <?php endif ?>
        <?php endif ?>
      <?php endif ?>
    <?php endforeach ?>
  </div>

<?php snippet('footer') ?>