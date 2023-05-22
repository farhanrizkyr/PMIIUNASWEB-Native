function kirim() {
var nama=document.getElementById('nama').value;
var username=document.getElementById('username').value;
var password=document.getElementById('password').value;

if (nama== null|| nama=="") {

	alert("anda belum memasukan Nama Lengkap");
	return false;
}

if (username== null|| username=="") {

	alert("anda belum memasukan Username");
	return false;
}


if (password== null|| password=="") {
	alert("anda belum memasukan password");
	return false;
}


	alert("anda telah mengubah data admin "+nama );
	return true;




}