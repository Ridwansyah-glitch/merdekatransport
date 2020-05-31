<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$id_transaksi=$_POST['id_transaksi'];
$id_sopir=$_POST['id_sopir'];

mysql_query("update transaksi set id_sopir='$id_sopir', status='3' where id_transaksi='$id_transaksi'");
  
echo "<script> alert ('Sopir telah ditambahkan dalam transaksi')
	location.replace('data_transaksi.php')</script>";
?>

