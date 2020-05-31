<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$bulan=$_POST['bln'];
$id=$_POST['id'];
$id_pelanggan= $_POST['id_pelanggan'];
$asal = $_POST['asal'];
$tujuan =$_POST['tujuan'];
$jalan1=$_POST['jalan1'];
$rt1=$_POST['rt1'];
$rw1=$_POST['rw1'];
$kecamatan1=$_POST['kecamatan1'];
$kabupaten1=$_POST['kabupaten1'];
$alamat1=$jalan1.', RT '.$rt1.', RW '.$rw1.', '.$kecamatan1.', '.$kabupaten1;
$jalan=$_POST['jalan'];
$rt=$_POST['rt'];
$rw=$_POST['rw'];
$kecamatan=$_POST['kecamatan'];
$kabupaten=$_POST['kabupaten'];
$alamat=$jalan.', RT '.$rt.', RW '.$rw.', '.$kecamatan.', '.$kabupaten;
$tahun = date('Y');
$tgl_pesan=$tahun.'-'.$_POST['bln'].'-'.$_POST['tgl'];

$ambil=mysql_query("select * from tarif where kota_asal='$asal' and kota_tujuan='$tujuan'");
if(mysql_num_rows($ambil)==0){
	echo "<script> alert ('Maaf, kota asal dan tujuan yang anda masukan tidak tersedia. Silahkan melakukan pengisian ulang data')
	location.replace('input_transaksi.php')</script>";
} else {
$data=mysql_fetch_array($ambil);
$id_tarif=$data['id_tarif'];
$harga=$data['harga'];
$dp=$harga*0.1;
$sisa=$harga-$dp;

$query = "INSERT INTO transaksi VALUES ('$id','$id_pelanggan','$id_tarif','','$tgl_pesan','$bulan','$tahun','$alamat1','$alamat','$dp','$sisa','','1')";
$sql=mysql_query($query);
if ($sql != 0){
	echo "<script> alert ('Transaksi pemesanan angkut barang berhasil.')
	location.replace('konfirmasi_dp.php')</script>";	
}
else {
	echo "<script> alert ('Gagal disimpan')
	location.replace('input_transaksi.php')</script>";
}	
}
?>