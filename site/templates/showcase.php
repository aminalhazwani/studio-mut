<?php snippet('header') ?>

<main class="main" role="main">

<a class="slider__close" href="<?php echo $site->url() ?>">close</a>

<div class="slider royalSlider rsDefault" style="background-color:<?php echo $page->pagebkcolor() ?>">
  <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <figure class="figure" style="background-color:<?php echo $image->slidebkcolor() ?>">
      <img class="rsImg <?php echo $image->measure() ?>" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      <?php if($image->overtetext() != ' '): ?>
        <figcaption class="overtext"><?php echo $image->overtext()->kirbytext() ?></figcaption>
      <?php endif ?>
    </figure>
  <?php endforeach ?>
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
    keyboardNavEnabled: true,
    imageScalePadding: 30,
    deeplinking: {
      enabled: true,
      change: true
    }
  });
});
</script>