<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");

$id_transaksi=$_POST['id_transaksi'];
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "administrator/admin/data/$nama_file";
if (!empty($lokasi_file)) {
move_uploaded_file($lokasi_file,$direktori);  
mysql_query("update transaksi set bukti_pembayaran='$nama_file', status='2' where id_transaksi='$id_transaksi'");
  
echo "<script> alert ('Upload bukti pembayaran berhasil')
	location.replace('konfirmasi_dp.php')</script>";
}
?>