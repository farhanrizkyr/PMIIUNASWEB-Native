<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="icon" type="image/png" href="../index/foto/logo.png">
    

    <title>tambah peserta mapaba</title>
  </head>
  <body style="background: lightgrey">
    <form action="add1.php" method="post">
  
  

  <div class="container" style="background:white">
    <a href="data mapaba.php">back</a>
    <STRONG><h1 style="text-align: center;">TAMBAH PESERTA</h1></STRONG>
  <div class="form-group">
    <label>Nama Lengkap:</label>
    <input type="text" name="nama" required="" id="nama" class="form-control" placeholder="Masukkan nama" >
  </div>
<div class="form-group">
    <label>Tempat:</label>
    <input type="text" name="lokasi" required="" id="lokasi" class="form-control" placeholder="Masukkan Tempat" >
  </div>

 <div class="form-group">
    <label>Tanggal Lahir:</label>
    <input type="date" name="ttl" id="ttl" class="form-control" placeholder="Masukkan  Tempat Tanggal Lahir" required="" placeholder="Isi Tempat Tanggal Lahir" >
  </div>

<LABEL>JENIS KELAMIN:</LABEL>
<fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jkel" id="jkel" value="PEREMPUAN" checked>
          <label class="form-check-label" for="gridRadios1">
          PEREMPUAN
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jkel" id="jkel" value="LAKI-LAKI">
          <label class="form-check-label" for="gridRadios2">
          LAKI-LAKI
          </label>
<div class="form-group">
    <label>No Hp:</label>
    <input type="text" name="hp" required="" id="hp" class="form-control" placeholder="Masukkan Nomer HP" >
  </div>

  <div class="form-group">
          <label>E-mail:</label>
          <input type="text"id="email" required="" name="email" placeholder="Masukkan E-mail Anda" class="form-control">
        </div>
 <div class="form-group">
          <label>instansi:</label>
          <input type="text"id="instansi" required="" name="instansi" placeholder="Masukkan instansi Anda" class="form-control">
        </div>

        <div class="form-group">
          <label>Nama Orang Tua:</label>
          <input type="text"id="ortu" required="" name="ortu" placeholder="Masukkan Nama Orang Tua" class="form-control">
        </div>
         <div class="form-group">
          <label>Nomer Orang Tua:</label>
          <input type="text"id="noortu" required="" name="noortu" placeholder="Masukkan Nomer Orang Tua" class="form-control">
        </div>
        

        <div class="form-group">
          <label>Alamat Orang Tua:</label>
          <textarea rows="7" cols="100" required="" type="text"id="alortu" name="alortu" placeholder="Masukkan Alamat Orang Tua" class="form-control" placeholder="Massukan Alamat Orang Tua Anda"></textarea>

          <div class="form-group">
          <label>Alasan gabung PMII</label>
          <textarea rows="7" cols="100" required="" type="text"id="orga" name="orga" placeholder="Masukkan Alasan Anda" class="form-control"></textarea> 

          <div class="form-group">
          <label>Minat & Bakat:</label>
          <textarea rows="7" cols="100" required="" type="text"id="minat" name="minat" placeholder="Masukkan Minat & Bakat" class="form-control"></textarea> 

          <div class="form-group ">
          <label>Pengalaman Organiasi Anda:</label>
          <textarea rows="7" cols="100" required="" type="text"id="pengalaman" name="pengalaman" placeholder="Pengalaman Organiasi anda " class="form-control"></textarea>
          <br>  

          <input class="btn btn-success" type="submit" name="submit" value="Tambah Peserta">

          <input class="btn btn-danger" type="reset" name="submit1" value="Reset ">
           <br>
</form>






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