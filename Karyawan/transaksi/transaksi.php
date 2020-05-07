<?php include 'no_transaksi.php';
//print_r($_SESSION);
if($_SESSION == null){ //jika session null atau kosong harus login terlebih dahulu
	echo "<script>alert('Harus Login Terlebih Dahulu');</ script>";
	echo "<meta http-equiv='refresh' content='1;url=login.php'>";
}

?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Menu Transaksi</a>
        </li>
        <li class="breadcrumb-item active">Transaksi</li>
      </ol>
 <!-- Icon Cards-->
 <br>
 <hr>
<div class="row">
    <div class="col-md-3">
        <!-- general form elements -->
        <div class="card card-primary">
            <!-- form start -->
            <form action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="paket_id">Jenis Paket</label>
                        <select class="form-control" name="paket_id" id="paket_id" onchange="price(this.value)">
                            <option>- Pilih -</option>
                            <?php
                            $paket=mysqli_query($koneksi, "SELECT * FROM paket");?>
                            
						    <?php if(mysqli_num_rows($paket)) {?>
                            <?php 
                                $jsArrayhraga = "var prdharga = new Array();\n";
                                while($data= mysqli_fetch_array($paket)) {?>
		                    <option value="<?php echo $data["paket_id"]?>"> <?php echo $data["nama_paket"]?> </option>
                            <?php 
                        $jsArrayhraga .= "prdharga['" . $data['paket_id'] . "'] = {hargap:'" . addslashes($data['harga']) . "'};\n";
                        } ?><?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
				        <label for="harga"> Harga/Kg </label>
				        <input type="text" name="hargapaket" id="hargapaket"  class="form-control" placeholder="Harga Perkilo" readonly>
                        <input type="hidden" id="hargapaketasli">
			        </div>
                    <div class="form-group">
                        <label for="berat">Berat</label>
                        <input type="text" class="form-control" id="berat" name="berat" placeholder="Masukan Berat perkilo"
                            >
                    </div>
                    <div class="form-group">
				        <label for=""> Total </label>
				        <input type="text" name="total" id="total" value="" class="form-control" placeholder="Status Cucian">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                            <?php $tgl_masuk = date('Y-m-d') ?>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal"
                            value="<?php echo $tgl_masuk ?>" readonly>
                    </div>
                    <div class="form-group">
			            <label for="tgl_selesai">Tanggal Selesai</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                        </div>
                            <input type="date" class="form-control float-right" id="tgl_selesai" name="tgl_selesai" value="<?=date('Y-m-d')?>">
                        </div>
			        </div>
                    <div class="form-group">
                        <button type="submit" id="simpan" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>
                            Tambah</button>
                    </div>
            </form>


            <!--
            <div class="form-group row">
                <label for="kasir">Kasir</label>
                <input type="text" class="form-control" id="kasir" name="kasir" placeholder="Kasir"
                    value="<?php echo $_SESSION['nama'] ?>" readonly>
            </div>-->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<?php
include "koneksi.php";
//if($_SERVER["REQUEST_METHOD"] == "POST"){}
if(isset($_POST['simpan'])){
$paket_id = $_POST['paket_id'];
$hargapaketasli = $_POST['hargapaketasli'];
$berat = $_POST['berat'];
$total = $_POST['total'];
$tanggal = $_POST['tanggal'] ;
$tgl_selesai = $_POST['tgl_selesai'];


$sql = "INSERT INTO transaksi(paket_id, harga, berat, total, tgl_masuk, tgl_selesai) values ('$paket_id','$hargapaketasli', '$berat', '$total', '$tanggal', '$tgl_selesai')";
$query = mysqli_query($koneksi, $sql);

if($query){
	echo '<script type="text/javascript">alert("Data berhasil disimpan")</script>';
	echo "<meta http-equiv='refresh' content='1;url=index.php?page=transaksi'>";

  }else {
	echo "<scritp>alert('Data Gagal di simpan');</script>";

}
mysqli_close($koneksi);
}

?>

<div class="col-md-9">
    <div class="card card-info">
        <div class="card-header with-border">
            <h3 class="card-title"><i class="fa fa-list"></i> Data Transaksi</h3>
        </div>
        <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th style="text-align: center;">No</th>
                  <th>No Transaksi</th>
                  <th>Nama</th>
                  <th>Masuk</th>
                  <th>Selesai</th>
                  <th>Harga</th>
                  <th>Berat</th>
                  <th>Total</th>
                  <th style="text-align: center;" >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                   include "koneksi.php";
                   $i = 0 + 1;
                   $sql = mysqli_query($koneksi, "SELECT a.no_transaksi , b.nama_paket , a.tgl_masuk , a.tgl_selesai , a.harga , a.berat , a.total , a.status FROM transaksi AS a , paket AS b WHERE a.`paket_id`=b.`paket_id`");
                   while ($hasil = mysqli_fetch_array($sql)) {
                ?>
  <tr>
      <td style="text-align: center;"><?php echo $i; ?></td>
      <td><?php echo $hasil['no_transaksi']; ?></td>
      <td><?php echo $hasil['nama_paket']; ?></td>
      <td><?php echo $hasil['tgl_masuk']; ?></td>
      <td><?php echo $hasil['tgl_selesai']; ?></td>
      <td><?php echo $hasil['harga']; ?></td>
      <td><?php echo $hasil['berat']; ?></td>
      <td><?php echo $hasil['total']; ?></td>
      <td><?php echo $hasil['status']; ?></td>
     
  </tr>
  <?php
      $i++;
      }
    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th>No Transaksi</th>
                  <th>Nama</th>
                  <th>Masuk</th>
                  <th>Selesai</th>
                  <th>Paket</th>
                  <th>Berat</th>
                  <th>Total</th>
                  <th style="text-align: center;" >Aksi</th>
                  </tr>
                </tfoot>
                </table>

    </div>
</div>
<script src="js/jquery-1.11.3.min.js"></script>

<script type="text/javascript">

$("#berat").keyup(function(){
  var a = parseInt($("#berat").val());
  var b = parseInt($("#hargapaketasli").val());
  var c = a*b;
  $("#total").val(c);
});
 
 <?php echo $jsArrayhraga; ?>  
    function price(x){  
    document.getElementById('hargapaket').value = prdharga[x].hargap;
    document.getElementById('hargapaketasli').value = prdharga[x].hargap;   
   
    };
		</script>	