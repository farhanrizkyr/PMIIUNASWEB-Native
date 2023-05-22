<?php 
include_once 'admin1.php';
if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];


	$result=mysqli_query($y,"UPDATE adminn SET nama='$nama',username='$username',password='$password' WHERE id=$id");



header("location:tableadmin.php");
}

 ?>

<?php 
$id=$_GET['id'];
$result=mysqli_query($y,"SELECT* FROM ADMINN WHERE id=$id ");
while ($q=mysqli_fetch_array($result))
{
	$nama=$q['nama'];
	$username=$q['username'];
	$password=$q['password'];


}
 ?>


  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>form admin</title>
    <link rel="stylesheet" type="text/css" href="formadmin.css">
    <script src="editadmin.js"></script>
  </head>
  <body>
    <br>
<div class="container">
        <h1 class="text-center">EDIT ADMIN</h1>
<form action="edit.php" method="post" onsubmit="return kirim()">

    <div class="from-group">
        <label>Nama Lengkap</label>
        <input type="text" id="nama" value="<?php echo $nama ?>" name="nama" class="form-control">
    </div>

    <div class="from-group">
        <label>Username</label>
        <input type="text" id="username"  value="<?php echo $username ?>" name="username" class="form-control">
    </div>

    <div class="from-group">
        <label>Password</label>
        <input type="password" id="password"  value="<?php echo $password ?>" name="password" class="form-control">
    </div>
    <br>
  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

<input class="btn btn-primary" type="submit" name="update" value="Update"></td>
</form>
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