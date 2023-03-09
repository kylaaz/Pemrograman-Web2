<?php

// Ambil data input
$customer = $_POST['customer'] ?? "Kosong";
$produk = $_POST['produk'] ?? "Kosong";
$jumlah = $_POST['jumlah'] ?? 0;

// Tentukan harga produk
$harga = 0;
if ($produk === 'tv') {
    $harga = 4200000;
} else if ($produk === 'kulkas') {
    $harga = 3100000;
} else {
    $harga = 3800000;
}

// Hitung total harga
$total =  number_format($harga * $jumlah, 0, "", ".");
