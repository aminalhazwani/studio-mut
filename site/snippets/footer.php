  <?php if($page->template() == 'project'): ?>
    <?php echo js('assets/js/project.min.js') ?>
    <?php 
      $title = preg_replace('#[ -]+#', '-', $page->title()->html());
      $title = strtolower($title);
    ?>
    <?php $prevPage = $_SERVER['HTTP_REFERER']; ?>
    <script type="text/javascript">
      $( document ).ready(function() {
        var si = jQuery('.royalSlider').data('royalSlider');
        var prevSlide = (si.currSlideId === si.numSlides-1) ? si.currSlideId : undefined;
        si.ev.on('rsBeforeAnimStart', function(e) {
            if(prevSlide === si.currSlideId){
              <?php if(strpos($prevPage, $site->url()) !== false ): ?>

                <?php if($page->visibility() == 'homepage'): ?>
                  return window.location.href = '<?php echo $site->url() ?>#<?php echo $title ?>';
                <?php else: ?>
                  return window.location.href = '<?php echo $prevPage ?>#archive';
                <?php endif ?>

              <?php else: ?>

                <?php if($page->visibility() == 'homepage'): ?>
                  return window.location.href = '<?php echo $site->url() ?>#<?php echo $title ?>';
                <?php else: ?>
                  return window.location.href = '<?php echo $site->url() ?>#archive';
                <?php endif ?>

              <?php endif ?>
            }
            prevSlide = si.currSlideId;
        });
      });
    </script>
  <?php else: ?>
    <footer class="u-ta-center u-padd-huge u-bg-red">
      <div class="l-container ">
        <?php $sentences = yaml($site->footer()) ?>
        <?php foreach($sentences as $sentence): ?>
          <h2 class="h1 fit u-hide">
            <a href="mailto:hello@studiomut.com?subject=<?php echo $sentence['sentence'] ?>"><?php echo $sentence['sentence'] ?></a>
          </h2>
        <?php endforeach ?>
        <a href="mailto:hello@studiomut.com">hello@studiomut.com</a>
      </div>
    </footer>
    <?php if($page->template() == 'about'): ?>
      <?php echo js('assets/js/about.min.js') ?>
    <?php endif ?>
    <?php if($page->template() == 'default'): ?>
      <script type="text/javascript">
        $('body').keyup(function (e){
          window.location.href = '<?php echo $site->url() ?>';
        });
      </script>
    <?php endif ?>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <?php echo js('assets/js/main.min.js') ?>
  <?php endif ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', '<?php echo $site->trackingcode()->html() ?>', 'auto');
    ga('send', 'pageview');
  </script>
  </body>
</html>