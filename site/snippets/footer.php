	<footer>
		<div class="footer__brand">
			<h2>Studio MUT</h2>
			<p><?php echo $site->description()->html() ?></p>
		</div>
		<div class="footer__address">
			<h3>Visit us</h3>
			<p><?php echo $site->street()->html() ?><p>
			<p><?php echo $site->city()->html() ?></p>
			<p><?php echo $site->country()->html() ?></p>
		</div>
		<div class="footer__contact">
			<h3>Contact</h3>
			<?php echo $site->contact()->kirbytext() ?>
			<h3>Interships</h3>
			<?php echo $site->interships()->kirbytext() ?>
			</p>
		</div>
		<div class="footer__credit">
			<p><?php echo $site->copyright()->html() ?></p>
			<p>Made by Amin</p>
		</div>
	</footer>
	<?php echo js('assets/scripts/main.min.js') ?>
	</body>
</html>