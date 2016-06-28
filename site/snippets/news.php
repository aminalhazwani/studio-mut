<?php foreach($pages->find('/news')->children()->visible() as $news): ?>
  <section style="background-color: <?php echo $news->bgcolor() ?>; color: <?php echo $news->txtcolor() ?>">
    <a class="u-blk" href="<?php echo $news->link() ?>" target="_black">
      <div class="news">
        <div class="news_inner" data-text="<?php echo $news->title() ?>">
          <p class="u-push-btm-none">
            <?php echo $news->title() ?>
          </p>
        </div>
        <?php 
          $title = $news->title()->html();
          $title = strtolower($title);
          $title = preg_replace("/[^a-z0-9_\s-]/", "", $title);
          $title = preg_replace("/[\s-]+/", " ", $title);
          $title = preg_replace("/[\s_]/", "-", $title);
        ?>
        <style>
          .news_tag-<?php echo $title ?> {
            background-color: <?php echo $news->bgcolor() ?>; 
            color: <?php echo $news->txtcolor() ?>; 
            box-shadow: -10px 0px 20px 20px <?php echo $news->bgcolor() ?>;
          }
          @media screen and (min-width: 452px) {
            .news_tag-<?php echo $title ?> {
              box-shadow: -10px 0px 40px 40px <?php echo $news->bgcolor() ?>;
            }
          }
        </style>
        <div class="news_tag news_tag-<?php echo $title ?>">
          <p class="u-push-btm-none"><?php echo $news->label() ?></p>
        </div>
      </div>
    </a>
  </section>
<?php endforeach ?>