<!doctype html>
<html lang="en">
  <head>
    <title>CV. Merdeka Transport</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/tabel.css">
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
 			<a class="dropdown-item" href="konfirmasi_dp.php">Konfirmasi Pembayaran DP</a>
			<a class="dropdown-item active" href="history_transaksi.php">History Transaksi</a>
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
session_start();
mysql_connect("localhost","root","");
mysql_select_db("db_merdeka");
$username=$_SESSION['username'];
$ambil=mysql_query("select * from pelanggan where username='$username'");
$d=mysql_fetch_array($ambil);
$id_pelanggan=$d['id_pelanggan'];
$cek=mysql_query("select transaksi.id_transaksi, transaksi.status, transaksi.tanggal, tarif.kota_asal, tarif.kota_tujuan, tarif.harga, pelanggan.nama from transaksi, tarif, pelanggan where transaksi.id_tarif=tarif.id_tarif and transaksi.id_pelanggan=pelanggan.id_pelanggan and transaksi.id_pelanggan='$id_pelanggan'");
?>
      <section class="site-section py-sm">
        <div class="container">
<br>
<center>
<h2>HISTORY TRANSAKSI</h2>
<hr>
<table border=1>
<tr>
<th><center>No</th>
<th><center>ID Transaksi</th>
<th><center>Nama Pelanggan</th>
<th><center>Asal</th>
<th><center>Tujuan</th>
<th><center>Tanggal </th>
<th><center>Tarif </th>
<th><center>Status</th>
</tr>
<?php
$no=1;
while($data=mysql_fetch_array($cek)){
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $data['id_transaksi'];?></td>
<td><?php echo $data['nama'];?></td>
<td><?php echo $data['kota_asal'];?></td>
<td><?php echo $data['kota_tujuan'];?></td>
<td>
<?php
$tanggal=$data['tanggal']; 
echo date("d-m-Y", strtotime($tanggal));
?>
</td>
<td>
<?php
$jumlah=$data['harga'];
$jumlah_desimal="2";
$pemisah_desimal=",";
$pemisah_ribuan=".";
echo "Rp ".number_format($jumlah,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);
?>
</td>
<?php
if($data['status']=="4"){
?>
<td>Sudah Dikirim</td>
<?php
} else {
?>
<td>Sedang Dikirim</td>
<?php
}
?>
</tr>
<?php
$no++;
}
?>
</table>
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