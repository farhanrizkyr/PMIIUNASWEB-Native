<?php 
include 'log.php';
$query=mysqli_query($kon,"SELECT*FROM LOG1");
error_reporting(0);



 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../index/foto/logo.png">
 <title> </title>
  </head>
  <body>
    
<center>  <img style="width:10%;" src="../index/foto/logo.png"></center>


<table class="table" >
   <u><h1 style="text-align: center;">DATA PESERTA MAPABA PMII KOMISARIAT UNIVERSITAS NASIONAL</h1></u> 
  <thead class="thead" style="background-color:lightblue;" >

<style >
  h1 {
    font-size: 25px;
  }
 
</style>
 


<br><br>
<?php 
$sql="SELECT*FROM LOG1";
$Data=mysqli_query($kon,$sql);
$peserta=mysqli_num_rows($Data);
echo "<b>JUMLAH DATA PESERTA:  $peserta  </b>";

 ?>
 <br>

<table cellpadding="10px" cellspacing="2" border="3px solid">
    <tH>No  Peserta</th>
    <TH>Nama Peserta</TH>
     <TH>Tempat</TH>
    <TH>Tanggal Lahir</TH>
    <TH>Jenis Kelamin</TH>
    <TH>No Hp</TH>
    <TH>E-mail</TH>
    <TH>Instansi/Kampus</TH>
    <TH>Nama Orang Tua</TH>
    <TH>Nomer Hp Orang Tua</TH>
    <TH>Alamat Orang Tua</TH>
    <TH>Alasan Bergabung</TH>
    <TH>Minat& Bakat</TH>
    <TH>Pengalaman Berorganisasi</TH>


   <?php 
if (mysqli_num_rows($query)>0); {
    $id=1;



 ?>

 

<?php while($s=mysqli_fetch_array($query)){ ?>
    <tr>
      <td align="center" ><?php echo $id++; ?>.</td>
      <td ><?php echo $s['nama'] ?></td>
      <td ><?php echo $s['lokasi'] ?></td>
      <td ><?php echo $s['ttl'] ?></td>
      <td ><?php echo $s['jkel']?></td>
      <td><?php echo $s['hp'] ?></td>
      <td ><?php echo $s['email'] ?></td>
      <td ><?php echo $s['instansi'] ?></td>
      <td><?php echo $s['ortu'] ?></td>
      <td><?php echo $s['noortu'] ?></td>
      <td><?php echo $s['alortu'] ?></td>
      <td><?php echo $s['orga'] ?></td>
      <td><?php echo $s['minat'] ?></td>
      <td ><?php echo $s['pengalaman'] ?></td>
   
<?php } ?>
<?php } ?>
<script >
  
  window.print();
</script>
   </table>
   <footer>
     <p class="text-center">Copyright &copy PMII Univeraitas Nasional <?php echo date(Y) ?></p>
   </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<style>
  th a{
   color:black;
  
   padding: 7px;

  }


 p{
    margin-top:10px
  }

.sara{
 width:45%;
 border: 1px solid black;
 background-color:lightgrey;

  border-radius: 50px;
}



.sara:hover{
  transition: 1.0s;
  background:red;
}




a:hover{
  color: black;
  text-decoration: none;
}

a{
  color: black;
}

.cut{
  border-radius: 50px;
  width: 45%;

  border: 1px solid black;
  background:lightgrey;
}

.cut:hover{
  transition: 1.0s;
  background:lightgreen;
}





table th{
  background:#A7C7E7;
}

table td{
  background:#eaeaeaea;
}
  a{

  padding: 5px;;
 }
 button{
  color: white;
  font-size: 1.2em;
  background-color:lightblue; 
  border:1px solid black;
   height:50px;
 }

  button:hover{
    font-size: 1.3em;
    border: none;
    transition: 1.0s;
    background:transparent;

  }

.cetak{
  font-weight: bold;
  font-size: 1.0em;
  color: black;
}


</style>
