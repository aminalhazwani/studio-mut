<header>
  <div class="l-container">
    <img class="u-padd-top u-padd-btm u-sm-padd-top-double u-sm-padd-btm-double" src="assets/images/mut-logo.svg">
  </div>
  <nav class="bg-black u-padd-top u-padd-btm" role="navigation">
    <div class="l-container">
      <?php $menuItems = yaml($site->menuItems()) ?>
      <?php foreach($menuItems as $menuItem): ?>
          <a class="u-push-rgt" href="<?php echo $menuItem['hyperlink'] ?>"><?php echo $menuItem['label'] ?></a>
      <?php endforeach ?>
    </div>
  </nav>
  </div>
</header>