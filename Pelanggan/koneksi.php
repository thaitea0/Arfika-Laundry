<?php
$host = "localhost";
$user = "root";
$pass = "";
$DB = "laundry";
$koneksi = new mysqli("$host","$user","$pass","$DB");
if($koneksi -> connect_error){
	echo "<script>alert('Koneksi gagal ke Database');</script>".$koneksi->connect_error;
}//else{
	//echo "<script>alert('Berhasil Terkoneksi Database');</script>";
//}
?>