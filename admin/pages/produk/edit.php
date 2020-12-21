<?php
include "../../lib/koneksi.php";

$id = $_POST['id'];
$kategori = $_POST['Idkategori'];
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$path = 'foto/'.$gambar;

mysqli_query($koneksi,"UPDATE tb_produk SET id_kategori='$kategori', nama_produk='$nama_produk', deskripsi='$deskripsi', harga='$harga', gambar='$gambar' WHERE id_produk='$id'");
header("location:main.php");