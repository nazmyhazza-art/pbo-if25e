<?php

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;
}
//objekgit
$produk = new Produk();
$produk ->kode = 'P0001';
$produk ->nama = 'Laptop';
$produk ->harga = 10000000;
$produk ->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK *100;
$jumlahPajak = $produk -> harga * Produk ::PAJAK;

//total
$total = $produk -> harga + $jumlahPajak;

//hasil
echo "Produk :" .$produk->nama;
echo "Harga :" .$produk->harga;
echo "Stok :" .$produk->stok;
echo "Pajak : " .$pajak;
echo "<br/>";
echo "Total harga setelah pajak : Rp.".$total;



