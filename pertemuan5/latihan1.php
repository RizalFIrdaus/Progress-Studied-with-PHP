<?php 
$hewan = ["Pernah","sekali","aku","pergi","dari","jakarta","ke","surabaya"	];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
 		.kotak  {
			background-color: salmon;
			width: 50px;
			color: white;
			padding:20px;
			text-align: center;
			border:4px solid black;
			float: left;
			padding:20px;
			margin:5px;

 		}
 		.clear {
 			clear: both;
 		}
 		

 	</style>
 </head>
 <body>
 	<!-- Penglangan dengan for -->
 	<?php for ($i=0; $i < count($hewan); $i++): ?>
 		<div class="kotak"><?php echo $hewan[$i]; ?></div>
 	<?php endfor ?>
	


<div class="clear"></div>
	

	<!-- Pengulangan dengan foreach -->
	<?php foreach ($hewan as $binatang) : ?>
		<div class="kotak"><?=$binatang; ?></div>
	<?php endforeach ?>

	<div class="clear"></div>

	<?php foreach ($hewan as $binatang) : ?>
		<div class="kotak"><?=$binatang; ?></div>
	<?php endforeach ?>

 </body>
 </html>