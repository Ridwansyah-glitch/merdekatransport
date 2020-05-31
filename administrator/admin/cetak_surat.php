<table border=0 width=700>
<tr><th><img src="images/surat.jpg"><hr>
<h3>Surat Jalan</h3>
<hr><br>
</th></tr>
<tr><td>
<?php
$tanggal_sekarang=date('d-m-Y');
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$ambil=mysql_query("select * from transaksi, tarif, pelanggan where transaksi.id_pelanggan=pelanggan.id_pelanggan and tarif.id_tarif=transaksi.id_tarif and transaksi.id_transaksi='$_GET[id]'");
$data=mysql_fetch_array($ambil);
?>
<table border=0 width=700>
<tr><td>ID Transaksi</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><?php echo $data['id_transaksi'];?></td></tr>
<tr><td>Nama Pelanggan</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><?php echo $data['nama'];?></td></tr>
<tr><td>Alamat Ambil Barang</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><?php echo $data['alamat'];?></td></tr>
<tr><td>Alamat Kirim Barang</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><?php echo $data['alamat_tujuan'];?></td></tr>
<tr><td>No Telepon</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><?php echo $data['no_tlp'];?></td></tr>
<tr><td>Tanggal Angkut</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
<?php
$tanggal=$data['tanggal']; 
echo date("d-m-Y", strtotime($tanggal));
?>
</td></tr>
<tr><td>Kota Asal</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><?php echo $data['kota_asal'];?></td></tr>
<tr><td>Kota Tujuan</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td><?php echo $data['kota_tujuan'];?></td></tr>
<tr><td>Downpayment</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
<?php
$jumlah=$data['dp'];
$jumlah_desimal="2";
$pemisah_desimal=",";
$pemisah_ribuan=".";
echo "Rp ".number_format($jumlah,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);
?>
</td></tr>
<tr><td>Sisa Pembayaran</td><td>&nbsp;&nbsp;: &nbsp;&nbsp;</td><td>
<?php
$jumlah=$data['sisa'];
$jumlah_desimal="2";
$pemisah_desimal=",";
$pemisah_ribuan=".";
echo "Rp ".number_format($jumlah,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);
?>
</td></tr>
</table>
<br>
<hr>
<br><br>
</td></tr>
<tr><th>
Purwakarta, <?php echo $tanggal_sekarang;?>
<br><br><br><br><br><br>
</th></tr>
<tr><th>
<?php
$ambil_sopir=mysql_query("select * from sopir, transaksi where transaksi.id_sopir=sopir.id_sopir");
$a=mysql_fetch_array($ambil_sopir);
$ambil_pelanggan=mysql_query("select * from pelanggan, transaksi where transaksi.id_pelanggan=pelanggan.id_pelanggan");
$b=mysql_fetch_array($ambil_pelanggan);
?>
<table border=0 width=700>
<tr><th width=300>Admin<br>CV. Merdeka Transport</th><th width=200><?php echo $a['nama'];?><br>(Sopir)</th><th width=200><?php echo $b['nama'];?><br>(Pelanggan)</th></tr>
</table>
</th></tr>

<script>  
  window.load = print_d();  
  function print_d(){  
   window.print();  
  }  
 </script>
