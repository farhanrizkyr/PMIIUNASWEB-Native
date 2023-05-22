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
<script src="daftar1.js"> </script>
    <title>Formulir Peneriman Anggota Baru </title>
  </head>
  <body>
<style >
  a{
    color: black;
  }
   a:hover{
    text-decoration: none;
    color: black;
  }
  .cls{
    width:10%;
    padding: 4px;
  }
</style>
  
  <div class="container">
<form action="login.php" method="post" onsubmit="return daftar1()">
  <div class="row">
    <div class="col">

      <img src="../index/foto/logo.png" class="rounded mx-auto ">
       <p class="form">formulir Pendaftaran Peneriman Anggota Baru Komisariat</p>
    </div>
  </div>

  <STRONG><h1>Silahkan Isi Form Pendaftaran</h1></STRONG>

  <a href="../index/index.html">back</a>
  <br>  <br>  
  <div class="form-group">
    <label>Nama Lengkap:</label>
    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" >
  </div>

  <div class="form-group">
    <label>Tempat :</label>
    <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Masukkan Tempat Lahir" placeholder="Isi Tempat  Lahir" >
  </div>

 <div class="form-group">
    <label>Tanggal Lahir:</label>
    <input type="date" name="ttl" id="ttl" class="form-control" placeholder="Masukkan Tempat Tanggal Lahir" placeholder="Isi Tempat Tanggal Lahir" >
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
    <div class="form-group">
    <label>No Hp Anda:</label>
    <input type="text" name="hp" id="hp" class="form-control" placeholder="Masukkan nomer hp" >
  </div>

  <div class="form-group">
          <label>E-mail:</label>
          <input type="text"id="email" name="email" placeholder="Masukkan E-mail Anda" class="form-control">
        </div>
 <div class="form-group">
          <label>Instansi/Kampus:</label>
          <input type="text"id="instansi" name="instansi" placeholder="Masukkan instansi Anda" class="form-control">
        </div>

        <div class="form-group">
          <label>Nama Orang Tua:</label>
          <input type="text"id="ortu" name="ortu" placeholder="Masukkan Nama Orang Tua" class="form-control">
        </div>
         <div class="form-group">
          <label>Nomer Orang Tua:</label>
          <input type="text"id="noortu" name="noortu" placeholder="Masukkan Nomer Orang Tua" class="form-control">
        </div>
        

        <div class="form-group">
          <label>Alamat Orang Tua:</label>
          <textarea rows="7" cols="100" type="text"id="alortu" name="alortu" placeholder="Masukkan Alamat Orang Tua" class="form-control" placeholder="Massukan Alamat Orang Tua Anda"></textarea>

          <div class="form-group">
          <label>Alasan gabung PMII</label>
          <textarea rows="7" cols="100" type="text"id="orga" name="orga" placeholder="Masukkan Alasan Anda" class="form-control"></textarea> 

          <div class="form-group">
          <label>Minat & Bakat:</label>
          <textarea rows="7" cols="100" type="text"id="minat" name="minat" placeholder="Masukkan Minat & Bakat" class="form-control"></textarea> 

          <div class="form-group ">
          <label>Pengalaman Organiasi Anda:</label>
          <textarea rows="7" cols="100" type="text"id="pengalaman" name="pengalaman" placeholder="Pengalaman Organiasi anda " class="form-control"></textarea>
          <br>       
          <button class="btn btn-primary">KIRIM SEKARANG</button>
          <button class="btn btn-danger" type ="reset">RESET DATA</button>
           <br>
           <br><br><br>
           <a href="lihat.php" target="_blank">List Daftar Peserta</a>
          
</form>


<br><br>
</div>
 <footer>
    <p  class="text-center">Copyright &copy Pergerakan Mahasiswa Islam Indonesia Komisariat Universitas Nasional <?php echo date("Y") ?></p>
 </footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>




