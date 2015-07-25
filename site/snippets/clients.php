<?php $characters = range('A', 'Z'); ?>
<?php foreach($characters as $character): ?>
	<section class="l-section">
		<?php foreach($pages->find('/projects')->children() as $project): ?>
		<?php if(substr($project->client(), 0, 1) === $character): ?>
			<h3 class="h1 u-push-btm-none"><?php echo $character ?></h3>
		<?php break; ?>
		<?php endif ?>
		<?php endforeach ?>

		<?php foreach($pages->find('/projects')->children() as $project): {
			$clients[] = $project->client();
		}
		$clients = array_unique($clients);
		?>
		<?php endforeach ?>

		<ul class="u-padd-none">
			<?php foreach($clients as $client): ?>
				<?php if(substr($client, 0, 1) === $character): ?>
					<li><?php echo html($client) ?></li>
				<?php endif?>
			<?php endforeach ?>
		</ul>
	</section>
<?php endforeach ?>