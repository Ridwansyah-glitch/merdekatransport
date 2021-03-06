<!doctype html>
<html lang="en">
  <head>
    <title>CV. Merdeka Transport</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
<br><h2>&nbsp;</font></h2><br>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="index.html">CV. Merdeka Transport</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="depan_pelanggan.php">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="info_tarif.php">Informasi Tarif</a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transaksi</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
			<a class="dropdown-item" href="input_transaksi.php">Input Transaksi</a>
 			<a class="dropdown-item active" href="konfirmasi_dp.php">Konfirmasi Pembayaran DP</a>
			<a class="dropdown-item" href="history_transaksi.php">History Transaksi</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->


<?php
mysql_connect("localhost","root","");
mysql_select_db("db_merdeka");
?>
      <section class="site-section py-sm">
        <div class="container">
<br>
<center>
<h2>UPLOAD BUKTI PEMBAYARAN</h2>
<hr>
<form enctype="multipart/form-data" method="post" action="proses_konfirmasi.php">
<input type="hidden" name="id_transaksi" value="<?php echo $_GET['id'];?>">
<font color=black>Bukti Pembayaran : <input type="file" name="gambar"  name="filename" accept="image/*" required/>
<br><br><input type="submit" value="Proses Konfirmasi">
</font>
</form>
<br><br>
        </div>
      </section>
    
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Dibuat oleh : Ridwansyah

            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>