<?php
include 'Parsedown.php';
mkdir('./www/');
mkdir('./www/assets/');

$pages = [];
# Copy Assets
$handle = opendir('assets');
while (false !== ($entry = readdir($handle))) {
	if (in_array($entry,['.','..'])) continue;
	rename("./assets/{$entry}","./www/assets/{$entry}");
}

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
	
	list ($date, $title) = explode('__',$entry);
	$title = str_replace('.md','',$title);
	$title = str_replace('-',' ',$title);
	$title = ucwords($title);
	
	$datetime = new DateTime($date);
	$nice_date = $datetime->format("l jS F Y");
	$article = <<<HEREDOC
[<< Back](/)
# {$title}
Posted on *{$nice_date}*
{$article}
HEREDOC;
	
	$article = explode('--DATA--',$article)[0];
	
	$articles[$entry] = [
		'title' => $title,
		'date' => $date,
		'summary' => $summary,
		'article' => $parser->text($article),
	];
}

krsort($articles);
$html = [];
$html[] = <<<HTML
	<div class="u-theme-white u-margin-bottom--tiny">
		<input id="search" class="u-width--12-12 u-padding--small" autocomplete="off" placeholder="Search Term"/>
	</div>
HTML;

$count = 0;
$page = 0;
$articles_per_page = 10;
foreach ($articles as $file => $data) {	
	$count++;
	$pages[] = $filename = generatePage($file,$data['article']);
	$content = <<<HTML
	<div class="article u-padding--small  c-box--border  u-margin-bottom--tiny">
		<a href="./{$filename}" class="u-font u-font-size--delta title">{$data['title']}</a>
		<div class="u-margin-bottom--small">{$data['summary']}</div>
		<div class="u-align__text--right">
			<a href="./{$filename}" class="u-font c-box c-box--round u-theme-blue u-padding--tiny">Read Full Article</a>
		</div>
	</div>
HTML;
	$html[] = $content;
	$chunk[] = $content;  
	if ($count >= 10) {
		$count = 0;
		$page++;
		$chunk = implode('',$chunk);
		generatePage('index-'.$page,$chunk);
		$chunk = false;
	}
	
	
}
$html = implode('',$html);
generatePage('index',$html);

file_put_contents('www/CNAME','blog.chris-shaw.com');

function generatePage ($file, $raw_content=false){
	$body = file_get_contents('views/layout.tpl');
	$content = $raw_content ?: file_get_contents($file);
	
	$title = str_replace(['.md','.html','.tpl'],'',$file);
	if (strstr($title,'/')) {
		$title = explode('/', $title)[1];
	}
	
	if (strstr($file,'__')) {
		$title = explode('__', $title)[1];
	}

	$destination = "www/{$title}.html";
	
	$replace = [
		'{{title}}' => "Blog \ " .ucwords(str_replace('-',' ',$title)),
		'{{content}}' => $raw_content,
	];

	$body = str_replace(array_keys($replace), array_values($replace), $body);
	file_put_contents($destination, $body);

	return $title.'.html';
}
