<div class="clients">
	<?php $clients = $pages->find('/clients') ?>
	<?php echo $clients->text()->kirbytext() ?>
</div>