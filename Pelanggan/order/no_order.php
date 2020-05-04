<?php

$query ="SELECT max(no_order) as maxKode FROM order_jemputan";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodeOrder = $data['maxKode'];

$noUrut = (int) substr($kodeOrder, 3, 3);

$noUrut++;

$char = "AFK";
$date = date('Ymd');
$kodeOrder = $char . sprintf("%03s", $noUrut) . $date;
?>