<nav class="nav navMobile">
  <div class="navMobile_header u-padd-top-half u-padd-btm-half bg-black">
    <div class="l-container">
      <div class="navMobile_inner">
        <a href="<?php echo $site->url() ?>">Studio Mut</a>
        <span class="menu">Menu</span>
      </div>
    </div>
  </div>
  <div class="navMobile_items u-padd-btm-half bg-black">
    <div class="l-container">
      <?php $menuItems = yaml($site->menuItems()) ?>
      <?php foreach($menuItems as $menuItem): ?>
          <a class="navMobile_item fit" href="<?php echo $menuItem['hyperlink'] ?>"><?php echo $menuItem['label'] ?></a>
      <?php endforeach ?>
    </div>
  </div>
</nav>

<nav class="nav navDesktop bg-black u-padd-top-half u-padd-btm-half" role="navigation">
    <div class="l-container">
      <?php $menuItems = yaml($site->menuItems()) ?>
      <?php foreach($menuItems as $menuItem): ?>
          <a class="nav_item" href="<?php echo $menuItem['hyperlink'] ?>"><?php echo $menuItem['label'] ?></a>
      <?php endforeach ?>
    </div>
  </nav>