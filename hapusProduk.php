<?php 
include 'koneksi.php';
session_start();

    $idProduk = $_GET['id'];
    $queryCek = mysqli_query($conn , "SELECT * FROM produk WHERE idProduk = $idProduk");
    $dta = mysqli_fetch_array($queryCek);
    $foto = $dta['foto'];
    unlink("assets/img/".$foto);
    $queryApus = mysqli_query($conn,"DELETE FROM produk WHERE idProduk = $idProduk");
    header('location: admin.php');


?>