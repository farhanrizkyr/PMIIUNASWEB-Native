<?php   
include ("log.php");
$nama=$_POST['nama'];
$lokasi=$_POST['lokasi'];
$ttl=$_POST['ttl'];
$jkel=$_POST['jkel'];
$hp=$_POST['hp'];
$email=$_POST['email'];
$instansi=$_POST['instansi'];
$ortu=$_POST['ortu'];
$noortu=$_POST['noortu'];
$alortu=$_POST['alortu'];
$orga=$_POST['orga'];
$minat=$_POST['minat'];
$pengalaman=$_POST['pengalaman'];


$sql="insert into log1(nama,lokasi,ttl,jkel,hp,email,instansi,ortu,noortu,alortu,orga,minat,pengalaman)values('$nama','$lokasi','$ttl','$jkel','$hp','$email','$instansi','$ortu','$noortu','$alortu','$orga','$minat','$pengalaman')";

$hasil=mysqli_query($kon,$sql);
//if($hasil) {
    //echo "data anda telah tersimpan<br>";
    //exit;
//}

//else{
    //echo "data anda gagal Tersimpan<br>";
    //exit;
//}

header("location:data mapaba.php");
 ?>
