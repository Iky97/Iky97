<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "resume";

    //Buat Koneksi 
    $koneksi = mysqli_connect($serverName, $userName, $password, $dbName);

    //cek koneksi
    if (!$koneksi) {
        die("Koneksi Gagal". mysqli_connerct_error());
    }
?>