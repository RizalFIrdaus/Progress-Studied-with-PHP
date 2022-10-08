<?php 
require'functions.php';

$id = $_GET["id"];

$change = query ("SELECT  * FROM kartukeluarga WHERE id=$id")[0];
	if (isset($_POST["submit"])) {
		if ( update($_POST) > 0 ){
			echo "<script>
   			 	alert('Berhasil diubah');
   			 	document.location.href='index.php';
	          </script>";
		}
		else{
			echo "<script>
   			 	alert('Gagal diubah');
	          </script>";
		}
	}




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Update Data</title>
</head>
<body>
	<h1>Update Data Kartu Keluarga</h1>

	<form action="" method="post">
		<ul>
			<li><label for="nama">Nama :</label>
				<input type="hidden" name="id" value="<?= $change["id"] ?>">
				<input type="text" name="nama" id="nama" autocomplete=
				"off" value="<?= $change["nama"] ?>" >
			</li>
			<li><label for="nik">NIK :</label>
				<input type="text"  name="nik" id="nik" autocomplete=
				"off" value="<?= $change["nik"] ?>" >
			</li>
			<li><label for="kelamin">Jenis Kelamin :</label>
				<input type="text" name="kelamin"  id="kelamin" autocomplete=
				"off" value="<?= $change["kelamin"] ?>" >
			</li>
			<li><label for="lahir">Tempat Lahir :</label>
				<input type="text"  name="lahir" id="lahir" autocomplete=
				"off" value="<?= $change["lahir"] ?>" >
			</li>
			<li><label for="tanggal">Tanggal Lahir :</label>
				
				<input type="text" name="tanggal" id="tanggal" autocomplete=
				"off" value="<?= $change["tanggal"] ?>" >
			</li>
			<li><label for="agama">Agama :</label>
				<input type="text"  name="agama" id="agama" autocomplete=
				"off" value="<?= $change["agama"] ?>" >
			</li>
			<li><label for="foto">Foto :</label>
				<input type="text" name="foto" id="foto" autocomplete=
				"off" value="<?= $change["foto"] ?>" >
			</li>
			<br>

			<button type="submit" name="submit"> Update  </button>
			<button><a href="index.php">Back</a></button>
			
		</ul>
	</form>
</body>
</html>