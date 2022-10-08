<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coba array</title>

	<style>
		.kotak{
			background-color:salmon;
			width: 100px;
			height: 100px;
			line-height: 100px;
			text-align: center;
			padding: 5px;
			margin: 50px;
			color: #fff; 
			
			float: left;
			transition: 1s;
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	<?php $box=[[1,2,3],[4,5,6],[7,8,9,10]]; 

	foreach($box as $angka):?>
		<?php foreach($angka as $int): ?>
			<div class="kotak"><?= $int  ?></div>
		<?php endforeach ?>
		<div class="clear"></div>
	<?php endforeach ?>
	
</body>
</html>