
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5" >
        <h2 id='about'>Mengapa Arfika Laundry ?</h2>
        <hr>
        <p>Arfika Laundry adalah Laundry rumahan yang didirikan pada tahun 2018. Meskipun belum lama didirikan, Arfika Laundry mendapat penilaian baik dari pelanggan. Semakin hari jumlah pelanggan pada Arfika Laundry semakin meningkat dan banyak pelanggan yang menjadikan Arfika Laundry sebagai jasa laundry tetap mereka.</p>
        <p>Mengapa memilih Arfika Laundry? Arfika Laundry memberikan pelayanan terbaik bagi para pelanggan. Cucian yang bersi, rapi dan wangi menjadi hal terpenting pada Arfika Laundry. Selain itu, Arfika Laundry berpedoman bahwa kepuasan pelanggan adalah hal yang paling utama. Arfika Laundry juga menerapkan prinsip tepat waktu dan bersikap ramah kepada siapapun.</p>
        <p>Jadi jika ingin mendapatkan pelayanan terbaik jasa Laundry ya pasti ARFIKA LAUNDRY pilihannya !!</p>
      </div>
      <div class="col-md-4 mb-5">
        <h2 href="#kontak">Info Kontak</h2>
        <hr>
        <address>
          <strong>Arfika Laundry</strong>
          <br>64182, Desa Toyoresmi
          <br>Kec.Ngasem, Kab. Kediri
          <br>
        </address>
        <address>
          <abbr title="Phone">Phone:</abbr>
          +62 812-2791-1894
          <br>
          <abbr title="Email">Email:</abbr>
          <a href="mailto:#">dwisanti0319@gmail.com</a>
        </address>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body alert-info">
                        <h4 class="card-title"><i class="fa fa-info"></i> Cara Meminta Penjemputan</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Silahkan Login Terlebih Dahulu.</li>
                            <li class="list-group-item">2. Pilih Paket Cucian Penjemputan.</li>
                            <li class="list-group-item">3. Mengisi Form Penjemputan.</li>
                            <li class="list-group-item">4. Menunggu Cucian Diantar.</li>
                            <li class="list-group-item">5. Selesai.</li>
                            <br>
                            <li>
                            <input type="submit" class="btn btn-success" name="order" value=">> New Order" href="order/tambahorder.php">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body alert-info">
                        <h4 class="card-title"><i class="fa fa-info-circle"></i> Info Paket Laundry</h4>
                        <p class="card-text"><i class="fa fa-list"></i> List Daftar Paket Arfika Laundry</p>
                        <ul class="list-group">

                            <?php 
                            include 'koneksi.php';
                                $query = mysqli_query( $koneksi, "SELECT * FROM paket");
                                $jumlah = mysqli_num_rows($query);
                                while ($data = mysqli_fetch_array($query)){
                                    ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $data ['nama_paket']?>
                                <span class="badge alert-info badge-pill"> Rp. <?php echo number_format ($data['harga']) ?></span>
                            </li>
                            <?php

                                }
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    <!-- /.row -->

  </div>