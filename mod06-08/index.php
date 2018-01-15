<?php 	

require_once 'assets/lib/twelve_days.php';

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width,initial-scale=1.0, maxim-scale=1.0">
 	<meta 	http-equiv="X-UA-Compatible" content="IE=Edge">
 	<title><?php echo getTitle(); ?> Lyrics</title>

 	<link rel="stylesheet" type="text/css" href="	">
 </head>
 <body>

<br>

<h1 class="one">

 <?php 	

 		for ($counter = 0; $counter < 11; $counter++) {

				echo getLyrics($counter) . "<br>";

		};


 ?>

</h1>

<button onclick="document.getElementByClass('one').innerHTML = >





		<script type="text/javascript"></script>

 </body>
 </html>