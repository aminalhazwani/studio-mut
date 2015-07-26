  <footer class="l-container u-ta-center u-padd-huge">
    <?php $sentences = yaml($site->footer()) ?>
    <?php foreach($sentences as $sentence): ?>
      <h2 class="h1 fit">
        <a href="mailto:hello@studiomut.com?subject=<?php echo $sentence['sentence'] ?>"><?php echo $sentence['sentence'] ?></a>
      </h2>
    <?php endforeach ?>
    <a href="mailto:hello@studiomut.com">hello@studiomut.com</a>
  </footer>
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