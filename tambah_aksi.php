<?php 
// koneksi database
include 'koneksi.php';
 

$nama_cust = $_POST['nama_cust'];
$pesanan = $_POST['pesanan'];
$no_handphone = $_POST['no_handphone'];
 if (!empty($nama_cust) || !empty($pesanan) || !empty($no_handphone)) {
// menginput data ke database
mysqli_query($koneksi,"insert into data_pesanan values('','$nama_cust','$pesanan','$no_handphone')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>