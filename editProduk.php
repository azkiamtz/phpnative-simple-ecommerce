<?php 
include 'koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: loginAdmin.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/bs/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Bebas+Neue&family=Poppins&family=Roboto&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Tambah Produk</title>
  </head>
  <body class="bg-light">
    

      <main>
          <div class="container p-5 d-flex justify-content-center my-4">
            <div class="card shadow border border-2 rounded-3 my-4" style="width: 100rem;">
                <div class="card-header">
                    <h2 class="text-center fw-bold text-uppercase" style="font-family: 'Roboto', 'Sans-serif';">Edit Produk</h2>
                </div>
                <div class="card-body p-4">
                    <form method="post" enctype="multipart/form-data">
                        <?php 
                                
                            if (isset($_POST['update'])) {
                                $idProduk = $_GET['id'];
                                $nmPenjual = $_POST['nama'];
                                $noHP = $_POST['hp'];
                                $merk = $_POST['merk'];
                                $harga = $_POST['harga'];
                                $kondisi = $_POST['kondisi'];
                                $desk = $_POST['desk'];
                                $sopi = $_POST['sopi'];
                                $tokped = $_POST['tokped'];                                
                                mysqli_query($conn, "UPDATE produk SET merk = '$merk',harga = $harga,nmPenjual = '$nmPenjual',noHp = '$noHP',kondisi = '$kondisi', deskripsi = '$desk', shopee = '$sopi', tokped = '$tokped' WHERE idProduk = $idProduk");
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Produk berhasil di Perbaharui!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                        ?>
                        <?php 
                            $idProd = $_GET['id'];
                            $queryTampil = mysqli_query($conn, "SELECT * FROM produk WHERE idProduk = $idProd");
                            $dta = mysqli_fetch_array($queryTampil);
                        ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputNama1" class="form-label">Nama Penjual</label>
                                    <input type="text" value="<?= $dta['nmPenjual']; ?>" name="nama" required class="form-control" id="exampleInputNama1" aria-describedby="NamaHelp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleHP1" class="form-label">No Handphone</label>
                                    <input type="text" value="<?= $dta['noHp']; ?>" name="hp" required class="form-control" id="exampleHP1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputNama1" class="form-label">Merk Tas</label>
                                    <input type="text" value="<?= $dta['merk']; ?>" name="merk" required class="form-control" id="exampleInputNama1" aria-describedby="NamaHelp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleHP1" class="form-label">Harga Tas</label>
                                    <input type="text" value="<?= $dta['harga']; ?>" name="harga" required class="form-control" id="exampleHP1">
                                </div>
                            </div>
                        </div>
                        <div class="row">        
                            <div class="col-lg-6">
                            <div class="mb-3">
                                    <label for="exampleInputNama1" class="form-label">Link Shopee</label>
                                    <input type="text" value="<?= $dta['shopee']; ?>" name="sopi" required class="form-control" id="exampleInputNama1" aria-describedby="NamaHelp">
                                </div>
                            </div>                    
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleHP1" class="form-label">Kondisi Tas</label>
                                    <input type="text" value="<?= $dta['kondisi']; ?>" name="kondisi" required class="form-control" id="exampleHP1">
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleHP1" class="form-label">Deskripsi</label>
                                    <textarea name="desk" required class="form-control" id="exampleHP1" rows="5"><?= $dta['deskripsi']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                
                                <div class="mb-3">
                                    <label for="exampleHP1" class="form-label">Link Tokopedia</label>
                                    <input type="text" value="<?= $dta['tokped']; ?>" name="tokped" required class="form-control" id="exampleHP1">
                                </div>
                            </div>
                        </div>
                        <a href="admin.php" class="btn btn-secondary border-0">Kembali</a>
                        <button type="submit" name="update" class="btn btn-primary border-0" style="background: #cdb36b;">Perbaharui</button>                                            
                    </form>
                </div>
            </div>
          </div>

      </main>

   

     

  
      <script src="assets/bs/js/bootstrap.bundle.min.js"></script>
    

  </body>
</html>

