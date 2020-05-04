<!DOCTYPE html>
<html lang="en">
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <style>
    .divider-text {
      position: relative;
      text-align: center;
      margin-top: 15px;
      margin-bottom: 15px;
    }
    .divider-text span {
      padding: 7px;
      font-size: 12px;
      position: relative;   
      z-index: 2;
    }
    .divider-text:after {
      content: "";
      position: absolute;
      width: 100%;
      border-bottom: 1px solid #ddd;
      top: 55%;
      left: 0;
      z-index: 1;
    }

    .btn-facebook {
      background-color: #405D9D;
      color: #fff;
    }
    .btn-twitter {
      background-color: #42AEEC;
      color: #fff;
    }
  </style>
  <div class="container">
    <br>  <p class="text-center"><a href="index.php" class="text-info">ARFIKA LAUNDRY</a></p>
    <hr>





    <div class="card bg-info">
      <article class="card-body mx-auto" style="max-width: 400px;">
       <h4 class="card-title mt-3 text-center">FORM REGISTRASI</h4>
       <p class="text-center">Lakukan Pendaftaran atau Registrasi Akun</p>

       <p class="divider-text">
        <span class="bg-light"></span>
      </p>
      <form method="POST">
       <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name="username" class="form-control" placeholder="Username" type="text">
      </div> <!-- form-group// -->

      <div class="form-group input-group">
       <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
      </div>
      <input name="nama" class="form-control" placeholder="Nama" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
     <div class="input-group-prepend">
      <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
    <select class="custom-select" style="max-width: 120px;">
      <option selected="">+62</option>

    </select>
    <input name="no_telp" class="form-control" placeholder="Phone number" type="text">
  </div> <!-- form-group// -->
  <div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text"> <i class="fa fa-home"></i> </span>
    </div>
    <input name="alamat" class="form-control" placeholder="Alamat" type="text">
  </div> <!-- form-group// -->
  <div class="form-group input-group">
   <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
  </div>
  <input name="password" class="form-control" placeholder="Create password" type="password">
</div>                                      
<div class="form-group">
  <button type="submit" class="btn btn-secondary btn-block"> Daftar </button>
</div>     
<p class="text-center">Sudah terdaftar? <a href="" class="text-light">Log In</a> </p>                                                                 
</form>
</article>
</div> </div>
</div> 
<!--container end.//-->

<br><br><!-- card.// -->
<?php

if(isset($_POST['buat'])){

  include 'koneksi.php';
  $u = $_POST['username'];
  $p = $_POST['password'];
  $n = $_POST['nama'];
  $a = $_POST['alamat'];
  $no = $_POST['no_telp'];


  $sql = "INSERT INTO user(username,password,nama,alamat,no_telp,level) values ('$u','$p','$n','$a','$no','pelanggan')";
  $query = mysqli_query($koneksi, $sql);
  if($query){
          echo '<script type="text/javascript">alert("Data berhasil diUPDATE")</script>';
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=login'>";
        } else {
          echo '<script type="text/javascript">alert("Data gagal diedit")</script>';
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=register'>";
        }
    mysqli_close($koneksi);
    }
?>
