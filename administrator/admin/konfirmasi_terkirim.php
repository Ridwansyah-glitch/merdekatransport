<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
mysql_query("update transaksi set status='4' where id_transaksi='$_GET[id]'");
  
echo "<script> alert ('Transaksi selesai')
	location.replace('data_transaksi.php')</script>";
?>

