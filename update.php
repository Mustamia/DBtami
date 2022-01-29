<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_cust = $_POST['nama_cust'];
$pesanan = $_POST['pesanan'];
$no_handphone = $_POST['no_handphone'];
 
// update data ke database
mysqli_query($koneksi,"update data_pesanan set nama_cust='$nama_cust', pesanan='$pesanan', no_handphone='$no_handphone' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>