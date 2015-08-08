  <footer class="u-ta-center u-padd-huge bg-red">
    <div class="l-container ">
      <?php $sentences = yaml($site->footer()) ?>
      <?php foreach($sentences as $sentence): ?>
        <h2 class="h1 fit u-hide">
          <a href="mailto:hello@studiomut.com?subject=<?php echo $sentence['sentence'] ?>"><?php echo $sentence['sentence'] ?></a>
        </h2>
      <?php endforeach ?>
      <a href="mailto:hello@studiomut.com">hello@studiomut.com</a>
    </div>
  </footer>
  <?php if($page->template() == 'home'): ?>
    <?php echo js('assets/js/home.min.js') ?>
  <?php endif ?>
  <?php if($page->template() == 'about'): ?>
    <?php echo js('assets/js/about.min.js') ?>
  <?php endif ?>
  </body>
</html>