<nav class="nav navMobile">
  <div class="navMobile_header u-padd-top-quarter u-padd-btm-quarter u-bg-black">
    <div class="l-container">
      <div class="navMobile_inner">
        <a href="<?php echo $site->url() ?>">Studio Mut</a>
        <span class="menu">Menu</span>
      </div>
    </div>
  </div>
  <div class="navMobile_items u-padd-btm-half u-bg-black">
    <div class="l-container">
      <?php $menuItems = yaml($site->menuItems()) ?>
      <?php foreach($menuItems as $menuItem): ?>
        <?php if(strpos($menuItem['hyperlink'], '#archive') == true): ?>
          <a class="navMobile_item fit-nav" href="#archive" <?php if($menuItem['target'] == '1'): ?>target="_blank"<?php endif ?>><?php echo $menuItem['label'] ?></a>
        <?php else: ?>
          <a class="navMobile_item fit-nav" href="<?php echo $menuItem['hyperlink'] ?>" <?php if($menuItem['target'] == '1'): ?>target="_blank"<?php endif ?>><?php echo $menuItem['label'] ?></a>
        <?php endif ?>
      <?php endforeach ?>
    </div>
  </div>
</nav>

<nav class="nav navDesktop u-bg-black u-padd-top-quarter u-padd-btm-quarter" role="navigation">
    <div class="l-container">
      <?php $menuItems = yaml($site->menuItems()) ?>
      <?php foreach($menuItems as $menuItem): ?>
        <?php if(strpos($menuItem['hyperlink'], '#archive') == true): ?>
          <a class="nav_item" href="#archive" <?php if($menuItem['target'] == '1'): ?>target="_blank"<?php endif ?>><?php echo $menuItem['label'] ?></a>
        <?php else: ?>
          <a class="nav_item" href="<?php echo $menuItem['hyperlink'] ?>" <?php if($menuItem['target'] == '1'): ?>target="_blank"<?php endif ?>><?php echo $menuItem['label'] ?></a>
        <?php endif ?>
      <?php endforeach ?>
    </div>
  </nav>