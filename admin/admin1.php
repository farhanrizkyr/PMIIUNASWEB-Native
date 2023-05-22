<?php 
$host="localhost";
$user="root";
$password="";
$db="db_pmii";



$y=mysqli_connect($host,$user,$password,$db);
if ($y) {
echo "";
}else{
	echo "";
}

$hasil=mysqli_select_db($y,$db);
if ($hasil) {
	echo "";
}
else{
	echo "";
}


 ?>