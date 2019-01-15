<?php 

require_once 'App/init.php';

$produk1 = new Komik("Doraemon", "Ma'la Khoeriyah", "Suryadi Saputra", 500000, 100, 100);

$produk2 = new Game("Mobil Legen", "Anisa Bilqis", "Peni Pebriani", 250000, 50);


$cetakproduk = new cetakInfoProduk();
$cetakproduk->tambahProduk( $produk1);
$cetakproduk->tambahProduk( $produk2);
echo $cetakproduk->cetak();

echo "<hr>";

new coba();