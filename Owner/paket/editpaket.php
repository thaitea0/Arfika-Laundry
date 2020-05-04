<div class="container">
  <h3>Form Edit Data Paket Cucian</h3>
  <hr>
  <br>
  <?php
    include "koneksi.php";
    $paket_id = $_GET['paket_id'];

    $sql = mysqli_query($koneksi, "SELECT * FROM paket WHERE paket_id='".$paket_id."'");
    while ($hasil = mysqli_fetch_array($sql)) {
 ?>
 <div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Edit Data Paket Cucian</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="#">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="paket_id">ID Paket</label>
                                <input type="text" class="form-control" id="paket_id" name="paket_id" 
                                placeholder="paket_id" value="<?php echo $hasil['paket_id'] ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="nama_paket">Jenis Paket</label>
                                <input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="Nama Paket" value="<?php echo $hasil['nama_paket'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?php echo $hasil['harga'] ?>">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-success pull-right">Update</button>
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
    }
    ?>
    <?php
	if (isset($_POST['simpan'])){
        $paket_id     = mysqli_real_escape_string($koneksi,$_POST ['paket_id']);
        $nama_paket  = mysqli_real_escape_string($koneksi,$_POST ['nama_paket']);
        $harga  = mysqli_real_escape_string($koneksi,$_POST ['harga']);
        $sql          = "UPDATE paket SET nama_paket='$nama_paket', harga='$harga' WHERE paket_id='$paket_id'";
        $query        = mysqli_query($koneksi, $sql);
		if( $query){
			echo "<script>swal('Data Paket Cucian Berhasil Diupdate', '', 'success');</script>";
			echo "<meta http-equiv='refresh' content='1;url=index.php?page=paket'>";
		} else {
			echo "<script>swal({
				type: 'error',
				title: 'Update Gagal',
				text: 'Data Paket Cucian Gagal Diupdate',
				footer: '<a href>Perlu Bantuan?</a>'
              })</script>";
              echo "<meta http-equiv='refresh' content='1;url=index.php?page=paket'>";
            }
    mysqli_close($koneksi);
	}

?>