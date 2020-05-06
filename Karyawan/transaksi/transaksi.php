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
            <form action="index.php?page=keranjang" method="post">
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
				        <input type="text" name="harga" id="hargapaket"  class="form-control" placeholder="Harga Perkilo" readonly>
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
                            <?php $tanggal = date('Y-m-d') ?>
                        <input type="date" class="form-control" id="tanggal" placeholder="Tanggal"
                            value="<?php echo $tanggal ?>" readonly>
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
                  <th>Paket</th>
                  <th>Berat</th>
                  <th>Total</th>
                  <th style="text-align: center;" >Aksi</th>
                  </tr>
                </thead>
                <tbody>
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