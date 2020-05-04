<!-- Breadcrumbs-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Menu Paket</a>
        </li>
        <li class="breadcrumb-item active">Kelola Paket</li>
      </ol>
        <br>

      <hr>

    <div class="row">
    <div class="col-md-3">
        <!-- general form elements -->
        <div class="card card-info">
            <div class="card-header">
                <h5 class="card-title card-info">Tambah Data Paket</h5>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST">
                <div class="card-body">
                    <div class="row">
                       
                            <div class="form-group">
                              <label>Nama</label>
                              <input class="form-control" name="nama_paket">
                            </div>
                            <div class="form-group">
                              <label>Harga</label>
                              <input class="form-control" name="harga">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-success pull-center"><i class="fa fa-plus"></i>Tambah</button>
                            </div>
                            <!-- /.form-group -->
                       
                    </div>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
        <!-- /.card -->
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

        <div class="col-md-9">
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">List Paket</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th style="text-align: center;">No</th>
                  <th>Jenis Paket</th>
                  <th>Harga</th>
                  <th style="text-align: center;" >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                   include "koneksi.php";
                   $i = 0 + 1;
                   $sql = mysqli_query($koneksi, "SELECT * FROM paket ORDER BY paket_id");
                   while ($hasil = mysqli_fetch_array($sql)) {
                ?>
  <tr>
      <td style="text-align: center;"><?php echo $i; ?></td>
      <td><?php echo $hasil['nama_paket']; ?></td>
      <td><?php echo $hasil['harga']; ?></td>
      <td>
          <a href="index.php?page=epaket&paket_id=<?php echo $hasil['paket_id']; ?>"
                          class="btn btn-success"><i class="fa fa-edit"></i> </a>
          <a href="index.php?page=hpaket&paket_id=<?php echo $hasil['paket_id']; ?>"
                       class="btn btn-danger delete-link"><i class="fa fa-trash"></i> </a>
      </td>
  </tr>
  <?php
      $i++;
      }
    ?>

  </tbody>
  </table>
<br>
<br>
<br>
</div>



<script>
    $(document).ready(function() {
     $('#table').DataTable();
  } );
</script>
      </div>
  
  