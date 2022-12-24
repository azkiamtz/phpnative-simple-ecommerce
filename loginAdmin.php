<?php 
include 'koneksi.php';
session_start();
if (isset($_SESSION['username'])) {
    header('location: admin.php');
}else{
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/bs/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Bebas+Neue&family=Poppins&family=Roboto&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Login for Admin</title>
  </head>
  <body class="bg-light">
    

      <main>
          <div class="container p-5 d-flex justify-content-center my-4">
            <div class="card shadow border border-2 rounded-3 my-4" style="width: 30rem;">
                <div class="card-header">
                    <h2 class="text-center fw-bold text-uppercase" style="font-family: 'Roboto', 'Sans-serif';">Login Here</h2>
                </div>
                <div class="card-body p-4">
                    <form method="post">
                        <?php 
                            if (isset($_POST['login'])) {
                                $usr = $_POST['username'];
                                $pwd = sha1($_POST['password']);

                                $query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$usr' AND password = '$pwd'");
                                $cek = mysqli_num_rows($query);
                                if ($cek == 1) {
                                    $data = mysqli_fetch_array($query);
                                    $_SESSION['username'] = $usr;
                                    $_SESSION['password'] = $pwd;
                                    $_SESSION['idAdmin'] = $data['idAdmin'];
                                    $_SESSION['nmAdmin'] = $data['nmAdmin'];
                                    header('location: admin.php');
                                }else{
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Username atau Password salah!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>';
                                }
                            }
                        ?>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Username</label>
                            <input type="text" name="username" required class="form-control" id="exampleInputUsername1" aria-describedby="UsernameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
                        </div>
                            <button type="submit" name="login" class="btn btn-primary border-0" style="background: #cdb36b;">Login</button>
                            <a href="shop.php" class="btn btn-secondary border-0">Go Shop</a>
                    </form>
                </div>
            </div>
          </div>

      </main>

   

     

  
      <script src="assets/bs/js/bootstrap.bundle.min.js"></script>
    

  </body>
</html>

<?php } ?>