<aside class="aside">
  <?php $menuItems = yaml($site->menuItems()) ?>
  <?php foreach($menuItems as $menuItem): ?>
    <?php if(strpos($menuItem['hyperlink'], '#archive') == true): ?>
      <h2 class="u-ta-center u-push-top-double u-push-btm-double u-padd-btm-double fit"><?php echo $menuItem['label'] ?></h2>
    <?php endif ?>
  <?php endforeach ?>
  <div class="g-row g-sm-clear-2 g-lg-clear-3">
    <?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
    <?php if($project->visibility() == 'archive'): ?>
      <?php 
        $title = preg_replace('#[ -]+#', '-', $project->title()->html());
        $title = strtolower($title);
      ?>
      <article class="g g-sm-6 g-lg-4">
        <?php foreach($project->images() as $image): ?>
          <?php if($image->cover() == '1'): ?>
            <a href="<?php echo $project->url() ?>">
              <?php if($image->extension() == 'gif'): ?>
                <div class="embed embed-3-2">
                  <img class="lazyload" src="<?php echo $image->url() ?>">
                </div>
              <?php else: ?>
                <div class="aside_projectImage embed embed-3-2" style="background-image: url('<?php echo thumb($image, array('width' => 1000), false) ?>')"></div>
              <?php endif ?>
            </a>
          <?php endif ?>
        <?php endforeach ?>
        <h5 class="aside_projectTitle u-fs-xs u-push-top-half u-push-btm"><a href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a></h2>
      </article>
    <?php endif ?>
    <?php endforeach ?>
  </div>
</aside>