<?php foreach($pages->find('/news')->children()->visible() as $news): ?>
  <section <?php if($news->bgcolor() != ''): ?>style="background-color: <?php echo $news->bgcolor() ?><?php endif ?>">
    <div class="l-container u-padd-vert-half">
      <div class="news">
        <p class="news_text u-push-btm-none" <?php if($news->textcolor() != ''): ?>style="color: <?php echo $news->textcolor() ?><?php endif ?>"><?php echo $news->title() ?></p>
      </div>
    </div>
  </section>
<?php endforeach ?>