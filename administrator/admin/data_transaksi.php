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
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Konfirmasi Data Pelanggan</h3>
              </div>
              <div class="panel-body">
                <div class="content-row">

                  <div class="col-md-12">
                    <h2 id="tables" class="page-header">Data Transaksi Angkut Barang</h2>
                    <div class="bs-example">

<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
 
$query="select * from pelanggan, transaksi, tarif where transaksi.id_pelanggan=pelanggan.id_pelanggan and transaksi.id_tarif=tarif.id_tarif and transaksi.status<>'1'";
$result=mysql_query($query);
$jml=mysql_num_rows($result);
if ($jml==0) {
echo "<center><font color=red>---Belum Ada Data---</font></center>";
} else {
?>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>NAMA PELANGGAN</th>
                            <th>KOTA ASAL</th>
                            <th>KOTA TUJUAN</th>
                            <th>TANGGAL ANGKUT</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
<?php	
$no=1;
while($data=mysql_fetch_array($result)){
?>
<td><?php echo $no;?></td>
<td><?php echo $data['nama'];?></td>
<td><?php echo $data['kota_asal'];?></td>
<td><?php echo $data['kota_tujuan'];?></td>
<td>
<?php
$tanggal=$data['tanggal']; 
echo date("d-m-Y", strtotime($tanggal));
?>
</td>
<?php
if($data['status']=="2"){
?>
<td>Belum Konfirmasi</td>
<td align=center><a href="detail_transaksi.php?id=<?php echo $data['id_transaksi'];?>"><input type="button" value="Detail Transaksi"></a>&nbsp;<a href="input_sopir_angkut.php?id=<?php echo $data['id_transaksi'];?>"><input type="button" value="Input Sopir"></a></td>
<?php
} else if($data['status']=="3"){
?>
<td>Sudah Konfirmasi</td>
<td align=center><a href="detail_transaksi.php?id=<?php echo $data['id_transaksi'];?>"><input type="button" value="Detail Transaksi"></a>&nbsp;<a href="cetak_nota.php?id=<?php echo $data['id_transaksi'];?>" target="_blank"><input type="button" value="Cetak Nota Pembayaran"></a>&nbsp;<a href="konfirmasi_terkirim.php?id=<?php echo $data['id_transaksi'];?>"><input type="button" value="Konfirmasi Terkirim"></a></td>
<?php
} else {
?>
<td>Transaksi selesai</td>
<td align=center><a href="detail_transaksi.php?id=<?php echo $data['id_transaksi'];?>"><input type="button" value="Detail Transaksi"></a></td>
<?php
}
?>
</tr>
<?php 
$no++;
}
}
?>

                        </tbody>
                      </table>
                    </div>
<br>
<center>
<form method="post" action="cetak_laporan.php" target="_blank">
Periode Laporan : 
<select name="bulan" required>
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
          
<select name="tahun" required>
           <?php
                        $now=date("Y");
                     
                            for ($a=$now;$a>=2018;$a--)
                                {
                                    echo "<option value=".$a." >".$a."</option>";
                                }
                    ?>
          </select>
<input type="submit" value="Cetak Laporan">
</form>
<br>
            </div>
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
