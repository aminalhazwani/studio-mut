<h4>Todays weather at Oswaldweg, Bolzano</h4>
<?php
	$rss = new DOMDocument();
	$rss->load('http://www.provinz.bz.it/wetter/suedtirolrss.asp');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 2;
	if ($feed == null) echo '<span>If you are seeing this it means that the Province RSS Weather Feed sucks.</span>';
	else
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo '<p>'.$description.'</p>';
	}
?>