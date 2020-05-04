<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Obat</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Nama</label>
                              <input class="form-control" name="nama_paket">
                            </div>
                            <div class="form-group">
                              <label>Harga</label>
                              <input class="form-control" name="harga">
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
$nama_paket = $_POST['nama_paket'];
$harga = $_POST['harga'];

$sql = "INSERT INTO paket (nama_paket, harga) values ('$nama_paket','$harga')";
$query = mysqli_query($koneksi, $sql);

if($query){
	echo '<script type="text/javascript">alert("Data berhasil disimpan")</script>';
	echo "<meta http-equiv='refresh' content='1;url=index.php?page=paket'>";

  }else {
	echo "<scritp>alert('Data Gagal di simpan');</script>";

}
}

?>
