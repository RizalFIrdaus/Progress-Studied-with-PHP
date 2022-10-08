<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Kegajahan</title>
</head>
<body>
	<h1>FORM LOGIN</h1>
	<form action="" method="post">
		Masukan username:
		<input type="text" name="nama" > <button type="submit" name="submit">Kirim !</button>
		<br>

		
	</form>
	<?php if(isset($_POST["submit"])): ?>
	<h1>Selamat datang ,<?= $_POST["nama"]; ?></h1>
	<?php endif ?>
</body>
</html>