<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("db_merdeka");
$username=$_POST['username'];
$password=$_POST['password'];


$cek = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");

if(mysql_num_rows($cek)==1){


echo "<script> alert ('Login Sukses')
	location.replace('admin/depan_admin.php')</script>";


}else{
echo "<script> alert ('Username dan Password SALAH!!')
	location.replace('index.php')</script>";
}



?>
