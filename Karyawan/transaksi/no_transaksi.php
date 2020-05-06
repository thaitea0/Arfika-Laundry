<?php

$query ="SELECT max(no_transaksi) as maxKode FROM transaksi";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodeOrder = $data['maxKode'];

$noUrut = (int) substr($kodeOrder, 3, 3);

$noUrut++;

$char = "AFKTrx";
$date = date('Ymd');
$kodeOrder = $char . sprintf("%03s", $noUrut) . $date;
?>