<!DOCTYPE html>
<html>
	<head>
		<title>werer9 Webcam Server</title>
	</head>
	<body>
		<h1 class="h">Webcam Server</h1>
		<h2 class="h">Live Stream</h2>
		<img class="shrinkToFit" alt="http://localhost:8081/" src="http://172.17.19.171:8081/" height="720" width="1280">
		<br>
		<button id="start">Start</button>
		<button id="shut"> Shutdown</button>
		<h2 class="h">Images</h2>
		<!--Php Code-->
		<?php 
			$dirname = "cam/";
			$images = glob($dirname."*.jpg");
			foreach($images as $image) {
				echo '<img src="'.$image.'" /><br />';
			}		
		?>
	</body>
</html>
