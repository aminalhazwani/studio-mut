<?php $about = $pages->find('/about') ?>
<?php snippet('head') ?>

<header class="header header-secondary">
  <?php snippet('navigation') ?>
</header>

<div class="intro bg-blue">
  <div class="l-container">
    <div class="h1 u-ta-center u-padd-double u-push-none">
      <?php echo $about->text()->kirbytext() ?>
    </div>
    <div class="g-row u-padd-btm">
      <div class="g g-md-3">
        <?php echo $about->firstcol()->kirbytext() ?>
      </div>
      <div class="g g-md-4">
        <?php echo $about->secondcol()->kirbytext() ?>
      </div>
      <div class="g g-md-5">
        <?php echo $about->thirdcol()->kirbytext() ?>
      </div>
    </div>
  </div>
</div>

<div class="profile u-padd-top u-sm-padd-top-double" style="background-image:url('content/1-about/thomas.jpg')">
  <?php foreach($about->images()->filterBy('filename', '*=', 'thomas') as $image): ?>
  <div class="l-container">
    <h2 class="h1 u-ta-center profile_name"><?php echo $image->fullname() ?></h2>
    <div class="g-row u-hide u-sm-blk">
      <div class="g g-sm-7 g-sm-off-4"><?php echo $image->bio()->kirbytext() ?></div>
    </div>
  </div>
  <?php endforeach ?>
</div>

<div class="profile u-padd-top u-sm-padd-top-double" style="background-image:url('content/1-about/martin.jpg')">
  <?php foreach($about->images()->filterBy('filename', '*=', 'martin') as $image): ?>
  <div class="l-container">
    <h2 class="h1 u-ta-center profile_name"><?php echo $image->fullname() ?></h2>
    <div class="g-row u-hide u-sm-blk">
      <div class="g g-sm-7"><?php echo $image->bio()->kirbytext() ?></div>
    </div>
  </div>
  <?php endforeach ?>
</div>

<div class="l-container u-padd-top-double">
  <div></div>
  <div class="g-row">
    <div class="g g-sm-6 u-push-btm-double">
      <section class="l-section">
        <h4>Mut Clients</h4>
        <?php snippet('clients') ?>
      </section>
    </div>
    <div class="g g-sm-6">
      <section class="l-section">
        <?php echo $about->social()->kirbytext() ?>
      </section>
      <section class="l-section">
        <?php echo $about->awards()->kirbytext() ?>
      </section>
      <section class="l-section">
        <?php echo $about->talks()->kirbytext() ?>
      </section>
      <section class="l-section">
        <?php echo $about->newsletter()->kirbytext() ?>
      </section>
      <section class="l-section">
        <?php echo $about->interships()->kirbytext() ?>
      </section>
      <section class="l-section">
        <?php echo $about->infomail()->kirbytext() ?>
      </section>
      <section class="l-section">
        <?php snippet('weather') ?>
      </section>
      <section class="l-section">
        <h4>Actual time at Mut</h4>
        <span id="time"></span>
      </section>
      <section class="l-section">
        <?php echo $about->warning()->kirbytext() ?>
      </section>
      <section class="l-section">
        <?php echo $about->credits()->kirbytext() ?>
      </section>
      <section class="l-section">
        <?php echo $about->legal()->kirbytext() ?>
      </section>
    </div>
  </div>
</div>

<?php snippet('footer') ?>