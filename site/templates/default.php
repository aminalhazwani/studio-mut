<?php snippet('head') ?>

  <div class="splash"></div>

  <main class="default">

    <div class="l-container">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>