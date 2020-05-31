<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("db_merdeka");
$username=$_POST['username'];
$password=$_POST['password'];


$cek = mysql_query("SELECT * FROM pelanggan WHERE username='$username' AND password='$password' and status='3'");

if(mysql_num_rows($cek)==1){
$c= mysql_fetch_array($cek);
$_SESSION['username']=$c['username'];

echo "<script> alert ('Login Sukses')
	location.replace('depan_pelanggan.php')</script>";


}else{
echo "<script> alert ('Username dan Password SALAH!!')
	location.replace('login.php')</script>";
}



?>
