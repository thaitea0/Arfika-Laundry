<!-- Breadcrumbs-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Menu Order</a>
        </li>
        <li class="breadcrumb-item active">List Order</li>
      </ol>
 <!-- Icon Cards-->
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Order Jemputan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th style="text-align: center;">No</th>
                  <th>Nama User</th>
                  <th>No Order</th>
                  <th>Tanggal Order</th>
                  <th>Jam Jemput</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th style="text-align: center;" >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                   include "koneksi.php";
                   $i = 0 + 1;
                   $sql = mysqli_query($koneksi,"SELECT  order_jemputan.*,user.* FROM order_jemputan JOIN USER ON order_jemputan.`id_user`=user.`id_user`
                   WHERE user.level='pelanggan' ORDER BY order_id ASC"); //query join - join antara 2 tabel yaitu tabel order_jemputan dan tabel user
                   while ($data = mysqli_fetch_array($sql)) {
                ?>
  <tr>
  <td style="text-align: center;"><?php echo $i++; ?></td>
      <td><?php echo $data['nama'] ?></td>
              <td><?php echo $data['no_order'] ?></td>
              <td><?php echo $data['tgl_order'] ?></td>
              <td><?php if ($data['jam_jemput'] ==null ){
                echo 'Belum Dijemput';
              }else{
                echo $data['jam_jemput'];
              } ?></td>
              <td>
                <?php 
                  if ($data['status']=='Dalam Proses') {
                    echo '<label class="badge badge-warning">'.$data['status'].'</label>';
                  }
                  elseif ($data['status']=='Dijemput') {
                    echo '<label class="badge badge-success">'.$data['status'].'</label>';
                  }
                ?>
                </td>
              <td><?php echo $data['keterangan'] ?></td>
      <td>
      <a href="index.php?page=editorder&&order_id=<?php echo $data['order_id']; ?>" class="btn btn-warning">EDIT</a>
                <a href="index.php?page=ordertrx&&order_id=<?php echo $data['order_id']; ?>" class="btn btn-primary">TRANSAKSI</a>
      </td>
      <?php
                   }?>
  </tr>

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
  
  
