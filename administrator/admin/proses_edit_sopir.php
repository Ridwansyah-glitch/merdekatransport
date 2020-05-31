<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$id_sopir=$_POST['id_sopir'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_telepon=$_POST['no_telepon'];
mysql_query("update sopir set nama='$nama', alamat='$alamat', no_telepon='$no_telepon' where id_sopir='$id_sopir'");
  
echo "<script> alert ('Perubahan data sopir telah disimpan')
	location.replace('data_sopir.php')</script>";
?>

