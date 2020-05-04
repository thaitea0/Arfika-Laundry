<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AFK-Laundry</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Arfika Laundry</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login1.php" >Owner</a>
                <a class="dropdown-item" href="login1.php">Karyawan</a>
                <a class="dropdown-item" href="login2.php">Pelanggan</a>
            
        </div>
      </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-info py-5 mb-5 " img src= "afk.png">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12" >
          <h1 class="display-4 text-white mt-5 mb-2">ARFIKA LAUNDRY</h1>
          <p class="lead mb-5 text-white-50">Arfika Laundry, terpercaya, bersih, rapi dan wangi ..
                Arfika Laundry bertempat di Jl. MangunKarso, Desa Toyoresmi, Kec.Ngasem
                Arfika Laundry dilengkapi fitur Cek Status Cucian..
                Kita dapat mengecek status cucian dengan mudah</p>
        </div>
      </div>
    </div>
  </header>

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
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; AFK-Laundry Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
