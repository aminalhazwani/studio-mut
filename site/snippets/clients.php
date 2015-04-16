<div class="clients">
	<?php $characters = range('A', 'Z'); ?>
	<? foreach($characters as $character): ?>
	<div class="clients__character">
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
		<?php if(substr($project->client(), 0, 1) === $character): ?>
			<h3><?php echo $character ?></h3>
		<?php break; ?>
		<?php endif ?>
		<?php endforeach ?>
		<ul>
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
				<?php if(substr($project->client(), 0, 1) === $character): ?>
					<li><?php echo html($project->client()) ?></li>
				<?php endif?>
		<?php endforeach ?>
		</ul>
	</div>
	<?php endforeach ?>
</div>