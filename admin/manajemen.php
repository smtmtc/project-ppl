<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body class="">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../admin.php">Tempe Bu Asri</a>
        <!-- Sidebar Toggle-->
        <div class="navbar-nav ">
          <a class="nav-item nav-link" href="../admin.php">Home</a>
          <a class="nav-item nav-link" href="penjualan.php">Penjualan</a>
          <a class="nav-item nav-link active" href="manajemen.php">Manajemen <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="bahan_baku.php">Bahan Baku</a>
          <a class="nav-item nav-link" href="pembayaran.php">Pembayaran</a>
          <a class="nav-item nav-link" href="pembelian.php">Pembelian</a>
          <a class="nav-item nav-link" href="distribusi.php">Distribusi</a>
        </div>
    </nav>
    <div id="layoutSidenav" style="background-color: #00FF7F;">
      <div id="layoutSidenav_content">
          <main class="my-4 mx-auto" style="width: 1000px;">
              <div class="container-fluid px-4">
              <h1 class="text-center align-items-center">HALAMAN MANAJEMEN</h1>
                  <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="card bg-light mb-4">
                            <div class="card-body">
                              <h5 class="d-flex justify-content-center"><a href="manajemen/m_produksi.php" class="stretched-link"></a> Manajemen Produksi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="card bg-light mb-4">                                    
                            <div class="card-body">
                              <h5 class="d-flex justify-content-center"><a href="manajemen/m_keuangan.php" class="stretched-link"></a> Manajemen Keuangan</h5>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </main>
      </div>
    </div>

    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
  </body>
</html>