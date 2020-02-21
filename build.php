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
while (false !== ($entry = readdir($handle))) {
	if (in_array($entry,['.','..'])) continue;
	$pages[] = generatePage('data/'.$entry);
}



krsort($pages);
$html = [];
foreach ($pages as $file) {
	$title = explode('.',$file)[0];
	$title = ucwords(str_replace(['-'],' ',$title));
	$html[] = <<<HTML
	<a href="./{$file}">{$title}</a><br />
HTML;

}
$html = implode('',$html);
generatePage('index',$html);





print_r($pages);




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

