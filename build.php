<?php

include 'Parsedown.php';
mkdir('./www/');

$pages = [];
/*
# Build Pages
$handle = opendir('views');
while (false !== ($entry = readdir($handle))) {
	if (in_array($entry,['.','..','layout.tpl'])) continue;
	$pages[] = generatePage('views/'.$entry);
}
 */
# Convert Posts To Pages
$handle = opendir('data');
$parser = new Parsedown();

while (false !== ($entry = readdir($handle))) {
	if (in_array($entry,['.','..'])) continue;	
	$content = file_get_contents('data/'.$entry);

	$parts = explode('--PAGE--',$content);

	if(isset($parts[1])) {
		$article = $parts[1];
		$summary = $parts[0];
	}
	else {
		$article = $parts[0];
		$summary = '';
	}

	$title = explode('.',$entry)[0];
	$title = explode('__',$title)[1];
	$title = str_replace('-',' ',$title);
	$title = ucwords($title);
	$articles[$entry] = [
		'title' => $title, 
		'summary' => $parser->text($summary),
		'article' => $parser->text($article),
	];
}

krsort($articles);
$html = [];
foreach ($articles as $file => $data) {	
	$pages[] = $filename = generatePage($file,$data['article']);
	$html[] = <<<HTML
	<div class="u-padding--small  c-box--border u-theme-white">
		<a href="./{$filename}" class="u-font">{$data['title']}</a>
	</div>
HTML;
}
$html = implode('',$html);
generatePage('index',$html);

file_put_contents('www/CNAME','blog.chris-shaw.com');

function generatePage ($file, $raw_content=false){

	$body = file_get_contents('views/layout.tpl');
	$content = $raw_content ?: file_get_contents($file);
	
	$title = explode('.', $file)[0];
	if (strstr($title,'/')) {
		$title = explode('/', $title)[1];
	}
	
	if (strstr($file,'__')) {
		$title = explode('__', $title)[1];
	}

	$destination = "www/{$title}.html";

	$parsedown = new Parsedown();

	$replace = [
		'{{title}}' => $title,
		'{{content}}' => $raw_content ?: $parsedown->text($content),
	];

	$body = str_replace(array_keys($replace), array_values($replace), $body);
	file_put_contents($destination, $body);

	return $title.'.html';
}

