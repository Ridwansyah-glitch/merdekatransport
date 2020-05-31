<?php	

mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
mysql_query("DELETE FROM tarif WHERE id_tarif='$_GET[id]'");

echo "<script> alert ('Data tarif telah berhasil dihapus')
	location.replace('data_tarif.php')</script>";
?>
