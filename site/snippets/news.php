<?php foreach($pages->find('/news')->children()->visible() as $news): ?>
  <section style="background-color: <?php echo $news->bgcolor() ?>; color: <?php echo $news->txtcolor() ?>">
    <a class="u-blk" href="<?php echo $news->link() ?>" target="_black">
      <div class="news"> <!-- colors needed here? -->
        <div class="news_inner" data-text="<?php echo $news->title() ?>">
          <p class="u-push-btm-none">
            <?php echo $news->title() ?>
          </p>
        </div>
        <div class="news_tag" style="background-color: <?php echo $news->bgcolor() ?>; color: <?php echo $news->txtcolor() ?>; box-shadow: -50px 0px 50px 5px <?php echo $news->bgcolor() ?>;">
          <p class="u-push-btm-none"><?php echo $news->label() ?></p>
        </div>
      </div>
    </a>
  </section>
<?php endforeach ?>