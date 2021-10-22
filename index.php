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
        <a class="nav-link" href="#home">Home</a>  
        <a class="nav-link" href="#about">About Me</a>
        <a class="nav-link" href="#skill">Skill</a>
        <a class="nav-link" href="#Account">Social Media</a>
        <a class="nav-link" href="#Contact">Contact</a>
      </div>
    </div>
  </div>
</nav>

<!--Navbar Akhir-->

<!-- Jumbotron -->
<section class="jumbotron text-center text-light">
    <img src="img/foto2.jpeg" alt="Rizky Ananda" width="300" class="rounded-circle">
  <h1 class="display-4 dark">Rizky Ananda</h1>
  <p class="lead">Mahasiswa | Order Management Admin</p>
</section>
<!-- Akhir Jumbotron -->

<!-- Tentang Saya -->
<section class="About text-light" id="about">
    <div class="container">
      <div class="row">
<?php

$judul = "SELECT * FROM artikel where judulartikel='About Me'";
$hasil = mysqli_query($koneksi, $judul);
$row = mysqli_fetch_array($hasil);
?>
      <div class="col text-center">
        <h2><?= $row["judulartikel"]; ?></h2>
      <div class="row"> 
        <div class="col">
          <p2><?= $row["isi"]; ?></p2>
        </div>
      </div>
      </div>

<?php
$judul = "SELECT * FROM artikel where judulartikel='Education'";
$hasil = mysqli_query($koneksi, $judul);
$row = mysqli_fetch_array($hasil);
?>
      <div class="row"> 
      <div class="col text-center p-5">
      <h2><?= $row["judulartikel"]; ?></h2>
          <p2><?= $row["isi"]; ?></p2>
        </div>
<?php
$judul = "SELECT * FROM artikel where judulartikel='Experience'";
$hasil = mysqli_query($koneksi, $judul);
$row = mysqli_fetch_array($hasil);
?>
        <div class="col text-center p-5">
          <h2><?= $row["judulartikel"]; ?></h2>
          <p2><?= $row["isi"]; ?></p2>
        </div>
        </div>
      </div>
</section>
<!-- Akhir Tentang Saya -->

<!-- Skill -->
<section id="skill">
<div class="container text-white">
  <div class="row">
    <div class="col text-center">
      <h2>Skill</h2>
    </div>
  </div>
  <table class="table text-white">
  <thead>
    <tr>
      <th scope="col-8">Skill</th>
      <th scope="col-4">Percentase</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ms. Office</td>
      <td>80%</td>
    </tr>
    <tr>
      <td>Html</td>
      <td>60%</td>
    </tr>
    <tr>
      <td>PHP</td>
      <td>60%</td>
    </tr>
    <tr>
      <td>MySQL</td>
      <td>50%</td>
    </tr>
    <tr>
      <td>Perawatan Mobil</td>
      <td>70%</td>
    </tr>
  </tbody>
</table>
</div>
</section>
<!-- Akhir Skill -->

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

<!-- Contact -->
<section class="contact bg-dark text-white" id="Contact">
  <div class="container">
    <div class="row text-center">
      <div class="col pt-5">
        <h2>Contact Me</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3"></textarea>
          </div>
          
      <button type="submit" class="btn btn-primary">Submit</button>
      <div class="pb-5"></div>
      </form>
      </div>
    </div>
  </div>
</section> 
<!-- Akhir Contact -->

<!-- Footer -->
<footer class="bg-dark text-white text-center p-5">
  <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/rananda_7/" class="text-White fw-bold">
  Rizky Ananda </a></p>
</footer>
<!-- Akhir Footer -->

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