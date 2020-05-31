<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon =$_POST['no_telepon'];
$query = "INSERT INTO sopir VALUES ('','$nama','$alamat','$no_telepon')";
$sql=mysql_query($query);
if ($sql != 0){
	echo "<script> alert ('Proses simpan data sopir angkut barang berhasil')
	location.replace('data_sopir.php')</script>";	
}
else {
	echo "<script> alert ('Gagal disimpan')
	location.replace('input_sopir.php')</script>";
}	
?>