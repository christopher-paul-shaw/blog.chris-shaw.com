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
	<style>
		.hide {display: none;}
	</style>
	<script>
	document.getElementById("search").addEventListener("keyup", function(){
		let articles = document.querySelectorAll(".article");
	  	for (var i = 0; i < articles.length; i++) {
		    let current = articles[i]; 
		    let title = current.querySelectorAll("a")[0].innerHTML;  
		    let haystack = title.toLowerCase();
		    let needle = this.value.toLowerCase();
		    if(haystack.includes(needle)) {
		      current.classList.remove('hide');
		    }
		    else {
		      current.classList.add('hide');
		    } 
		}
	});
	</script>

HTML;


foreach ($articles as $file => $data) {	
	$pages[] = $filename = generatePage($file,$data['article']);
	$html[] = <<<HTML
	<div class="article u-padding--small  c-box--border  u-margin-bottom--tiny">
		<a href="./{$filename}" class="u-font u-font-size--delta title">{$data['title']}</a>
		<div class="u-margin-bottom--small">{$data['summary']}</div>
		<div class="u-align__text--right">
			<a href="./{$filename}" class="u-font c-box c-box--round u-theme-blue u-padding--tiny">Read Full Article</a>
		</div>
	</div>
HTML;
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
