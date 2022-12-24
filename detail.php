<?php 
include 'koneksi.php';
session_start();

$idProduk = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE idProduk = $idProduk");
$dt = mysqli_fetch_array($query);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/bs/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&display=swap" rel="stylesheet">

    <title><?= $dt['merk']; ?> | AnyBag</title>
  </head>
  <body>
    

      <main>
          <div class="container-lg-fluid container p-lg-5 px-5">
              <div class="row mt-5">
                  <div class="col-lg-6">
                      <img src="assets/img/<?= $dt['foto']; ?>" class="img-detail" style="object-fit: contain;" width="100%" height="435vh" alt="produk">
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-lg-7">
                        <h3 class="fw-bold text-uppercase"><?= $dt['merk']; ?></h3>                      
                      </div>
                      <div class="col-lg-5 d-lg-flex justify-content-end">
                        <h4 class="price">Rp. <?= $dt['harga']; ?></h4>
                      </div>
                    </div>
                      <hr>
                      <p class="mb-1 desc"> <strong class="text-uppercase">Nama Penjual :</strong>  <?= $dt['nmPenjual']; ?></p>
                      <p class="mb-1 desc"><strong class="text-uppercase">No Telpon Penjual :</strong>  <?= $dt['noHp']; ?></p>
                      <p class="mb-1 desc"><strong class="text-uppercase">Kondisi :</strong>  <?= $dt['kondisi']; ?></p>
                      <p class="mb-0 desc"> <strong class="text-uppercase">Deskripsi  :</strong> </p>
                      <div class="deskripsi">
                        <p class="mb-1 desc"><?= $dt['deskripsi']; ?></p>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-12 ">
                          <h6 class="fw-bold mb-3">Beli via :</h6>
                            <a href="https://wa.me/6285776594448" target="_blank" class="btn btn-primary border-0 " style="background: #128C7E;">WhatsApp</a>
                            <a href="https://shopee.co.id/<?= $dt['shopee']; ?>" target="_blank" class=" btn btn-primary border-0" style="background: #f7462f;">Shopee</a>
                            <a href="https://www.tokopedia.com/hakimkiyul/<?= $dt['tokped']; ?>" target="_blank" class="btn btn-primary border-0" style="background: #03ac0e;">Tokopedia</a>
                        </div>
                    </div>
                    </div>
              </div>

              
              
             
              <?php 
                if (isset($_SESSION['username'])) {  
              ?>
              <div class="row mt-lg-4 mt-3 mb-3 ">
                  <div class="col-12 ">
                      <a href="admin.php" class="text-decoration-none">Kembali ke Halaman Admin</a>                                       
                  </div>
              </div>
              <?php }else{?>
                <div class="row mt-lg-4 mt-3 mb-3 ">
                  <div class="col-12 ">
                      <a href="shop.php" class="text-decoration-none">Kembali ke Shop</a>                                       
                  </div>
              </div>
              <?php } ?>
          </div>

      </main>
      

     
  
      <script src="assets/bs/js/bootstrap.bundle.min.js"></script>
    

  </body>
</html>