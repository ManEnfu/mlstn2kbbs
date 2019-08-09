<?php 
  require "functions.php";
  $orders = query("SELECT * FROM pesanan");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tampilan Pelanggan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="container" style="background-color:#ffe942; max-width: 100%; min-height: 100%">  
<br>
  <table class="table table-fluid table-bordered"  style="margin:0 auto; width: 70%; height: auto;">
          <thead style="color:white;">
      <tr class="text-center" bgcolor="#b10000">
        <th  style="width: 20%;"><h3 class="font-weight-bold">ORDER</h3></th>
        <th  style="width: 20%;"><h3 class="font-weight-bold">NAMA</h3></th>
        <th style="width: 30%;"><h3 class="font-weight-bold">STATUS</h3></th>
      </tr>
    </thead>
    <tbody class="text-center" bgcolor="white">

<?php $i = 1;
      foreach($orders as $order) :  ?>
      <tr class="clickable-row" style="height: 50px; " bgcolor="<?php if ($order["status"] == "Siap") {
        echo "#ffefb3";
        } else {
          echo "#ffa552";
      } ?>" onclick="ActiveXObject">
        <td class="text-center"><?=$order["id"] ?></td>
        <td class="text-center"><?=$order["nama_pemesan"] ?></td>
        <td class="text-left"><?=$order["status"] ?></td>
      </tr>

      <?php $i++;
        endforeach;
       ?>

    </tbody>
  </table>
  <br>
  <div class="watermark">
    <a> <img src="Assets/logo.png" width="90" height="90" style="width:100px; margin-left: 15%"> </a>
   </div>
</div>


</body>
</html>
