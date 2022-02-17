<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tentang HotelHebat</title>
  </head>
  <body>
   
  <!-- MULAI NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluname">
  <a class="navbar-brand" href="#">
      <img src="images/logo.jpg" alt="" wnameth="90" height="85" class="d-inline-block align-text-top">
      
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" name="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
  
  <!-- END NAVBAR -->

  <!-- START FORM RESERVASI -->
  <form class="row g-3" action="" method="post">
    <div class="col-md-6">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" name="firstname">
    </div>
    <div class="col-md-6">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" name="lastname">
    </div>
    
    <div class="col-md-6">
      <label for="checkin" class="form-label">Tanggal Check-in</label>
      <input type="date" class="form-control" name="checkin">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Tipe Kamar</label>
      <select class="form-control" name="tipe">
        <option value="Deluxe Room">Deluxe Room</option>
        <option value="Suite Room">Suite Room</option>
        <option value="Executive Room">Executive Room</option>
      </select>
    </div>
      
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Lama Menginap</label>
      <input type="number" class="form-control" name="lama">
    </div>

    
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary" name="submit">Proses</button>
    </div>
</form>

<br><br>

<?php

if(isset($_POST['submit']))
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $checkin = $_POST['checkin'];
  
  $lama = $_POST['lama'];
  $tipe = $_POST['tipe'];

  if( $tipe = "Deluxe Room")
  {
    $harga = 800000;
    $hargatotal = $harga * $lama;

    echo "<br>";
    echo "<table>";

      echo "<tr>";
        echo "<td>Nama Pelanggan&nbsp;&nbsp;</td>";
        echo "<td>: $firstname $lastname</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Tanggal Check in</td>";
        echo "<td>: $checkin</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Tipe Kamar</td>";
        echo "<td>: $tipe</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Lama Menginap</td>";
        echo "<td>: $lama Malam</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Harga Total</td>";
        echo "<td>: Rp. $hargatotal</td>";
      echo "</tr>";
    
    echo "</table>";

    echo "Mohon untuk Melakukan Pembayaran saat Check In.";


  }

  elseif( $tipe = "Suite Room")
  {
    $harga = 800000;
    $hargatotal = $harga * $lama;

    echo "<br>";
    echo "<table>";

      echo "<tr>";
        echo "<td>Nama Pelanggan&nbsp;&nbsp;</td>";
        echo "<td>: $firstname $lastname</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Tanggal Check in</td>";
        echo "<td>: $checkin</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Tipe Kamar</td>";
        echo "<td>: $tipe</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Lama Menginap</td>";
        echo "<td>: $lama Malam</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Harga Total</td>";
        echo "<td>: Rp. $hargatotal</td>";
      echo "</tr>";
    
    echo "</table>";

    echo "Mohon untuk Melakukan Pembayaran saat Check In.";


  }
  elseif( $tipe = "Executive Room")
  {
    $harga = 800000;
    $hargatotal = $harga * $lama;

    echo "<br>";
    echo "<table>";

      echo "<tr>";
        echo "<td>Nama Pelanggan&nbsp;&nbsp;</td>";
        echo "<td>: $firstname $lastname</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Tanggal Check in</td>";
        echo "<td>: $checkin</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Tipe Kamar</td>";
        echo "<td>: $tipe</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Lama Menginap</td>";
        echo "<td>: $lama Malam</td>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>Harga Total</td>";
        echo "<td>: Rp. $hargatotal</td>";
      echo "</tr>";
    
    echo "</table>";

    echo "Mohon untuk Melakukan Pembayaran saat Check In.";


  }



}

?>

  <!-- END RESERVASI -->
  
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!-- Footer -->
    <footer align="center" style="padding: 20px; border: 1px solid black; margin-top: 50px;">
      <p>By HotelHebat copyright</p>
    </footer>
    <!--Akhir Footer-->
  </body>
</html>

