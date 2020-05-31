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
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Pengelolaan Data Sopir Angkut Barang</h3>
              </div>
              <div class="panel-body">
                <div class="content-row">

                  <div class="col-md-12">
                    <h2 id="tables" class="page-header">Data Sopir Angkut Barang</h2>
                    <div class="bs-example">
<img src="icon/add.png" width=20px>&nbsp;<a href="input_sopir.php">Tambah Data Baru</a>
<br><br>
<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
 
$query="select * from sopir";
$result=mysql_query($query);
$jml=mysql_num_rows($result);
if ($jml==0) {
echo "<center><font color=red>---Belum Ada Data, silahkan menginput data baru---</font></center>";
} else {
?>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>NAMA SOPIR</th>
                            <th>ALAMAT</th>
                            <th>NOMOR TELEPON</th>
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
<td><?php echo $data['alamat'];?></td>
<td><?php echo $data['no_telepon'];?></td>
<td><center><a href="edit_sopir.php?id=<?php echo $data['id_sopir'];?>" title="Edit Data"><img src="icon/edit.png" height=20px></a>&nbsp;&nbsp;<a href="delete_sopir.php?id=<?php echo $data['id_sopir'];?>"  onClick="return confirm('Apakah anda yakin akan menghapus data ini?')" title="Delete Data"><img src="icon/delete.png" height=20px></a></td>
</tr>
<?php 
$no++;
}
}
?>

                        </tbody>
                      </table>
                    </div>


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
