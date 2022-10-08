<?php 
function salam($nama="Admin"){
 	// jam malam yaitu jam 22.00 - 05.00
	

if (time() > 1540645405 && time() < 1540645405+32400){
	return "Selamat malam , $nama";
}
	// jam pagi yaitu jam 05.00 - 12.00
else if (time() > 1540645405+32400 && time() < 1540677805+25200  ){
	return "Selamat pagi , $nama";
}
	// jam siang yaitu jam 12.00 - 17.00
else if (time()> 1540677805+25200  && time()< 1540677805+25200+18000 ){
	return "Selamat siang , $nama";
}
	// jam sore yaitu jam 17.00 - 22.00
else{
	return "Selamat sore , $nama";
}

}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1> <?= salam("Rizal"); ?></h1>
 </body>
 </html>