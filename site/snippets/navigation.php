<nav class="nav bg-black u-padd-top-half u-padd-btm-half" role="navigation">
  <div class="nav_inner">
    <?php $menuItems = yaml($site->menuItems()) ?>
    <?php foreach($menuItems as $menuItem): ?>
        <a class="nav_item" href="<?php echo $menuItem['hyperlink'] ?>"><?php echo $menuItem['label'] ?></a>
    <?php endforeach ?>
  </div>
</nav>