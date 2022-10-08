<?php 
require'funtions.php';
$family=query("SELECT * FROM family");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>HTML</title>
	<style>
		h1 {
			margin-left: 260px;
		}
	</style>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="20">
	<h1>Kartu Keluarga</h1>
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Umur</th>
		<th>Lahir</th>
		<th>Status</th>
		<th>Hubungan</th>
	</tr>
	<?php $i=1; ?>
	<?php foreach ($family as $f) :?>
	<tr>
		<td><?= $i;	 ?></td>
		<td><?= $f["nama"] ?></td>
		<td><?= $f["umur"] ?></td>
		<td><?= $f["lahir"] ?></td>
		<td><?= $f["bekerja"] ?></td>
		<td><?= $f["menikah"] ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach ?>
	</table>
</body>
</html>