<?php
if(isset($_GET['page'])){//jika ada nama yang bernama page atau itu nanti akan dilakukan perulangan
	$page = $_GET['page'];

	switch ($page) {
		case 'logout': //judul halaman
			include "logout.php";	//file halaman
			break; //selesai
		case 'listorder':
			include "listorder.php";
			break;
		case 'karyawan':
			include "karyawan/karyawan.php";
			break;
		case 'tkaryawan':
			include "karyawan/inputkaryawan.php";
			break;
		case 'hkaryawan':
			include "karyawan/hpskaryawan.php";
			break;
		case 'paket':
			include "paket/paket.php";
            break;
        case 'tpaket':
            include "paket/tambahpaket.php";
            break;
        case 'epaket':
            include "paket/editpaket.php";
            break;
        case 'hpaket':
            include "paket/hapuspaket.php";
            break;
		case 'dashboard':
			include "dash.php";
			break;
		case 'laporan':
			include "laporan.php";
			break;
		case 'tampil': //judul halaman
				include "tampillaporan.php";	//file halaman
				break;
			
		}
	}else{
		include "halaman_dashboard/dashboard.php";
	}
	?>