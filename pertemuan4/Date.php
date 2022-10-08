<?php 
	// Menampilkan hari tanggal dan tahun 
// echo date("l, d-M-Y");

	// Menampilkan waktu , waktu mulai dari tahun 1970
// echo time();
	
	// Untuk mengetahui hari kedepannya
// echo date("d M Y",time()+60*60*24);

	// Untuk mengetahui hari disaat kita lahir
	// Formatnya mktime(jam,menit,detik,bulan,tanggal,tahun)
echo date("l d M Y", mktime(0,0,0,5,30,2000));


	// jam malam yaitu jam 22.00 - 05.00
// if (time() > 1540645405 && time() < 1540677805){
// 	echo "Malam";
// }
// 	//  jam pagi yaitu jam 05.00 - 12.00
// else if (time() > 1540677805 && time() < 1540677805+25200  ){
// 	echo "pagi";
// }
// 	// jam sore yaitu jam 12.00 - 22.00
// else{
// 	echo "Sore";
// }


 ?>