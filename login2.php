<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />
<style>
	body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #5F9EA0;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>

    <title>Login Pelanggan</title>
   </head>
   <body>
   	<div class="sidenav">
         <div class="login-main-text">
            <h2>ARFIKA LAUNDRY</h2>
            <p>Arfika Laundry, terpercaya, bersih, rapi dan wangi ..
                Arfika Laundry bertempat di Jl. MangunKarso, Desa Toyoresmi, Kec.Ngasem
                Arfika Laundry dilengkapi fitur Cek Status Cucian..
                Kita dapat mengecek status cucian dengan mudah</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" name="username" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                  <button type="submit" name="login" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
   </html>
   <?php
   session_start();
   include 'koneksi.php'; //memanggil koneksi ke database
   //if(isset($_SESSION["level"])){
   	//header(location:indexhome.php);
   	//exit;
   //}
   if(isset($_POST['login'])){ //jika ada post masuk yg bernama login atau data yg masuk dari form yang kita isi
   	$username = mysqli_real_escape_string($koneksi, htmlentities($_POST['username']));
   	$password = mysqli_real_escape_string($koneksi, htmlentities($_POST['password']));

   	$query = mysqli_query($koneksi, "SELECT * FROM user where password='$password' AND username='$username'");//mencari data yang ada di tabel user berdasarkan password dan username yang kita inginkan
   	if(mysqli_num_rows($query) == 0){//jika data yg diinputkan tidak ada atau 0 maka akan terjadi error
   		echo "<script>alert('Anda Belum Mempunyai Akun, Silahkan Melakukan Registrasi Terlebih Dahulu')</script>";
   		//echo  "<script>swal({
   		//	type: 'error',
   		//	title: 'Login Gagal',
   		//	text: 'Data akun tidak ada dalam database, Pastikan Username dan Password benar[!]',
   		//	footer: "<a href>Perlu Bantuan?</a>"

   		//})</script>";
   		echo "<meta http-equiv='refresh' content='1;url=login.php'>";

   	}else{
   		$data = mysqli_fetch_assoc($query);
   		//var_dump($data);
   		//if(password_verify($password, $data['password'])){
   			if($data['level'] == 'pelanggan'){
   				echo "<script>swal('Login Berhasil', 'Selamat Datang $username');</script>";
   						$_SESSION['id_user'] = $data['id_user'];
   						$_SESSION['username'] = $data['username'];
   						$_SESSION['password'] = $data['password'];
   						$_SESSION['nama'] = $data['nama'];
   						$_SESSION['alamat'] = $data['alamat'];
   						$_SESSION['no_telp'] = $data['no_telp'];
   						$_SESSION['level'] = $data['level'];
   						
              echo "<script>alert('Anda Berhasil Login Sebagai Pelanggan')</script>";
   						echo "<meta http-equiv='refresh' content='1;url=index.php'>";
   			
   			}else{
   				echo "<script>alert('Anda Belum Mempunyai Akun, Silahkan Melakukan Registrasi Terlebih Dahulu')</script>";
   				echo "<meta http-equiv='refresh' content='1;url=login.php'>";
   			}
   			
   		
   	
   }
}