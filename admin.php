<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tentang HotelHebat</title>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
  
  <!-- END NAVBAR -->

  <form class="row g-3" action="" method="post">
    
    <div class="col-md-6">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" name="firstname">
    </div>
    <div class="col-md-6">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" name="lastname">
    </div>

    <div class="col-md-4">
      <label for="nip" class="form-label">NIP</label>
      <input type="text" class="form-control" name="nip">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary" name="submit">Login as Admin</button>
    </div>
</form>
  
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <?php
    if (isset($_POST['submit']))
    {
      $firstname = $_POST ['firstname'];
      $lastname = $_POST ['lastname'];
      $nip = $_POST ['nip'];

      echo "<table>";
        echo "<tr>";
          echo "<td>Nama</td>";
          echo "<td>: $firstname $lastname</td>";
        echo "</tr>";

        echo "<tr>";
          echo "<td>NIP</td>";
          echo "<td>: $nip</td>";
        echo "</tr>";

      echo "</table>";
    }
    
    ?>

    <!-- Footer -->
    <footer align="center" style="padding: 20px; border: 1px solid black; margin-top: 50px;">
      <p>By HotelHebat copyright</p>
    </footer>
    <!--Akhir Footer-->
  </body>
</html>