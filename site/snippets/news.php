<?php foreach($pages->find('/news')->children()->visible() as $news): ?>
  <section <?php if($news->palette() == 'red'): ?>class="bg-red"<?php else: ?>class="bg-green"<?php endif ?>>
    <div class="news <?php if($news->palette() == 'red'): ?>news-red<?php else: ?>news-green<?php endif ?> u-padd-vert-quarter">
      <p class="news_text u-push-btm-none"><?php echo $news->title() ?></p>
      <p class="news_tag u-push-btm-none u-padd-vert-quarter"><?php echo $news->label() ?></p>
    </div>
  </section>
<?php endforeach ?>