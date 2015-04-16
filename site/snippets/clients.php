<div class="clients">
	<?php $alphas = range('A', 'Z'); ?>
	<? foreach($alphas as $alpha): ?>
	<div class="clients__character">
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
		<?php if(substr($project->client(), 0, 1) === $alpha): ?>
			<h3><?php echo $alpha ?></h3>
		<?php break; ?>
		<?php endif ?>
		<?php endforeach ?>
		<ul>
		<?php foreach($pages->find('/projects')->children()->visible() as $project): ?>
				<?php if(substr($project->client(), 0, 1) === $alpha): ?>
					<li><?php echo html($project->client()) ?></li>
				<?php endif?>
		<?php endforeach ?>
		</ul>
	</div>
	<?php endforeach ?>
</div>