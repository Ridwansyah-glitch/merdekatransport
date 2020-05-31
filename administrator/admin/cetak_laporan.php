<table border=0 width=800>
<tr><th><img src="images/surat.jpg"><hr>
<h3>Laporan Transaksi<h3>
<hr>
<br>
</th></tr>
<tr><td>
<?php
mysql_connect("localhost","root","");

mysql_select_db("db_merdeka");
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$query="select * from pelanggan, transaksi, tarif where transaksi.id_pelanggan=pelanggan.id_pelanggan and transaksi.id_tarif=tarif.id_tarif and transaksi.status<>'1' and transaksi.bulan='$bulan' and transaksi.tahun='$tahun'";
$result=mysql_query($query);
$jml=mysql_num_rows($result);
if ($jml==0) {
echo "<center><font color=red>---Belum Ada Data---</font></center>";
} else {
?>
                      <table border=1 width=800>
                          <tr>
                            <th>No</th>
                            <th>NAMA PELANGGAN</th>
                            <th>KOTA ASAL</th>
                            <th>KOTA TUJUAN</th>
                            <th>TANGGAL ANGKUT</th>
                            <th>JUMLAH PEMBAYARAN</th>
                          </tr>

<?php	
$no=1;
while($data=mysql_fetch_array($result)){
?>
<td><?php echo $no;?></td>
<td><?php echo $data['nama'];?></td>
<td><?php echo $data['kota_asal'];?></td>
<td><?php echo $data['kota_tujuan'];?></td>
<td>
<?php
$tanggal=$data['tanggal']; 
echo date("d-m-Y", strtotime($tanggal));
?>
</td>
<td>
<?php
$dp=$data['dp'];
$sisa=$data['sisa'];
$jumlah=$dp+$sisa;
$jumlah_desimal="2";
$pemisah_desimal=",";
$pemisah_ribuan=".";
echo "Rp ".number_format($jumlah,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);
?>
</td>
</tr>
<?php 
$no++;
}
}
?>
</table>
<br><br>
<?php
$tanggal_skrg=date('d-m-Y');
$ambil1=mysql_query("select SUM(dp) as jumlah1 from transaksi where status<>'1' and bulan='$bulan' and tahun='$tahun'");
$a=mysql_fetch_array($ambil1);
$dpx=$a['jumlah1'];
$ambil2=mysql_query("select SUM(sisa) as jumlah2 from transaksi where status<>'1' and bulan='$bulan' and tahun='$tahun'");
$b=mysql_fetch_array($ambil2);
$sisax=$b['jumlah2'];
$total=$dpx+$sisax;
?>
<b>Total Pembayaran : 
<?php
$jumlah=$total;
$jumlah_desimal="2";
$pemisah_desimal=",";
$pemisah_ribuan=".";
echo "Rp ".number_format($jumlah,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);
?>
</b>
</td></tr>
<tr><th>
<br><br>
<b>Purwakarta, <?php echo $tanggal_skrg;?>
<br><br>
Admin CV. Merdeka Transport
<tr><th>
<script>  
  window.load = print_d();  
  function print_d(){  
   window.print();  
  }  
 </script>
