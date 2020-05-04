<!-- Breadcrumbs-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Menu Karyawan</a>
        </li>
        <li class="breadcrumb-item active">Kelola Karyawan</li>
      </ol>
<div class="row">
        <div class="col-md-6">
          <a href="index.php?page=tkaryawan" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Karyawan</a>
        </div>
      </div>
      <br>
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th style="text-align: center;">No</th>
                  <th>Nama Karyawan</th>
                  <th>Alamat</th>
                  <th>No. Telp</th>
                  <th style="text-align: center;" >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                   include "koneksi.php";
                   $i = 0 + 1;
                   $sql = mysqli_query($koneksi, "SELECT * FROM user  WHERE level='karyawan'");
                   while ($hasil = mysqli_fetch_array($sql)) {
                ?>
  <tr>
      <td style="text-align: center;"><?php echo $i; ?></td>
      <td><?php echo $hasil['nama']; ?></td>
      <td><?php echo $hasil['alamat']; ?></td>
      <td><?php echo $hasil['no_telp']; ?></td>
      <td>
         
          <a href="index.php?page=hkaryawan&id_user=<?php echo $hasil['id_user']; ?>"
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
  
  