function kirim() {
var nama=document.getElementById('nama').value;
var username=document.getElementById('username').value;
var password=document.getElementById('password').value;


  if (nama== null||nama=='') {
    swal("Anda Belum Memasukan nama!", "Masukkan nama!", "info");
      return false;
  }

  if (username== null||username=='') {
    swal("Anda Belum Memasukan username!", "Masukkan username!", "info");
      return false;
  }



  if (password== null||password=='') {
    swal("Anda Belum Memasukan password!", "Masukkan password!", "error");
      return false;
  }

  swal("BERHASIL!", " anda telah menjadi  admin     " +nama, "success");
      return true;



}