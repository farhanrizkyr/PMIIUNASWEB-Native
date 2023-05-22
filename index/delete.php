<?php 
// koneksi database
include 'coman.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($kon,"delete from pmii where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data saran.php");
 
?>


