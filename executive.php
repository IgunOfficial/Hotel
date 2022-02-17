<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Executive Room by Hotel Hebat</title>
  </head>
  <body>
   
  <!-- MULAI NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="../images/logo.jpg" alt="" width="90" height="85" class="d-inline-block align-text-top">
      
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="../index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tipe Kamar Lainnya
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="deluxe.php">Deluxe Room</a></li>
            <li><a class="dropdown-item" href="suite.php">Suite Room</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../fasilitaslain.php">Fasilitas Lainnya</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  
  <!-- END NAVBAR -->

  
    <div class="row">
        <div class="col-md-6"> 
                <img src="../images/executive.jpg" class="img-fluid" alt="...">
        </div>

    </div>

    <h4>Executive Room</h4>
    <p>Diperuntukan untuk anda yang mencari experience mewah dan eksklusif. Executive Room adalah kamar bergaya Indonesia Klasik dengan material yang didominasi kayu,
        menjadikan tipe kamar ini memiliki kesan yang teramat nyaman.
    </p>

    <h5>Features</h5>
    
        <div class="col-md-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Hotel Hebat Signature Product</li>
                <li class="list-group-item">Pemandangan kota dan kolam renang</li>
                <li class="list-group-item">Free Breakfast</li>
                <li class="list-group-item">Gym Pass</li>
                <li class="list-group-item">Buffet Pass</li>
            </ul>
        </div>

    <br>
    <br>

    <h5>Fasilitas</h5>
    
        <div class="col-md-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Perlengkapan tidur</li>
                <li class="list-group-item">Toilet dan bathtub terpisah</li>
                <li class="list-group-item">Handuk dan bathrobe</li>
                <li class="list-group-item">Akses Wi-Fi</li>
                
            </ul>
        </div>
        <br>
        <br>
        <div class="mx-auto" style="width: 400px;">
        <h3>Reservasi Executive Room</h3>
        </div>
        <hr>


    <!-- FORM BOOKING -->
    
    <form class="row g-3" action="" method="post">
    <div class="col-md-6">
      <label for="firstname" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
    
    <div class="col-md-6">
      <label for="checkin" class="form-label">Tanggal Check-in</label>
      <input type="date" class="form-control" name="checkin">
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
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $checkin = $_POST['checkin'];
    $lama = $_POST['lama'];

    $harga = 800000;
    $hargatotal = $harga * $lama;

    echo "<table>";
        echo "<tr>";
            echo "<td>Nama Pengunjung</td>";
            echo "<td>: $nama</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>Tanggal Check-in</td>";
            echo "<td>: $checkin</td>";
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

    echo "Silahkan lakukan pembayaran saat melakukan Check In.";
}


?>
  
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


