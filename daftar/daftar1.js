  function  daftar1() {
  var nama=document.getElementById('nama').value;
  var lokasi=document.getElementById('lokasi').value;
  var ttl=document.getElementById('ttl').value;
  var jkel=document.getElementById('jkel').value;
  var hp=document.getElementById('hp').value;
  var email=document.getElementById('email').value;
  var instansi=document.getElementById('instansi').value;
  var ortu=document.getElementById('ortu').value;
  var alortu=document.getElementById('alortu').value;
  var noortu=document.getElementById('noortu').value;
  var orga=document.getElementById('orga').value;
  var minat=document.getElementById('minat').value;
  var pengalaman=document.getElementById('pengalaman').value;

if (nama== null|| nama=="") {
swal("Anda Belum Memasukan Nama!", "Masukkan Nama Anda!", "info");
    return false;

}

if (lokasi== null|| lokasi=="") {
swal("Anda Belum Memasukan Tempat Lahir!", "Masukkan Tempat Lahir Anda!", "info");
    return false;

}



if(ttl== null||ttl==""){
  swal("Anda Belum Memasukan Tempat Tanggal Lahir!", "Masukkan Tempat Tanggal Lahir!", "info");
      return false;
}

if (jkel== null||jkel=="") {
  swal("Anda Belum Memasukan Jenis Kelamin!", "Masukkan Jenis Kelamin!", "info");
     return false;
}
if (isNaN(hp)||hp.length!=12) {

  swal("SALAH!", "Masukkan Nomer Yang valid!", "error");
          return false;
}
if(email.indexOf("@")==-1){
          swal("SALAH!", "Masukkan E-mail yang valid!", "error");
          return false;
         }

 if (instansi== null||instansi=="") {
  swal("Anda Belum Memasukan instansi!", "Masukkan Nama instansi!", "info");
    return false;

}

 if (ortu== null||ortu=="") {
  swal("Anda Belum Memasukan Nama orang tua!", "Masukkan Nama orang tua!", "info");
    return false;

}
if (alortu== null||alortu=="") {
  swal("Anda Belum Memasukan Alamat orang tua!", "Masukkan Alamat orang tua!", "info");
    return false;
}

if (isNaN(noortu)||noortu.length!=12) {
  swal("SALAH!", "Masukkan Nomer Yang valid!", "error");
    return false;
}

if(orga== null||orga==""){
  swal("Anda Belum Memasukan alasan!", "Masukkan alasan !", "info");
    return false;
}

if (minat==null||minat=="") {
  swal("Anda Belum Memasukan Minat & Bakat", "Masukkan Minat & Bakat Anda !", "info");
    return false;
}

if (pengalaman==null||pengalaman=="") {
    swal("Anda Belum Memasukan Pengalaman Organisasi", "Masukkan pengalaman Organisasi Anda !", "info");
    return false;
}




swal("Data telah Tersimpan !", "anda Telah Terdaftar Sebagai Peserta Mapaba!  "+nama, "success");
     return true;

}
