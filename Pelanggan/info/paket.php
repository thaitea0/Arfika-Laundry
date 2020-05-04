<div class="container">
<div class="col-md-12">
	<div class="card">
		<div class="card-body">
			<div class="card-title"><h5>List Paket</h5></div>
            <!-- /.card-header -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th style="text-align: center;">No</th>
                  <th>Jenis Paket</th>
                  <th>Harga</th>
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
      
  </tr>
  <?php
      $i++;
      }
    ?>
 </tbody>
                <tfoot>
                	<tr>
                    <th style="text-align: center;">No</th>
                  <th>Jenis Paket</th>
                  <th>Harga</th>
                	</tr>
                </tfoot>
              </table>
		</div>
	</div>
</div></div>