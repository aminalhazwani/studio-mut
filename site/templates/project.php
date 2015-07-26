<?php snippet('head') ?>

  <header class="header header-secondary u-padd-top u-padd-btm">
    <div class="l-container">
      <a href="/">Studio Mut</a>
    </div>
  </header>

  <div>
    <?php foreach($page->files() as $image): ?>
    <figure>
      <img class="u-img-max" src="<?php echo $image->url() ?>">
    </figure>
    <?php endforeach ?>
  </div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <?php echo js('assets/js/vendor/vendors.min.js') ?>
  <?php if($page->template() == 'home'): ?>
    <?php echo js('assets/js/home.min.js') ?>
  <?php endif ?>
  <?php if($page->template() == 'about'): ?>
    <?php echo js('assets/js/about.min.js') ?>
  <?php endif ?>
  </body>
</html>
