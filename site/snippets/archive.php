<aside class="aside u-padd-top-double u-padd-horz-half u-sm-padd-horz">
  <?php $menuItems = yaml($site->menuItems()) ?>
  <?php foreach($menuItems as $menuItem): ?>
    <?php if(strpos($menuItem['hyperlink'], '#archive') == true): ?>
      <h2 class="u-ta-center u-push-btm-double fit"><?php echo $menuItem['label'] ?></h2>
    <?php endif ?>
  <?php endforeach ?>
  <div class="g-row g-sm-clear-2 g-lg-clear-3">
    <?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
      <?php 
        $title = preg_replace('#[ -]+#', '-', $project->title()->html());
        $title = strtolower($title);
      ?>
      <article class="g g-sm-6 g-lg-4" id="<?php echo $title ?>">
        <?php foreach($project->images() as $image): ?>
          <?php if($image->cover() == '1'): ?>
            <a href="<?php echo $project->url() ?>">
              <?php if($image->extension() == 'gif'): ?>
                <img class="lazyload" src="<?php echo $image->url() ?>">
              <?php else: ?>
                <img class="lazyload" src="<?php echo thumb($image, array('width' => 1500), false) ?>">
              <?php endif ?>
            </a>
          <?php endif ?>
        <?php endforeach ?>
        <h5 class="u-fs-sm u-ta-center u-push-top-quarter u-push-btm"><a class="project_title" href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a></h2>
      </article>
    <?php endforeach ?>
  </div>
</aside>