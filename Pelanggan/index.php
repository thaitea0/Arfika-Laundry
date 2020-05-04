<?php
session_start();
//print_r($_SESSION)//untuk mengecek apakah session benar2 telah dikirim session nya 
include 'koneksi.php'
?>
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
            <a class="nav-link" href="index.php?page=dash">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login1.php">About</a>
                <a class="dropdown-item" href="index.php?page=paket">Paket</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Order
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?page=order">Tambah Order</a>
                <a class="dropdown-item" href="index.php?page=listorder">List Order</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Logout</a>
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

  <?php include 'halaman.php' ?>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-4 bg-dark ">
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
