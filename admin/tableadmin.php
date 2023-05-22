<?php 
include 'admin1.php';
$data=mysqli_query($y,"SELECT*FROM adminn");

 ?>


<style>

 .ml-auto .dropdown-menu{ 
 
 left:auto !important;
 right: 0px;



}
  td a{
   text-decoration: none;
    color: black;
  }
</style>

   
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" href="../index/foto/logo.png">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>data admin</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  fixed-top"style="  box-shadow: 15px 16px 15px lightgrey" >
  <a class="navbar-brand" href="#">
    <img width="40px" src="../index/foto/logo.png">PMII UNIVERSITAS NASIONAL</a>
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
    <h1 class="text-center">TABLE ADMIN</h1>
<table class="table table-success table-striped">
<tr>
  <th scope="COL">NOMER</th>
  <th scope="COL">NAMA ADMIN</th>
  <th scope="COL">USERNAME</th>
    <th scope="COL">PASSWORD</th>
   <th scope="COL"> AKSI</th>
</tr>

<?php if(mysqli_num_rows($data)>0) {
 $id=1

 ?>

 <?php  while($d=mysqli_fetch_array($data)){ ?>

  <tr>
  <th scope="COL"><?php   echo $id++; ?>.</th>
  <th scope="COL"><?php echo $d['nama'] ?></th>
  <th scope="COL"><?php echo $d['username'] ?></th>
   <th scope="COL"><?php echo $d['password'] ?></th>
   <td scope="col">
     <a onclick="return  confirm('anda yakin mau menghapus data admin ? data akan terhapus secara permanen');"  href="hapus.php?id=<?php echo $d['id']; ?>"> HAPUS 
        <p></p>
         <a onclick="return  confirm('anda yakin mau mengubah data admin?');"  href="edit.php?id=<?php echo $d['id']; ?>"> EDIT
     </td>

   

  
</tr>

<?php  } ?>
<?php  } ?>
</table>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

  