<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$kode = $_POST['kode'];

$cek = mysql_query("SELECT * FROM pelanggan WHERE kode='$kode'");
if (mysql_num_rows($cek)==0) {
    echo "<script> alert ('Maaf, kode yang anda masukan salah')
	history.go(-1)</script>";
} else {
mysql_query("update pelanggan set status='3' where kode='$kode'"); 

	echo "<script> alert ('Akun anda sudah aktif. Terimakasih')
	location.replace('index.php')</script>";	

}

?>