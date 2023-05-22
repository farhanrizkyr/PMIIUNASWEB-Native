<?php 
 session_start();

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
.ml-auto .dropdown-menu{ 
 
 left:auto !important;
 right: 0px;



}
b{
  padding:4px;
  width: 20px;
  border-radius: 10px;
  background:#007bff;
}

p{
  color: white;
}

a{
   color:#007bff;
}



</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="icon" type="image/png" href="../index/foto/logo.png">

    <title>Dashboard Admin</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary  fixed-top"style=" box-shadow: 15px 16px 15px lightgrey"  >
  <a class="navbar-brand" href="#">
    <img width="40" src="../index/foto/logo.png">PMII UNIVERSITAS NASIONAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../daftar/data mapaba.php">Data Mapaba</a>
          <a class="dropdown-item" href="../index/data saran.php">Data Saran</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tableadmin.php">Data Admin</a>
          <a class="dropdown-item" href="formadmin.php">Tambah Admin</a>
          <div class="dropdown-divider"></div>
      
      <li class="nav-item">
          <a class="nav-link" href="keluar.php">Keluar</a>
      </li>
 
     <li class="nav-item">

          <a class="nav-link" href="">
          
        <?php 
 
    echo "".$_SESSION['nama'];


     ?>
          </a>
      </li>
    </ul>
  </div>
</nav>
</div>
<br><br>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
<h3 class="display-4">SELAMAT DATANG DI   <span id="typed" class="typed"></span></h3>
    
    <hr>
     </div>
</div>
<script>
new Typed('#typed',{
  strings : ['HALAMAN ADMIN'],
  typeSpeed : 70,
  delaySpeed : 70,
  loop : true
});
  </script>
<div class="container">
<div class="row">
  <div class="col-md">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header bg-primary text-white borderprimary">DATA MAPABA</div>
  <div class="card-body text-primary">
    <img style="border: 2px solid #007bff; border-radius:  100%;" src="admin/user.png"><h5 class="card-title">DATA MAPABA</h5>
    <p class="card-text">
      <?php 
      include '../daftar/log.php';
      $sql="SELECT*FROM LOG1";
      $data=mysqli_query($kon,$sql);
      $peserta=mysqli_num_rows($data);
      echo "<b>$peserta Peserta</b>";
       ?>
    </p>
    <a href="../daftar/data mapaba.php">Selengkapnya</a>
  </div>
  <div class="card-footer text-white bg-primary border-primary"><b>PMII UNIVERSITAS NASIONAL</b></div>
</div>
  </div>
  <div class="col-md">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header text-white bg-primary border-primary">DATA  ADMIN</div>
  <div class="card-body text-primary">
    <img style="border: 2px solid #007bff; border-radius:  100%"; src="admin/admin.png"><h5 class="card-title">DATA ADMIN</h5>
    <p class="card-text">
     <?php 
      include 'admin1.php';
      $l="SELECT*FROM adminn";
      $data=mysqli_query($y,$l);
      $peserta=mysqli_num_rows($data);
      echo "<b>$peserta Admin</b>";
       ?>
         
       </p>
       <a href="tableadmin.php">Selengkapnya</a>
  </div>
  <div class="text-white card-footer bg-primary border-primary"><b>PMII UNIVERSITAS NASIONAL</b></div>
</div>
  </div>
  <div class="col-md">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header text-white bg-primary border-primary">DATA SARAN</div>
  <div class="card-body text-primary">
    <img style="border: 2px solid #007bff; border-radius: 100%; " src="admin/komen.png"><h5 class="card-title">DATA SARAN</h5>
    <p class="card-text">
      <?php 
      include '../index/coman.php';
      $sql="SELECT*FROM pmii";
      $data=mysqli_query($kon,$sql);
      $peserta=mysqli_num_rows($data);
      echo "<b>$peserta Saran</b>";
       ?>
      
    </p>
     <a href="../index/data saran.php">Selengkapnya</a>
  </div>
  <div class="card-footer text-white bg-primary border-primary"><b>PMII UNIVERSITAS NASIONAL</b></div>
</div>
  </div>
</div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

