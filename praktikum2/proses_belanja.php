<?php 

$customer = $_POST['customer'];
$jumlah = $_POST['jumlah'];

if($_POST["produk"] == "TV" ){
    $harga = 4200000;
} elseif($_POST["produk"] == "Kulkas") {
    $harga = 3100000;
} elseif($_POST["produk"] == "Mesin Cuci") {
    $harga = 3800000;
}

if($_POST["produk"] == "TV"  ){
    $produk = "TV";
} elseif($_POST["produk"] == "Kulkas") {
    $produk = "Kulkas";
} elseif($_POST["produk"] == "Mesin Cuci" ) {
    $produk = "Mesin Cuci";
}

$total_belanja = $harga * $jumlah

?>