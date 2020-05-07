<?php
$paket_id = $_SESSION['id_user'];
 $ambil=$koneksi->query("SELECT * FROM user WHERE id_user='$paket_id'");
 $data = mysqli_fetch_array($ambil);
 ?>
<div class="card">
	<div class="card-body">
		<div class="card-title">
			<h5><i class="fa fa-user"></i> Detail Profile</h5>
		</div>
		<div class="form-group">
			<label for=""> Nama </label>
			<input type="text" value="<?php echo $data['nama'] ?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for=""> Alamat </label>
			<input type="text" value="<?php echo $data['alamat'] ?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for=""> Nomor HP </label>
			<input type="text" value="<?php echo $data['no_telp'] ?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<a class="btn btn-primary" href="index.php?page=uprofile">UPDATE</a>
		</div>
	</div>
</div>