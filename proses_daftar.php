<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");

$nama = $_POST['nama'];
$no_tlp=$_POST['no_tlp'];
$email=$_POST['email'];
$jalan=$_POST['jalan'];
$rt=$_POST['rt'];
$rw=$_POST['rw'];
$kecamatan=$_POST['kecamatan'];
$kabupaten=$_POST['kabupaten'];
$alamat=$jalan.', RT '.$rt.', RW '.$rw.', '.$kecamatan.', '.$kabupaten;
$username=$_POST['username'];
$password=$_POST['password'];
$ulangi=$_POST['ulangi'];
if ($password != $ulangi) {
echo "<script> alert ('Password dan ulangi password tidak sesuai, silahkan mengulang pengisian form')
	history.go(-1)</script>";
} else {
$cek = mysql_query("SELECT * FROM pelanggan WHERE username='$username'");
if (mysql_num_rows($cek)==1) {
    echo "<script> alert ('Username sudah digunakan, silahkan gunakan username lain. Penyimpanan gagal.')
	history.go(-1)</script>";
} else {

$query = "INSERT INTO pelanggan VALUES ('','$nama','$no_tlp','$email','$alamat','$username','$password','','1')";
$sql=mysql_query($query);
if ($sql != 0){
	echo "<script> alert ('Registrasi berhasil. Admin akan memproses permintaan anda dan mengirim kode aktivasi melalui email. Terimakasih')
	location.replace('index.php')</script>";	
}
else {
	echo "<script> alert ('Gagal disimpan')
	location.replace('daftar.php')</script>";
}	
}
}
?>