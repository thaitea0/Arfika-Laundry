<div class="container">
<div class="col-md-12">
	<div class="card">
		<div class="card-body">
			<div class="card-title"><h5>List Order</h5></div>
			<table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="danger">
                  
                    <th>Nomor</th>
                    <th>Nama User</th>
                    <th>No Order</th>
                    <th>Tanggal Order</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                   
                  </tr>
                </thead>
                <tbody>
              <?php
              $no = 1;
              $user = $_SESSION['id_user'];//id adalah variabel untuk atribut id_user pada tabel user
              $query = mysqli_query($koneksi,"SELECT  order_jemputan.*,user.* FROM order_jemputan, user 
              	WHERE order_jemputan.id_user = user.id_user
              	AND user.id_user='$user' ORDER BY order_id DESC"); //query join - join antara 2 tabel yaitu tabel order_jemputan dan tabel user
              while ($data = mysqli_fetch_array($query)){
              ?>
                 <tr>
                 	<td><?php echo $no++ ?></td>
                 	<td><?php echo $data['nama'] ?></td>
                 	<td><?php echo $data['no_order'] ?></td>
                 	<td><?php echo $data['tgl_order'] ?></td>
                   <td><?php 
                   if ($data['status']=='Dalam Proses') {
                    echo '<label class="badge badge-warning">'.$data['status'].'</label>';
                   }elseif ($data['status']=='Dijemput') {
                      echo '<label class="badge badge-danger">'.$data['status'].'</label>';
                    }?>
                  </td>
                 	<td><?php echo $data['keterangan'] ?></td>
                 </tr>
              <?php } ?>
                </tbody>
                <tfoot>
                	<tr>
                    <th>Nomor</th>
                    <th>Nama User</th>
                    <th>No Order</th>
                    <th>Tanggal Order</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                	</tr>
                </tfoot>
              </table>
		</div>
	</div>
</div></div>