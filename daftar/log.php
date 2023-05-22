<?php 	
$host="localhost";
$user="root";
$password="";
$db="db_pmii";

$kon=mysqli_connect($host,$user,$password,$db);
if ($kon){
		//echo "formulir anda berhasil tersimpan<br>";
	}
//
	//else{
		//echo "	formulir anda gagal tersinpan<br>";
	//}

	$hasil=mysqli_select_db($kon,$db);
	//if($hasil){
		//echo "data anda berhasil tersimpan<br>";
	//}else{
		//echo "data anda berhasil Tersimpan<br>";
	//}
 ?>