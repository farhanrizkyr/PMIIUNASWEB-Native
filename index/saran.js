function kirim() {
  var nama=document.getElementById('nama').value;
  var gmail=document.getElementById('gmail').value;
  var saran=document.getElementById('saran').value;


  if (nama== null||nama=='') {
    swal("Anda Belum Memasukan nama!", "Masukkan nama!", "info");
      return false;
  }
   if (gmail.indexOf("@")==-1) {
    swal("E-mail anda tidak valid!", "Masukkan E-mail yang valid!", "error");
      return false;
  }
  if (saran== null||saran=="") {
     swal("Anda belum memasukkan saran!", "Masukkan saran!", "info");
      return false;
  }
  swal("Saran Anda Telah Tersimpan!", " terima kasih Atas saran nya     " +nama, "success");
      return true;
  
}
