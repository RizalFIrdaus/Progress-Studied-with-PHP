<?php 

$mahasiswa = [
	["\tMuhammad Rizal Firdaus","\t54418907","\tTeknik Informatika","\trizal.firdaus117@gmail.com"],
	["\tRian Arsenio","\t42413407","\tArsitektur","\trian@gmail.com"],
	["\tMaharani Dita","\t43419701","\tArsitektur","\tdita@gmail.com"],
	["\tYusuf Maulana","\t54418908","\tTeknik Informatika","\tseconducup@gmail.com"],
	["\tMiftahul Mubarak","\t54418900","\tTeknik Informatika","\tifelse@gmail.com"],
	["\tPandu Rahman","\t14418906","\tAkuntansi","\tpandu@gmail.com"],
	["\tMuhammad Ardianto","\t54418916","\tTeknik Informatika","\tnaruto@gmail.com"],
	["\tMuhammad Farhan","\t54418991","\tTeknik Informatika","\tfortnite@gmail.com"],
	["\tFikri","\t5441890","\tTeknik Informatika","\tfikri@gmail.com"],
	["\tBorkat","\t5449020","\tTeknik Informatika","\tBorkatritonga@gmail.com"],


];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Data Mahasiswa Gunadarma</title>
 	<style>
 		.spacing{
 			margin-top: 50px;
 		}
 		h1{
 			background-color: purple;
 			width:400px;
 			padding: 25px;
 			text-align: center;
 			border :3px solid black;
 			color: white;
 			margin-left: 31%;
 			letter-spacing: 3px;

 		}
 		ul{
 			background-color: #91F2A1; 
 			width: 25%;
 			float: left;
 			margin-left: 3%;
 			padding: 20px;
 			color: black;
 			border: 3px solid black;
 		}
 	</style>
 </head>
 <body>
 	<h1>Mahasiswa Gunadarma</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		
		<li>Nama    :<?= $mhs[0]; ?></li>
		<div><br></div>
		<li>NPM     :<?= $mhs[1]; ?></li>
		<div><br></div>
		<li>Jurusan :<?= $mhs[2]; ?></li>
		<div><br></div>
		<li>Email	:<?= $mhs[3]; ?></li>
		<div class="spacing"></div>

	</ul>
<?php endforeach ?>
 </body>
 </html>