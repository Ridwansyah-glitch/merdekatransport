<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$id_tarif=$_POST['id_tarif'];
$asal=$_POST['asal'];
$tujuan=$_POST['tujuan'];
$max=$_POST['max'];
$harga=$_POST['harga'];
mysql_query("update tarif set kota_asal='$asal', kota_tujuan='$tujuan', max_kapasitas='$max', harga='$harga' where id_tarif='$id_tarif'");
  
echo "<script> alert ('Perubahan data tarif telah disimpan')
	location.replace('data_tarif.php')</script>";
?>

