<?php 
include ('coman.php');
$nama=$_POST['nama'];
$gmail=$_POST['gmail'];
$saran=$_POST['saran'];

$sql="insert into pmii(nama,gmail,saran)values('$nama','$gmail','$saran')";

$hasil=mysqli_query($kon,$sql);
//if ($hasil) {
	//echo "data anda telah tersimpan<br>";
	//exit;
//}

//else{
	//echo "data anda gagal Tersimpan<br>";
	//exit;
//}

header("location:index.html");






 ?>