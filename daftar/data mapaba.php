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
 <title>DATA MAPABA  </title>
 <link rel="stylesheet" type="text/css" href="data mapaba.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  fixed-top" style="box-shadow: 15px 16px 15px lightgrey" >
  <a class="navbar-brand" href="#"> <img width="40" src="../index/foto/logo.png">PMII UNIVERSITAS NASIONAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
  <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ml-auto">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../admin/home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="data mapaba.php">Data Mapaba</a>
          <a class="dropdown-item" href="../index/data saran.php">Data saran</a>
        
     
        </div>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../admin/tableadmin.php">Data Admin</a>
          <a class="dropdown-item" href="../admin/formadmin.php">Tambah Admin</a>
          
      <li class="nav-item">
          <a class="nav-link" href=" ../admin/keluar.php">Keluar</a>
      </li>

     <li class="nav-item">
          <a class="nav-link" href="">
             
        <?php 
    session_start();
    echo "".$_SESSION['nama'];


     ?>
          </a>
      </li>
    </ul>
  </div>
</nav>
</div>
<br><br><br><br>
<table class="table" >
    <h1 class="text-center">DATA PESERTA MAPABA PERGERAKAN MAHASISWA ISLAM INDONESIA KOMISARIAT UNIVERSITAS NASIONAL</h1>
  <thead class="thead" style="background-color:lightblue;" >


    <tr>
<button><a class=" b" href="add.php"> <img src="../index/foto/add.png">TAMBAH PESERTA </button></a>
<br><br>
<form action="" method="POST"> 
  <button type="submit" name="cari" class="a"  > <img src="../index/foto/cari.png "></button>
<input autocomplete="off" placeholder="cari peserta  di sini..." style="width:380px; height:40px" type="text" name="data" >

<hr color="black;">
</form>
<?php 
 $data=$_POST['data'];
    if ($data !='') {
    $query=mysqli_query($kon,"SELECT*FROM log1 WHERE  nama LIKE'%".$data."%'");
    }else{
      $query=mysqli_query($kon,"SELECT*FROM log1");

    }
    

 ?>
 



<br><br>

<?php 
$sql="SELECT*FROM LOG1";
$Data=mysqli_query($kon,$sql);
$peserta=mysqli_num_rows($Data);
echo "<b>JUMLAH DATA PESERTA:$peserta</b>";


 ?>
 <br>

 <div class="table-responsive">
<table cellpadding="10px" cellspacing="2" border="3px solid">
<tr>

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
    <TH >Alamat Orang Tua</TH>
    <TH>Alasan Bergabung</TH>
    <TH>Minat</TH>
    <TH>Pengalaman Berorganisasi</TH>
    <th>action</th>
    </tr>
<button   class=" cetak"> <a target="_blank" href="cetakpeserta.php"><img src="../index/foto/print.png">CETAK DATA</button></a>
    <br><br>
<?php 
if (mysqli_num_rows($query)>0); {
    $id=1;



 ?>

<?php while($s=mysqli_fetch_array($query)){ ?>
    <tr>
      <td align="center"></th><?php echo $id++; ?>.</td>
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
      <td>
          
      <a onclick="return  confirm('anda yakin mau menghapus data mapaba? data akan terhapus secara permanen');"  href="hapus.php?id=<?php echo $s['id'];  ?>  " ><center><img class="sara"   src="../index/foto/sampah.png" title="hapus data">HAPUS DATA </a></center>
      <hr color="black" width="100%">
        <a onclick="return  confirm('anda yakin mau mengubah  data mapaba?');" href="edit.php?id=<?php echo $s['id']; ?> "><center><img class="cut" src="../index/foto/edi.png" title="edit data">EDIT DATA</a></center>

      </td>
     
<?php } ?>
<?php } ?>

   </table>
</div>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>