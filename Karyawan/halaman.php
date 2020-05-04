<?php
if(isset($_GET['page'])){//jika ada nama yang bernama page atau itu nanti akan dilakukan perulangan
	$page = $_GET['page'];

	switch ($page) {
		case 'logout': //judul halaman
			include "logout.php";	//file halaman
			break; //selesai
		case 'listorder':
			include "order/listorder.php";
			break;
		case 'transaksi':
			include "transaksi/transaksi.php";
			break;
		case 'editorder':
			include "order/editorder.php";
			break;
		case 'ordertrx':
			include "order/ordertrx.php";
			break;
			
		}
	}else{
		include "halaman_dashboard/dashboard.php";
	}
	?>