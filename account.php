<!doctype html>
<html lang="en">
<?php
include("koneksi.php");
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <title>Portofolio Rizky Ananda</title>
  </head>
  <body id="home">

  <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

<!--Navbar Awal-->    

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Rizky Ananda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="index.php">Home</a>  
        <a class="nav-link" href="about.php">About Me</a>
        <a class="nav-link" href="skill.php">Skill</a>
        <a class="nav-link" href="account.php">Social Media</a>
        <a class="nav-link" href="contact.php">Contact</a>
      </div>
    </div>
  </div>
</nav>

<!--Navbar Akhir-->

<!-- Social Media -->
<section id="Account">
<div class="container text-center text-light">
  <div class="row">
    <div class="col">
      <h2>Social Media</h2>
    </div>
  </div>
  <div class="row text-dark pt-5">
    <div class="col-md-3 mb-3">
      <div class="card">
          <img src="img/instagram.jpg" class="card-img-top" alt="...">
          <?php
          $judul = "SELECT * FROM artikel where judulartikel='Instagram'";
          $hasil = mysqli_query($koneksi, $judul);
          $row = mysqli_fetch_array($hasil);
          ?>
        <div class="card-body">
          <h2><?= $row["judulartikel"]; ?></h2>
          <p class="card-text"><?= $row["isi"]; ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card">
          <img src="img/linkedin.png" class="card-img-top" alt="...">
          <?php
          $judul = "SELECT * FROM artikel where judulartikel='Linked In'";
          $hasil = mysqli_query($koneksi, $judul);
          $row = mysqli_fetch_array($hasil);
          ?>
        <div class="card-body">
          <h2><?= $row["judulartikel"]; ?></h2>
          <p class="card-text"><?= $row["isi"]; ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card">
          <img src="img/whatsapp.png" class="card-img-top" alt="...">
          <?php
          $judul = "SELECT * FROM artikel where judulartikel='Whatsapp'";
          $hasil = mysqli_query($koneksi, $judul);
          $row = mysqli_fetch_array($hasil);
          ?>
        <div class="card-body">
          <h2><?= $row["judulartikel"]; ?></h2>
          <p class="card-text"><?= $row["isi"]; ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card">
          <img src="img/email3.png" class="card-img-top" alt="...">
          <?php
          $judul = "SELECT * FROM artikel where judulartikel='Email'";
          $hasil = mysqli_query($koneksi, $judul);
          $row = mysqli_fetch_array($hasil);
          ?>
        <div class="card-body">
          <h2><?= $row["judulartikel"]; ?></h2>
          <p class="card-text"><?= $row["isi"]; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Akhir Social Media -->


<!-- Gambar Background Diambil dari https://unsplash.com/photos/JYGnB9gTCls & Google Images -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>