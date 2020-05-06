
<?php
$id = $_SESSION['id_user'];
$ambil=$koneksi->query("SELECT * FROM user WHERE id_user='$id'");
$data = mysqli_fetch_array($ambil);
?>
<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>PROFILE <small>UPDATE PROFILE</small></h1>
            <ol class="breadcrumb">
              <li><a href="halAdmin.php?page=dsp"><i class="fa fa-table"></i> Update Profil </a></li>
              <li class="active"><i class="fa fa-table"></i> </li>
            </ol>
          </div>
        </div><!-- /.row -->
        <br>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Update</h3>
				</div>
				<div class="panel-body">
					<form method="post">

						<div class="form-group">
							<label for=""> Username </label>
							<input type="text" value="<?php echo $data['username'] ?>" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label for=""> Password </label>
							<input type="text" value="<?php echo $data['password'] ?>" class="form-control" name="password" >
						</div>
						<div class="form-group">
							<label for=""> Nama </label>
							<input type="text" value="<?php echo $data['nama'] ?>" class="form-control" name="nama" >
						</div>
						<div class="form-group">
							<label for=""> Alamat </label>
							<input type="text" value="<?php echo $data['alamat'] ?>" class="form-control" name="alamat">
						</div>
						<div class="form-group">
							<label for=""> Nomor HP </label>
							<input type="text" value="<?php echo $data['no_telp'] ?>" class="form-control" name="no_telp" >
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name="update" value="UPDATE">
						</div>

				</form>
			
			<?php
			$i = $_SESSION['id_user'];

			if (isset($_POST['update'])){
				$i = $_SESSION['id_user'];
				$u = $_POST['username'];
				$p= $_POST['password'];
				$n = $_POST['nama'];
				$alam = $_POST['alamat'];
				$no = $_POST['no_telp'];

				$sql = "UPDATE user SET username='$u', password='$p', nama='$n', alamat='$alam', no_telp='$no' WHERE id_user='$i'";
				$query    = mysqli_query($koneksi, $sql);
				if($query){
					echo '<script type="text/javascript">alert("Data berhasil diedit")</script>';
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=profile'>";
				} else {
					echo '<script type="text/javascript">alert("Data gagal diedit")</script>';
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=profile'>";
				}
				mysqli_close($koneksi);
			}
			?></div></div>
			
