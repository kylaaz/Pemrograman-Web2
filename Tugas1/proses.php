<?php
// ambil data input
$customer = $_GET['customer'];
$produk = $_GET['produk'];
$jumlah = $_GET['jumlah'];

$harga = 0;
if ($produk === 'tv') {
    $harga = 4200000;
} else if ($produk === 'kulkas') {
    $harga = 3100000;
} else {
    $harga = 3800000;
}

$total =  number_format($harga * $jumlah, 0, "", ".");
