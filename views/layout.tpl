<html>
	<head>
		<title>{{title}}</title>
		<link rel="stylesheet" media="screen" href="https://toolkit.chris-shaw.com/css/toolkit.css" />
		<link rel="stylesheet" media="screen" href="/assets/github.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script>
		var xhr = new XMLHttpRequest();
		xhr.open( "GET", "https://menu.chris-shaw.com/", true);
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4) {
				var parser = new DOMParser();
				var newDom = parser.parseFromString(xhr.responseText,"text/html");	   	
				let nav = newDom.querySelector(".c-nav");
				document.querySelector('body').prepend(nav);
			}
		}
		xhr.send( null );
		
		var searchBox =  document.getElementById('search');
		if (typeof(searchBox) !='undefined') {
			searchBox.addEventListener("keyup", function(){
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
		}
	
		</script>
	
		<style>
			.hide {display: none;}
		</style>

	
	</head>

	<body>
		<div class="o-container u-margin-top--small markdown">
			{{content}}
		</div>
	</body>
</html>
