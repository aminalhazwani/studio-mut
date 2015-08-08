<?php $about = $pages->find('/about') ?>
<?php snippet('head') ?>
<div class="splash"></div>
<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="about">
  <div class="intro bg-blue u-sm-padd-double u-sm-padd-btm-none">
    <div class="l-container">
      <div class="h1 u-ta-center u-padd-top-double u-padd-btm-none u-sm-padd-double u-sm-padd-btm-none u-push-none fit">
        <?php echo $about->introtext()->kirbytext() ?>
      </div>
    </div>
  </div>

  <div id="contact" class="bg-blue u-padd-btm u-padd-top-double">
    <div class="l-container">
      <div class="g-row u-ta-center u-md-ta-lft u-sm-padd-btm u-sm-padd-top-double">
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
      <h2 class="h1 u-ta-center profile_name fit"><?php echo $image->fullname() ?></h2>
      <div class="g-row u-hide u-sm-blk u-md-padd-top-double">
        <div class="g g-sm-7 g-sm-off-4"><?php echo $image->bio()->kirbytext() ?></div>
      </div>
    </div>
    <?php endforeach ?>
  </div>

  <div class="profile u-padd-top u-sm-padd-top-double" style="background-image:url('content/1-about/martin.jpg')">
    <?php foreach($about->images()->filterBy('filename', '*=', 'martin') as $image): ?>
    <div class="l-container">
      <h2 class="h1 u-ta-center profile_name fit"><?php echo $image->fullname() ?></h2>
      <div class="g-row u-hide u-sm-blk u-md-padd-top-double">
        <div class="g g-sm-7"><?php echo $image->bio()->kirbytext() ?></div>
      </div>
    </div>
    <?php endforeach ?>
  </div>

  <div class="l-container u-padd-top-double">
    <div class="g-row u-sm-padd-top-double max-width">
      <div class="g g-sm-10">
        <section class="l-section">
          <h4>English</h4>
          <div class="indent">
            <?php echo $about->descriptioneng()->kirbytext() ?>
          </div>
        </section>
        <section class="l-section">
          <h4>Deutsch</h4>
          <div class="indent">
            <?php echo $about->descriptiondeu()->kirbytext() ?>
          </div>
        </section>
        <section class="l-section">
          <h4>Italiano</h4>
          <div class="indent">
            <?php echo $about->descriptionita()->kirbytext() ?>
          </div>
        </section>
      </div>
    </div>
    <div id="clients" class="g-row max-width u-padd-top-double">
      <div class="g g-sm-6 u-push-btm-double u-sm-padd-top">
        <section class="l-section">
          <h4>Mut Clients</h4>
          <?php snippet('clients') ?>
        </section>
      </div>
      <div class="g g-sm-6 u-sm-padd-top">
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
</main>

<?php snippet('footer') ?>