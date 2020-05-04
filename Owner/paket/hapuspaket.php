<?php
	include("koneksi.php");
	if( isset($_GET['paket_id']) ){
		$id = $_GET['paket_id'];
		$sql = "DELETE FROM paket WHERE paket_id='$id'";
		$query = mysqli_query($koneksi, $sql);
		if($query) {
			echo "<script>alert('Data Paket Cucian Berhasil Dihapus')</script>";
          echo "<script>window.location.href = 'index.php?page=paket'; </script>";
		} else {
			echo "<script>alert('Data Paket Cucian Gagal Dihapus')</script>";
          echo "<script>window.location.href = 'index.php?page=paket'; </script>";
        }
        mysqli_close($koneksi);
    }
?>