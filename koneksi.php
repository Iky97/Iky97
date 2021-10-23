<?php
    $serverName = "sql208.epizy.com";
    $userName = "epiz_30144639";
    $password = "ydkWnVXDQHVy";
    $dbName = "epiz_30144639_resume";

    //Buat Koneksi 
    $koneksi = mysqli_connect($serverName, $userName, $password, $dbName);

    //cek koneksi
    if (!$koneksi) {
        die("Koneksi Gagal". mysqli_connerct_error());
    }
?>