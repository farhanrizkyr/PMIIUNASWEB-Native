<?php 
include 'log.php';
$data=mysqli_query($kon,"SELECT*FROM LOG1");




 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      <link rel="icon" type="image/png" href="../index/foto/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <title>Data Peserta</title>
  </head>
  <body>

<u><h1  class="text-center">DATA PESERTA  </h1></u>
 
  <table id="tabel-data" class="table table-striped table-bordered">
        <thead  style="background: white;height:20px;" >
            <tr>
                <tH>No Peserta</th>
                <TH>Nama Peserta</TH>
                <TH>Jenis Kelamin</TH>
               
            </tr>
        </thead>
        <tfoot>
            <tr>
           <tH>No Peserta</th>
          <TH>Nama Peserta</TH>
          <TH>Jenis Kelamin</TH>
      
            </tr>
        </tfoot>
        <tbody>
        <?php if (mysqli_num_rows($data)>0) {
         $id=1;
        ?>
        <?php while($s=mysqli_fetch_array($data)){ ?>
            <tr  style="background: white;">
           <td><?php echo $id++; ?>.</td>
           <td><?php echo $s['nama'] ?></td>
           <td><?php echo $s['jkel'] ?></td>
          
            </tr>

   
      <?php } ?>
       <?php } ?>
    </table>
       </tbody>
     
       
  <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>

 
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