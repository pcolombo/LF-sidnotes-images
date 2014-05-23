<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Images for Bookmarklet</title>

		<style type="text/css">
			div { margin: 0; padding: 0;} 
			img { margin-top: 5px; margin-bottom: 5px; } 
			pre {display: inline; font-weight: bold; }
			#page { margin: auto; }
			.box { border: 1px solid #000; margin-bottom: 10px; text-align: center;}
		</style>
	</head>
	<body>
	<div id="page" style="width: 600px;">
	
	<ul>
		<li><pre>img</pre> - all img tags (all images on the page)</li>
		<li><pre>.red</pre> - only the image with a class of red</li>
		<li><pre>#img2</pre> - only the image with an id of 'img2'
		<li><pre>#top > img</pre> -  all images inside the element with an id of 'top' (the top box)</li>
	</ul>

	<div id="top" class="box">
		<img src="http://placehold.it/350x150/900/fff/&text=Image+1" id="img1" class="red" />
		<img src="http://placehold.it/350x150/009/fff/&text=Image+2" id="img2" />
		<img src="http://placehold.it/350x150/090/fff/&text=Image+3" id="img3" />
	</div>
	<div id="bottom" class="box">
		<img src="http://placehold.it/350x150/990/fff/&text=Image+4" id="img4" />
	</div>
	
	</div> <!-- /#page -->
	</body>




