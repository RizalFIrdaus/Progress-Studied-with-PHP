<?php 
$db = mysqli_connect("localhost","root","","belajarphp");



function query($query){
	global $db;
	$result = mysqli_query($db,$query);
	$data_mhs =[];
	while ($data = mysqli_fetch_assoc($result)) {
		$data_mhs[] =$data;
	}
	return $data_mhs;
}


 ?>