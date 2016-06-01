<?php foreach($pages->find('/news')->children()->visible() as $news): ?>
  <section <?php if($news->palette() == 'red'): ?>class="bg-red"<?php else: ?>class="bg-green"<?php endif ?>>
    <div class="news <?php if($news->palette() == 'red'): ?>news-red<?php else: ?>news-green<?php endif ?> u-padd-vert-quarter">
      <div class="news_inner">
        <span class="news_text" data-text="<?php echo $news->title() ?>"><?php echo $news->title() ?></span>
        <span class="news_text" data-text="<?php echo $news->title() ?>"><?php echo $news->title() ?></span>
        <span class="news_text" data-text="<?php echo $news->title() ?>"><?php echo $news->title() ?></span>
        <span class="news_text" data-text="<?php echo $news->title() ?>"><?php echo $news->title() ?></span>
        <span class="news_text" data-text="<?php echo $news->title() ?>"><?php echo $news->title() ?></span>
        <span class="news_text" data-text="<?php echo $news->title() ?>"><?php echo $news->title() ?></span>
        <span class="news_text" data-text="<?php echo $news->title() ?>"><?php echo $news->title() ?></span>
      </div>
      <div class="news_tag">
        <p class="u-push-btm-none"><?php echo $news->label() ?></p>
      </div>
    </div>
  </section>
<?php endforeach ?>