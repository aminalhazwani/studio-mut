<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <ul class="meta cf">
      <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('M. Y') ?></time></li>
      <li><b>Category:</b> <?php echo $page->category() ?></li>
      <li><b>Client:</b> <?php echo $page->client() ?></li>
    </ul>

    <div class="slider__container">
      <div class="slider royalSlider rsDefault">
        <!--
        <?php echo $page->text()->kirbytext() ?>
        -->

        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <img class ="rsImg" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        <?php endforeach ?>
      </div>
    </div>

    <!--
    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>
    -->

  </main>

  <script type="text/javascript">
    $(function() {
      $('.slider').royalSlider({
        autoScaleSlider:false,
        autoHeight: false,
        imageScalePadding: 0,
        keyboardNavEnabled: true
      });
    });
  </script>