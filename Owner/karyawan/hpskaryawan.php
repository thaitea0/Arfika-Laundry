<?php
    include("koneksi.php");
	if( isset($_GET['id_user'])){
		$id_user = $_GET['id_user'];
		$sql = "DELETE FROM user WHERE id_user='$id_user'";
		$query = mysqli_query($koneksi, $sql);
		if($query) {
			echo "<script>alert('Data Karyawan Berhasil Dihapus')</script>";
          echo "<script>window.location.href = 'index.php?page=karyawan'; </script>";
		} else {
			echo "<script>alert('Data Karyawan Gagal Dihapus')</script>";
          echo "<script>window.location.href = 'index.php?page=karyawan'; </script>";
        
		}
		mysqli_close($koneksi);
	}
?>
