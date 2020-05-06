<?php
$id = $_SESSION['id_user'];
 $ambil=$koneksi->query("SELECT * FROM user WHERE id_user='$id'");
 $data = mysqli_fetch_array($ambil);
 ?>
  <div id="page-wrapper">
 <div class="row">
          <div class="col-lg-12">
            <h1>DETAIL PROFIL<small>Profil Karyawan</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Profile</a></li>
              <li class="active"><i class="icon-file-alt"></i> detail</li>
            </ol>
          </div>
        </div><!-- /.row -->
</div><!-- /wrapper -->
 <div class="container">
<div class="row">
	<div class="col-md-3">
	</div>
        <div class="col-md-6">
            <div class="panel panel-info panel-center">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Data Profil</h3>
              </div>
              <div class="panel-body">
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
		<br>
		<br>
		<br>
		<p class="text-center">Apakah anda ingin update profile? <a href="index.php?page=uprofile">Update Profile</a> </p>
	</div>
</div></div>