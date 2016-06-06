<?php foreach($pages->find('/news')->children()->visible() as $news): ?>
  <section <?php if($news->palette() == 'red'): ?>class="u-bg-red"<?php else: ?>class="u-bg-green"<?php endif ?>>
    <div class="news <?php if($news->palette() == 'red'): ?>news-red<?php else: ?>news-green<?php endif ?>">
      <div class="news_inner" data-text="<?php echo $news->title() ?>"><?php echo $news->title() ?></div>
      <div class="news_tag">
        <p class="u-push-btm-none"><?php echo $news->label() ?></p>
      </div>
    </div>
  </section>
<?php endforeach ?>