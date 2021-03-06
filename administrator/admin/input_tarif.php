<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CV MERDEKA TRANSPORT</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="dist/js/site.min.js"></script>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h4><font color=white>CV MERDEKA TRANSPORT</font></h4>
          </div>

        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><a href="depan_admin.php"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>
                <li class="list-group-item"><a href="data_pelanggan.php"><i class="glyphicon glyphicon-th-list"></i>Data Pelanggan </a></li>
                <li class="list-group-item"><a href="data_sopir.php"><i class="glyphicon glyphicon-th-list"></i>Data Sopir </a></li>
                <li class="list-group-item"><a href="data_tarif.php"><i class="glyphicon glyphicon-th-list"></i>Data Tarif Angkut </a></li>
                <li class="list-group-item"><a href="data_transaksi.php"><i class="glyphicon glyphicon-th-list"></i>Transaksi </a></li>
                <li class="list-group-item"><a href="logout.php" ><i class="glyphicon glyphicon-lock"></i>Logout</a></li>

              </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Pengelolaan Data Tarif Angkut Barang</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
		  <center>
                    <h2 class="content-row-title">INPUT DATA TARIF ANGKUT BARANG</h2><hr>
<form method="post" action="proses_tarif.php">
<table border=0>
<tr><td>Kota Asal</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
<select name="asal">
<option value="Purwakarta">Purwakarta</option>
<option value="Subang">Subang</option>
<option value="Karawang">Karawang</option>
<option value="Bekasi">Bekasi</option>
</select>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Kota Tujuan</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
<select name="tujuan">
<option value="Purwakarta">Purwakarta</option>
<option value="Subang">Subang</option>
<option value="Karawang">Karawang</option>
<option value="Bekasi">Bekasi</option>
</select>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Kapasitas Maximum</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><input type="text" name="max" maxlength=10 size=10 required/> Kilogram</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Harga Angkut</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><input type="text" name="harga" maxlength=10 size=10 required/> Rupiah</td></tr>
<tr><td>&nbsp;</td></tr>
</table>
<br>
<input type="submit" value="Simpan">&nbsp;&nbsp;<a href="data_tarif.php"><input type="button" value="Kembali"></a>
</form>
        </div><!-- content -->
      </div>
    </div>
    <!--footer-->
    <div class="site-footer">
      <div class="container">
        <div class="copyright clearfix">
          <center>
		<p><b>Sistem Informasi Pelayanan Jasa Angkut Barang</b>
          	<p>Copyright &copy; Ridwansyah - 2019</p>
	  </center>
        </div>
      </div>
    </div>
  </body>
</html>
