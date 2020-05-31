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
			<a class="dropdown-item active" href="input_transaksi.php">Input Transaksi</a>
 			<a class="dropdown-item" href="konfirmasi_dp.php">Konfirmasi Pembayaran DP</a>
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
session_start();
mysql_connect("localhost","root","");
mysql_select_db("db_merdeka");
$username=$_SESSION['username'];
$ambil=mysql_query("select * from pelanggan where username='$username'");
$data=mysql_fetch_array($ambil);

$cari_kd=mysql_query("select max(id_transaksi)as kode from transaksi");
$tm_cari=mysql_fetch_array($cari_kd);
$kode=substr($tm_cari['kode'],5,5); 
$tambah=$kode+1;
	if($tambah<5){
    $id="TRNSK0000".$tambah;
    }else{
    $id="TRNSK000".$tambah;
    }
?>
      <section class="site-section py-sm">
        <div class="container">
<br>
<center>
<h2>INPUT TRANSAKSI PENGANGKUTAN BARANG</h2>
<hr>
<form method="post" action="proses_transaksi.php">
<input type="hidden" name="id_pelanggan" value="<?php echo $data['id_pelanggan'];?>">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table border=0>
<tr><td>Kota Asal</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
<select name="asal">
<option value="Purwakarta">Purwakarta</option>
<option value="Subang">Subang</option>
<option value="Karawang">Karawang</option>
<option value="Bekasi">Bekasi</option>
</select>
</td></tr>
<tr><td>Kota Tujuan</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
<select name="tujuan">
<option value="Purwakarta">Purwakarta</option>
<option value="Subang">Subang</option>
<option value="Karawang">Karawang</option>
<option value="Bekasi">Bekasi</option>
</select>
</td></tr>
<tr><td>Tanggal Penyewaan </td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
<select name="tgl" required>
        <?php
        for ($a=1;$a<=31;$a++)
        {
        echo "<option value=".$a.">".$a."</option>";
        }
        ?>
          </select> <select name="bln" required>
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select> 
</td></tr>
<tr><td valign=top>Alamat Penjemputan</td><td valign=top>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
Nama Jalan / Desa :<br>
<input type="text" name="jalan1" maxlength=50 size=50 placeholder="Masukan Nama Jalan / Desa"><br>
Nomor RT :<br>
<input type="text" name="rt1" maxlength=3 size=50 placeholder="Masukan Nomor RT"><br>
Nomor RW :<br>
<input type="text" name="rw1" maxlength=3 size=50 placeholder="Masukan Nomor RW"><br>
Nama Kecamatan :<br>
<input type="text" name="kecamatan1" maxlength=50 size=50 placeholder="Masukan Nama Kecamatan"><br>
Masukan Kabupaten :<br>
<input type="text" name="kabupaten1" maxlength=50 size=50 placeholder="Masukan Nama Kabupaten">
</td></tr>
<tr><td valign=top>Alamat Tujuan</td><td valign=top>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
Nama Jalan / Desa :<br>
<input type="text" name="jalan" maxlength=50 size=50 placeholder="Masukan Nama Jalan / Desa"><br>
Nomor RT :<br>
<input type="text" name="rt" maxlength=3 size=50 placeholder="Masukan Nomor RT"><br>
Nomor RW :<br>
<input type="text" name="rw" maxlength=3 size=50 placeholder="Masukan Nomor RW"><br>
Nama Kecamatan :<br>
<input type="text" name="kecamatan" maxlength=50 size=50 placeholder="Masukan Nama Kecamatan"><br>
Masukan Kabupaten :<br>
<input type="text" name="kabupaten" maxlength=50 size=50 placeholder="Masukan Nama Kabupaten">
</td></tr>
</table>
<br>
<input type="submit" value="Pesan"><a href="depan_pelanggan.php"><input type="button" value="Batal">
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