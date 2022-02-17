<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Website Hotel Hebat</title>
  </head>
  <body>
   
  <!-- MULAI NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="images/logo.jpg" alt="" width="90" height="85" class="d-inline-block align-text-top">
      
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="admin.php">Admin Login</a></li>
            <li><a class="dropdown-item" href="reservasiLangsung.php">Reservasi Langsung</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="fasilitaslain.php">Fasilitas Lainnya</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  
  <!-- END NAVBAR -->
  <!-- MULAI CAROUSEL -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/deluxe.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Deluxe Room</h5>
        <p>Temukan kenyamanan dengan harga yang masih afordable dengan Deluxe Room kami.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/suite2.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Suite Room</h5>
        <p>Rasakan Suasana Kenyamanan Eksklusif dengan Suite Room Kami.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/executive.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Executive Room</h5>
        <p>Dengan Executive Room, dapatkan pengalaman mewah yang berkesan.</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!-- END CAROUSEL -->

  <!-- START KENAPA HOTEL HEBAT -->
    <br>
    <br>
    <div class="container">
    <div class="row">

    <div class="col-md-4">
            <img src="images/content1.jpg" class="img-fluid" alt="...">
        </div>

        <div class="col">
            <h4>Kenapa Harus Hotel Hebat?</h4>
            <p>Kami menawarkan pengalaman dengan kualitas bintang 5 dengan harga yang afordable. Melihat dari mulai maraknya
                orang-orang yang staycation, kami ingin memberikan yang terbaik agar staycation dapat dinikmati dengan nyaman.
            </p>
            <a href="about.php">baca selengkapnya</a>
        </div>

    </div>

    </div>

    <br>
    <br>
    <div class="container">
    <div class="row">

        <div class="col">
            <h4>Fasilitas Unggulan</h4>
            <p>Salah Satu fasilitas ungulan kami adalah ballroom yang luas. Ruang ini dapat digunakan secara umum, baik itu untuk acara wedding ataupun lainnya.</p>
            <a href="fasilitaslain.php">baca selengkapnya</a>
        </div>

        <div class="col-md-4">
            <img src="images/content2.jpg" class="img-fluid" alt="...">
        </div>

    </div>

    </div>
    <br>
    <br>

    
  <!-- END KENAPA -->

  <!-- START CONTENT -->
    <div class="mx-auto" style="width: 400px;">
        <h3>Tipe Kamar yang Tersedia</h3>
    </div>
    <br>
<div class="card-group">
    <div class="card">
        <img src="images/deluxe.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Deluxe Room</h5>
        <p class="card-text">Sangat cocok untuk anda yang ingin tetap mendapatkan experience mewah, tetapi dengan budget yang masih sesuai dengan kualitasnya.</p>
        </div>
        <div class="card-footer">
        <a href="kamar/deluxe.php" class="btn btn-primary">Cek Selengkapnya</a>
        </div>
    </div>
    <div class="card">
        <img src="images/suite2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Suite Room</h5>
        <p class="card-text">Diperuntukan untuk anda yang ingin merasakan kualitas premium dari hotel kami.</p>
        </div>
        <div class="card-footer">
        <a href="kamar/suite.php" class="btn btn-primary">Cek Selengkapnya</a>
        </div>
    </div>
    <div class="card">
        <img src="images/executive.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Executive Room</h5>
        <p class="card-text">Kelas teratas kamar kami, untuk anda yang ingin merasakan pelayanan dan fasilitas unggulan kami, ini rekomendasi terbaik untuk anda.</p>
        </div>
        <div class="card-footer">
        <a href="kamar/executive.php" class="btn btn-primary">Cek Selengkapnya</a>
        </div>
    </div>
</div>
  

  <!-- END CONTENT -->
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