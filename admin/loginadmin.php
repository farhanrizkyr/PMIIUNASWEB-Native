<?php

session_start();
include 'admin1.php';
if (isset($_POST['submit'])) {


  $username=$_POST['username'];
  $password=$_POST['password'];
 

  $login = mysqli_query($y, "SELECT * FROM adminn  WHERE username = '$username' AND password = '$password' ");
  

  if(mysqli_num_rows($login) === 1){


    $row = mysqli_fetch_array($login);

    $username = $row['username'];
    $_SESSION['username'] = $username;
    $password = $row['password'];
    $_SESSION['password'] = $password;
    $nama=$row['nama'];
    $_SESSION['nama']=$nama;
   
    header("location: home.php");
    exit;
   }

}



 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="loginadmin.js"></script>
<link rel="icon" type="image/png" href="../index/foto/logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <script src="LOGIN.js" type="text/javascript"></script>

    <title>Halaman Login </title>
  </head>     
  <body>
   <style>
     body{
     background: lightgrey;
     }

     .container{
      box-shadow: 15px 18px 20px white;
      background: white;
     }

     .container:hover{
      box-shadow: 15px 18px 20px lightgrey;
      background:#eaeaeaea;
     }
   </style>
   <br><br><br>
   <div class="container">
<form method="post" action="loginadmin.php" onsubmit="return kirim()">
  <center><img width="8%" src="../index/foto/logo.png"></center>
  <u><h1 class="text-center">Silahkan Login</h1></u>
 
  <div class="mb-3">
   <div class="group">
     <label>Username</label>
     <input  autocomplete="off"  type="text" class="form-control"  name="username" id="username" placeholder=" Masukkan Username">
   </div>
   <div class="group">
     <label>Password</label>
     <input   autocomplete=""  type="password" name="password" class="form-control" id="password" placeholder=" Masukkan Password">
     <button name="submit" type="submit" class="btn btn-primary mt-3">Masuk</button>
     
     <button name="reset" type="reset" class="btn btn-danger mt-3">Hapus</button>
   </div>

</form>

</div>
 <div class="row">
   <div class="col">
       <footer >
     <p class="text-center mb-3" >copyright &copy PMII   KOMISARIAT UNIVERSITAS NASIONAL <?php echo date("Y") ?></p>
   </footer>
   </div>
 </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

