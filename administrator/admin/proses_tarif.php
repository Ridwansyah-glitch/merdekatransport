<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$max =$_POST['max'];
$harga =$_POST['harga'];
$query = "INSERT INTO tarif VALUES ('','$asal','$tujuan','$max','$harga')";
$sql=mysql_query($query);
if ($sql != 0){
	echo "<script> alert ('Proses simpan data tarif angkut barang berhasil')
	location.replace('data_tarif.php')</script>";	
}
else {
	echo "<script> alert ('Gagal disimpan')
	location.replace('input_tarif.php')</script>";
}	
?>