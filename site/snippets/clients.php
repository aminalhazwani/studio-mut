<div class="clients">
	<p class="clients__headline">Studio Mut Clients</p>
	<?php $characters = range('A', 'Z'); ?>
	<?php foreach($characters as $character): ?>
		<div class="clients__character">
			<?php foreach($pages->find('/projects')->children() as $project): ?>
			<?php if(substr($project->client(), 0, 1) === $character): ?>
				<h3><?php echo $character ?></h3>
			<?php break; ?>
			<?php endif ?>
			<?php endforeach ?>

			<?php foreach($pages->find('/projects')->children() as $project): {
				$clients[] = $project->client();
			}
			$clients = array_unique($clients);
			?>
			<?php endforeach ?>

			<ul>
				<?php foreach($clients as $client): ?>
					<?php if(substr($client, 0, 1) === $character): ?>
						<li><?php echo html($client) ?></li>
					<?php endif?>
				<?php endforeach ?>
			</ul>
		</div>
	<?php endforeach ?>
</div>