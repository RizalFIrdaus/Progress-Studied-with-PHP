<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coba Pengulangan Php pada HTML</title>
	<style>
		.warna{
			background-color: grey;

		}
	</style>
</head>
<body>

	<table border="2" cellpadding="20" cellspacing="0">
		<?php 
			$i=1;
			$j=1;
			
			for($i=1;$i<=4;$i++){
				echo "<tr>";
					for($j=1;$j<=4;$j++){
					echo "<td>Tabel $i.$j </td>";
					}
				echo "</tr>";


			}

		?>

	</table>

	<p></p>
	<p></p>



<!-- Untuk delimiter atau blok menulis pengulangan,
	simbol "{" diganti menjadi ":"
	simbol "}" diganti menjadi "endfor/endif/endwhile"
	lalu untuk "php echo" diganti menjadi "=" contohnya  ada pada line:42

 -->
	<table border="2" cellpadding="20" cellspacing="0" >
		<?php for($i = 1;$i <=4; $i++): ?>
			<?php  if($i%2==1): ?>
			<tr class="warna">
			<?php else : ?>
			<tr>
			<?php endif; ?>
				<?php for($j=1;$j<=4;$j++): ?>
					<td><?="Table $i.$j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>