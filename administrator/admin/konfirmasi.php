<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$id=$_GET['id'];
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
 
$result = mysql_query("select * from pelanggan where id_pelanggan='$_GET[id]'");
$data=mysql_fetch_array($result);
$email=$data['email'];

$angka=range(0,9);
shuffle($angka);
$ambilangka=array_rand($angka,6);
$angkastring=implode($ambilangka);
$code=$angkastring;
     

// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'transportmerdeka@gmail.com';
$mail->Password = 'rahasia12345';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('transportmerdeka@gmail.com', 'CV Merdeka Transport');
$mail->addReplyTo('transportmerdeka@gmail.com', 'CV Merdeka Transport');

// Menambahkan penerima
$mail->addAddress($email);


// Subjek email
$mail->Subject = 'Pemberitahuan akun sudah aktif';

// Mengatur format email ke HTML
$mail->isHTML(true);

// Konten/isi email
$mailContent = "<h1>CV Merdeka Transport</h1>
    <p>Pelanggan yang terhormat. Silahkan melakukan aktifasi dengan memasukan kode <b>$code</b>.<br>Terima Kasih<br><br>Hormat Kami, <br><br>CV Merdeka Transport</p>";
$mail->Body = $mailContent;



// Kirim email
if(!$mail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}
mysql_query("update pelanggan set kode='$code',  status='2' where id_pelanggan='$_GET[id]'"); 
echo "<script> alert ('Konfirmasi berhasil')
	location.replace('data_pelanggan.php')</script>";
?>