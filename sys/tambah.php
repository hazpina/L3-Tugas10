
<?php 
include 'koneksi.php';
 
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan_warna'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into produk values('','$nama_produk','$keterangan','$harga','$jumlah')");
 
// mengalihkan halaman kembali ke tambah.php
header("location:../menu/daftar barang.php");
 
?>