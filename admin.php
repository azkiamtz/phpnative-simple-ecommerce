<?php 
include 'koneksi.php';
session_start();

if (!$_SESSION['username']) {
    header('location: loginAdmin.php');
}else{

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/bs/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
  
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Bebas+Neue&family=Poppins&family=Roboto&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Dashboard Admin | AnyBag</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background:#eef2f3">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Hai, <?= $_SESSION['nmAdmin']; ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            
            
            <li class="nav-item">
              <a class="nav-link" href="tambahProduk.php" aria-current="page">Tambah Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>

    </nav>

      <main>
        
          <div class="container-fluid p-5">
              <div class="row mx-auto">
                <?php 
                  $queryProduk = mysqli_query($conn , "SELECT * FROM produk ORDER BY idProduk DESC");
                  
                  

                  while ($dtProduk = mysqli_fetch_array($queryProduk)) {                                        
                ?>
                <div class="col-lg-3 mb-3">
                    <div class="card border-0 shadow" style="width: 18rem;">
                        <img src="assets/img/<?= $dtProduk['foto']; ?>" style="height: 12rem; object-fit: contain;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center"><?= $dtProduk['merk']; ?></h5>
                          <hr>                          
                          <div class="row mx-auto">
                              <div class="col-7">
                                <a href="detail.php?id=<?= $dtProduk['idProduk']; ?>" class="btn btn-primary border-0" style="background: #cdb36b; width:100%;"><i class="fas fa-info-circle"></i> Detail</a>
                              </div>                       
                              <div class="col-2">
                                <a href="editProduk.php?id=<?= $dtProduk['idProduk']; ?>" class="btn btn-warning border-0" style="color:#fff;"><i class="fas fa-pencil-alt"></i></a>
                              </div>    
                              <div class="col-2">
                                  <a href="hapusProduk.php?id=<?= $dtProduk['idProduk']; ?>"   class="btn btn-danger border-0" name="hapus"><i class="fas fa-trash"></i></a>
                              </div>         
                          </div>
                        </div>
                      </div>
                </div>
                <?php 
                    }                                      
                ?>

              </div>

                  

              <div class="row mt-5">
                  <div class="col-12 text-center">
                      <a href="index.html">Halaman Utama</a>
                      <span>|</span>
                      <a href="shop.html">Produk Kami</a>
                      <span>|</span>
                      <a href="kontak.html">Kirim Saran</a>                      
                  </div>
              </div>
          </div>

      </main>

   

      <footer class="py-3 mt-4 bg-light">
        <p class="my-3 text-center">Copyright&copy;<?= date('Y');?> by ANYBAG</p>
      </footer>

  
      <script src="assets/bs/js/bootstrap.bundle.min.js"></script>
    

  </body>
</html>

<?php } ?>