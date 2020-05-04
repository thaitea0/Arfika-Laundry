<?php include 'no_order.php';
//print_r($_SESSION);
if($_SESSION == null){ //jika session null atau kosong harus login terlebih dahulu
	echo "<script>alert('Harus Login Terlebih Dahulu');</ script>";
	echo "<meta http-equiv='refresh' content='1;url=login.php'>";
}
?>
<div class="container">
<div class="card card-info">
	<div class="card-body ">
		<div class="card-title"> <h5>Form Order </h5></div>
		<form action="" method="post">
			<div class="form-group">
				<label for=""> Nama Pelanggan </label>
				<input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'] ?>">
				<input type="text" name="nama" value="<?php echo $_SESSION['nama'] ?>" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label for=""> No. Order </label>
				<input type="text" name="no_order" value="<?php echo $kodeOrder ?>" class="form-control" readonly>
			</div>
			<div class="form-group">
				<?php
				$date = date('Y-m-d');
				?>
				<label for=""> Tanggal Order </label>
				<input type="text" name="tglorder" value="<?php echo $date ?>" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label for=""> Keterangan </label>
				<input type="text" name="keterangan" value="" class="form-control" placeholder="Masukkan Nama Paket">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="order" value="ORDER">
			</div>
		</form>
	</div>
</div></div>
<?php

if(isset($_POST['order'])){


$id_user = $_POST ['id_user'];
$no_order = $_POST['no_order'];
$tglorder = $_POST['tglorder'];
$keterangan = $_POST['keterangan'];
$status = 'Dalam Proses';

$sql = "INSERT INTO order_jemputan (id_user, no_order, tgl_order, keterangan, status) values ('$id_user', '$no_order', '$tglorder', '$keterangan', '$status' )";
$query = mysqli_query($koneksi, $sql);
if($query){
	echo "<script>alert('Order Berhasil di Buat, Silahkan Menunggu Penjemputan');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?page=orderjemputan'>";
} else {
	echo "<script>alert('Data gagal masuk');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?page=orderjemputan'>";
}
mysqli_close($koneksi);
}
?>
