<?php 
include 'admin1.php';
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

$l = "insert into adminn (nama,username,password) values ('$nama','$username','$password')";


$hasil = mysqli_query($y,$l);





//if ($hasil) {
	//echo "";
	//exit;
//}
//else{
	//echo "";
	//exit;
//}


  header("location:tableadmin.php");


 ?>

