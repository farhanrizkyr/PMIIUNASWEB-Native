<?php 
$host='localhost';
$user='root';
$password='';
$db='db_pmii';

$kon=mysqli_connect($host,$user,$password);
if ($kon) //{
	//echo "saran anda berhasil tersimpan <br>";
//}//else{
	//echo "saran anda tida tersimpan";
//}

$hasil=mysqli_select_db($kon,$db);
//if ($hasil) {
	//echo "saran anda berhasil di smpan";
//}else{
	//echo "saran anda gagal tersimpan";
//}














 ?>