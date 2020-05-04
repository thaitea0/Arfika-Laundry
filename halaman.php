<?php
if(isset($_GET['page'])){//jika ada nama yang bernama page atau itu nanti akan dilakukan perulangan
	$page = $_GET['page'];

	switch ($page) {
		case 'logout': //judul halaman
			include "logout.php";	//file halaman
			break; //selesai
		case 'login1':
			include "login1.php";
			break;
		case 'login2':
			include "login2.php";
			break;
		
			
		}
	}else{
		include "halaman_dashboard/dashboard.php";
	}
	?>