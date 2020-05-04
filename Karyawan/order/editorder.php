<!-- Breadcrumbs-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Menu Order</a>
        </li>
        <li class="breadcrumb-item active">Edit Order</li>
      </ol>
      <hr>
 <!-- Icon Cards-->
<div class="container">
  <h3>Form Edit Data Order</h3>
  <hr>
  <br>
  <?php
    include "koneksi.php";
    $order_id = $_GET['order_id'];

    $sql = mysqli_query($koneksi, "SELECT * FROM order_jemputan WHERE order_id='$order_id'");
    while ($hasil = mysqli_fetch_array($sql)) {
 ?>
 <div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Edit Data Order</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="#">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="id_user">id_user</label>
                                <input type="text" class="form-control" id="id_user" name="id_user" 
                                placeholder="id_user" value="<?php echo $hasil['id_user'] ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="no_order">No Order</label>
                                <input class="form-control" value="<?php echo $hasil['no_order'] ?>" name="no_order" readonly>
                            </div>
                            <div class="form-group">
                            <label>Tanggal Order</label>
                            <input class="form-control" value="<?php echo $hasil['tgl_order'] ?>" name="tgl_order" readonly>
                            </div>
                            <div class="form-group">
                                <label>Jam Jemput</label>
                                <input class="form-control" value="<?php echo $hasil['jam_jemput'] ?>" name="jam_jemput">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" value="<?php echo $hasil['status'] ?>" name="Status">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-success pull-right">Update</button>
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