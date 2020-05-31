<?php	

mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
mysql_query("DELETE FROM sopir WHERE id_sopir='$_GET[id]'");

echo "<script> alert ('Data sopir telah berhasil dihapus')
	location.replace('data_sopir.php')</script>";
?>
