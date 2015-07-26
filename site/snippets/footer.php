	<footer class="l-container u-ta-center u-padd u-sm-padd-double">
   <h2 class="h1">Do you piss under the shower?</h2> 
   <a href="mailto:hello@studiomut.com">hello@studiomut.com</a>
  </footer>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <?php if($page->template() == 'home'): ?>
    <?php echo js('assets/js/home.min.js') ?>
  <?php endif ?>
  <?php if($page->template() == 'about'): ?>
    <?php echo js('assets/js/about.min.js') ?>
  <?php endif ?>
  </body>
</html>