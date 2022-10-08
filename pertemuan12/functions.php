<?php 
$db = mysqli_connect("localhost","root","","belajarphp");



function query($query){
	global $db;
	$result = mysqli_query($db,$query);
	$mhsw =[];
	while ($data = mysqli_fetch_assoc($result)) {
		$mhsw[] =$data;
	}
	return $mhsw;
}


function insert($insert){
	global $db;
	$nama = htmlspecialchars($insert["nama"]);
	$npm = htmlspecialchars($insert["npm"]);
	$jurusan = htmlspecialchars($insert["jurusan"]);
	$universitas = htmlspecialchars($insert["universitas"]);
	$gambar = htmlspecialchars($insert["gambar"]);

	$query= "INSERT INTO mahasiswa VALUES ('','$nama','$npm','$jurusan','$universitas','$gambar')";

    mysqli_query($db,$query);


    return mysqli_affected_rows($db);
}

function delete($id){

	global $db;
	mysqli_query($db,"DELETE FROM mahasiswa WHERE id=$id");
	return mysqli_affected_rows($db);
}

function cari($key){

	$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$key%'  OR  npm LIKE '%$key%'  OR  jurusan LIKE '%$key%'  OR  universitas LIKE '%$key%' ";
	return query($query);
}


 ?>