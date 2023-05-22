<?php 
// koneksi database
include 'log.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
MYSQLI_QUERY($kon,"delete from log1 where id='$id'");


 
// mengalihkan halaman kembali ke index.php
 header("location:data mapaba.php");
 
?>



