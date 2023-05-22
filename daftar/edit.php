<?php

include_once("log.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
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

     $result = mysqli_query($kon, "UPDATE log1 SET nama='$nama',lokasi='$lokasi',ttl='$ttl',jkel='$jkel',hp='$hp',email='$email',instansi='$instansi',ortu='$ortu',noortu='$noortu',alortu='$alortu',orga='$orga',minat='$minat',pengalaman='$pengalaman' WHERE id=$id");

    // update user data
    $result = mysqli_query($kon, "SELECT *FROM log1 SET nama='$nama',lokasi='$lokasi',ttl='$ttl',jkel='$jkel',hp='$hp',email='$email',instansi='$instansi',ortu='$ortu',noortu='$noortu',alortu='$alortu',orga='$orga',minat='$minat',pengalaman='$pengalaman' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location:data mapaba.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id=$_GET['id'];

// Fetech user data based on id
$result = mysqli_query($kon, "SELECT* FROM log1 WHERE id=$id");
while($row = mysqli_fetch_array($result))
{
    $nama = $row['nama'];
    $lokasi= $row['lokasi'];
    $ttl = $row['ttl'];
    $jkel = $row['jkel'];
    $hp=$row['hp'];
    $email=$row['email'];
    $instansi=$row['instansi'];
    $ortu=$row['ortu'];
    $noortu=$row['noortu'];
    $alortu=$row['alortu'];
    $orga=$row['orga'];
    $minat=$row['minat'];
    $pengalaman=$row['pengalaman'];
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" type="image/png" href="../index/foto/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="daftar.css">
<script src="daftar.js"> </script>
    <title>data mapaba </title>
  </head>
  <body>

    <div class="container">

<form action="edit.php" method="POST">
  <div class="row">
    <div class="col">

      <img src="../index/foto/logo.png" class="rounded mx-auto ">
       <p class="form">formulir Pendaftaran Peneriman Anggota Baru </p>
    </div>
  </div>
  <STRONG><h1>DATA PESERTA MAPABA</h1></STRONG>

  <a href="data mapaba.php">Back</a>
  <div class="form-group">
    <label>Nama Lengkap:</label>
    <input type="text" name="nama" required="" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $nama; ?>" >
  </div>

  <div class="form-group">
    <label>Tempat:</label>
    <input type="text" name="lokasi" required="" id="lokasi" class="form-control" placeholder="Masukkan Tempat Lahir" value="<?php echo $lokasi; ?>" >
  </div>

 <div class="form-group">
    <label>Tempat Tanggal Lahir:</label>
    <input type="date" name="ttl" required="" id="ttl" class="form-control" placeholder="Masukkan Tempat Tanggal Lahir"  value="<?php echo $ttl; ?>" placeholder="Isi Tempat Tanggal Lahir" >
  </div>


  
<div class="form-group">
    <label>No Hp:</label>
    <input type="text" name="hp" required="" id="hp" class="form-control" placeholder="Masukkan Nomer HP"  value="<?php echo $hp; ?>" >
  </div>
  
<LABEL>Jenis Kelamin:</LABEL>
<fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" style="padding:4px" type="radio" name="jkel" id="jkel" value="Perempuan" checked>
          <label class="form-check-label" style="padding:4px" for="gridRadios1">
          PEREMPUAN
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input "  type="radio" name="jkel" id="jkel" value="Laki-Laki">
          <label class="form-check-label" for="gridRadios2">
          LAKI-LAKI
          </label>

  <div class="form-group">
          <label>E-mail:</label>
          <input type="text"id="email" required="" name="email" placeholder="Masukkan E-mail Anda" class="form-control"  value="<?php echo $email; ?>">
        </div>
 <div class="form-group">
          <label>instansi:</label>
          <input type="text"id="instansi" required="" name="instansi" placeholder="Masukkan instansi Anda" class="form-control"  value="<?php echo $instansi; ?>">
        </div>

        <div class="form-group">
          <label>Nama Orang Tua:</label>
          <input type="text"id="ortu" name="ortu" required="" placeholder="Masukkan Nama Orang Tua" class="form-control"  value="<?php echo $ortu; ?>">
        </div>
         <div class="form-group">
          <label>Nomer Orang Tua:</label>
          <input type="text"id="noortu" name="noortu" required="" placeholder="Masukkan Nomer Orang Tua" class="form-control" value="<?php echo $noortu; ?>">
        </div>
        

        <div class="form-group">
          <label>Alamat Orang Tua:</label>
         <textarea class="form-control " name="alortu" rows="8"><?php echo $alortu; ?></textarea>

            <div class="form-group">
          <label>Alasan Bergabung:</label>
           <textarea class="form-control " name="orga" rows="8"><?php echo $orga; ?></textarea>

          <div class="form-group">
          <label>Minat & Bakat:</label>
           <textarea class="form-control " name="minat" rows="8"><?php echo $minat; ?></textarea>

          <div class="form-group ">
          <label>Pengalaman Organiasi Anda:</label>
           <textarea class="form-control " name="pengalaman" rows="8"><?php echo $pengalaman; ?></textarea>
          <br>       
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

            <input class="btn btn-primary" type="submit" name="update" value="Ubah"></td>

           <br>
</form>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>


