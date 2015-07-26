<nav class="bg-black u-padd-top u-padd-btm nav <?php if($page->template() == 'about'): ?>nav-fixed<?php endif ?>" role="navigation">
  <div class="l-container">
    <?php $menuItems = yaml($site->menuItems()) ?>
    <?php foreach($menuItems as $menuItem): ?>
        <a class="u-push-rgt" href="<?php echo $menuItem['hyperlink'] ?>"><?php echo $menuItem['label'] ?></a>
    <?php endforeach ?>
  </div>
</nav>