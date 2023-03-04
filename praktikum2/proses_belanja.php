<?php 

$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if ($produk = "TV"){
    $harga = 4200000;
}
if ($produk = "Kulkas"){
    $harga = 3100000;
}
if ($produk = "Mesin Cuci"){
    $harga = 3800000;
}

$total_belanja = $harga * $jumlah

?>