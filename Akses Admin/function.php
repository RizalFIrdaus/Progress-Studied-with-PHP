<?php 

$db = mysqli_connect("localhost","root","","belajarphp");

function query($query){
	
	global $db;
	$result = mysqli_query($db,$query);
	$data_mhs=[];

	while($mhs=mysqli_fetch_assoc($result)){

		$data_mhs[]=$mhs;

	}

return $data_mhs;
}


 ?>