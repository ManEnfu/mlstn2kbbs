<?php 
  require "functions.php";
  require "db_connect.php"
  $orders = query($connection, "SELECT * FROM pesanan");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tampilan Dapur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="container-fluid" style="background-color:#ffe942; max-width: 100%; min-height: 100vh">  
<br>
  <table class="table table-fluid table-bordered" style="margin:0 auto; width: 70%; height: auto;">
          <thead style="color:white;">
      <tr class="text-center" bgcolor="#b10000" on>
        <th  style="width: 20%;"><h3 class="font-weight-bold">ORDER</h3></th>
        <th style="width: 30%;"><h3 class="font-weight-bold">NAMA</h3></th>
        <th style="width: 30%;"><h3 class="font-weight-bold">PESANAN</h3></th>
      </tr>
    </thead>
    <tbody bgcolor="white">
      
      <?php $i = 1;
      foreach($orders as $order) : ?>
      <tr class="clickable-row" style="height: 50px; " bgcolor="<?php if ($i % 2 == 1) {
        echo "#ffefb3";
        } else {
          echo "white";
      } ?>" onclick="ActiveXObject">
        <td class="text-center"><?=$order["id"] ?></td>
        <td class="text-center"><?=$order["nama_pemesan"] ?></td>
        <td class="text-left"><?=$order["pesanan"] ?></td>
      </tr>

     

      <?php $i++;
        endforeach;
        $order_clicked = $order["id"]; //testing
       ?>
      
 
    
    </tbody>
  </table>
  <br>
  <a><img src="Assets/logo.png" style="width:100px; margin-left: 15%" ></a>
  <a href="ready.php?id=<?= $order_clicked; ?>">
  <button type="button" style="margin-left: 500px; padding: 20px 40px 20px 40px; background-color: #49d186; text-decoration-color: beige;">
    READY</button></a>
    <button type="button" style="margin-left: 50px; padding: 20px 40px 20px 40px; background-color: #7a8680; text-decoration-color: beige;">
      TAKEN</button>
  
</div>


</body>
</html>
