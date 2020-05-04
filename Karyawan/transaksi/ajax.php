<?php
//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "laundry");

//variabel id paket yang dikirimkan transaksi.php
$paket_id = $_GET['paket_id'];

//mengambil data
$query = mysqli_query($koneksi, "select * from paket where paket_id='1'");
$nama_paket = mysqli_fetch_array($query);
$data = array(
    'harga' => $nama_paket['harga'],
);
//tampil data
echo json_encode($data);
?>