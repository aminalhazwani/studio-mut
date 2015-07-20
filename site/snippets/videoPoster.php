<?php foreach($page->files() as $file): {
	if ($file->type() == 'video') {
		$videos[] = $file;
	}
	if ($file->type() == 'image'){
		$images[] = $file;
	}
	// $results = array_intersect($videos, $images);
	$results = array_unique($images);
}
?><?php endforeach ?>
<?php foreach($results as $result): ?>
	<?php if($result->type() == 'image'): ?>
		<?php echo $result->url() ?>
	<?php endif ?>
	<?php break; ?>
<?php endforeach ?>