<?php 
include 'admin1.php';
$id=$_GET['id'];


mysqli_query($y,"DELETE FROM ADMINN WHERE id='$id'");
header("location:TABLEADMIN.php");

 ?>