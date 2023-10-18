<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode = $_POST['kodeBarang'];
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$stok = $_POST['stokBarang'];
$harga = $_POST['hargaBarang'];
$opsi = $_POST['opsi'];
 
// update data ke database
mysqli_query($koneksi,"insert into tb_toko values('', '$kode', '$nama','$satuan', '$stok' , '$harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>