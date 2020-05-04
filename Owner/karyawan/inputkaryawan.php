<!-- Breadcrumbs-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Menu Karyawan</a>
        </li>
        <li class="breadcrumb-item active">Input Karyawan</li>
      </ol>
<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" name="username" placeholder="Username Sementara">
                            </div>
                            <div class="form-group">
                              <label>Password</label>
                              <input class="form-control" name="password" placeholder="Password Sementara">
                            </div>
                            <div class="form-group">
                              <label>Nama</label>
                              <input class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                              <label>Alamat</label>
                              <input class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                              <label>No. Telp</label>
                              <input class="form-control" name="no_telp">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary pull-right"><i class="fa fa-save"></i></button>
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>


<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];


    $sql = "INSERT INTO user(username,password,nama,alamat,no_telp,level) values ('$username','$password','$nama','$alamat','$no_telp','karyawan')";

$query = mysqli_query($koneksi, $sql);

if($query){
	echo '<script type="text/javascript">alert("Data Karyawan berhasil disimpan")</script>';
	echo "<meta http-equiv='refresh' content='1;url=index.php?page=karyawan'>";

  }else {
	echo "<scritp>alert('Data Karyawan Gagal di simpan');</script>";

}
}

?>
