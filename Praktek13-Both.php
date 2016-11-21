<?php
//buat koneksi dengan MySQL
$link=mysql_connect('localhost','root','');
  
//gunakan database universitas
mysql_select_db('showroommobil');
                
//tampilkan tabel mahasiswa_ilkom
$result=mysql_query('SELECT * FROM mobil');
while ($row=mysql_fetch_array($result,MYSQL_BOTH))
 {
   echo $row[0]." ".$row['merk']." ".$row['model']." ";
   echo $row[3]." ".$row['pintu']." ".$row['tahun_produksi']." ";
   echo $row[6]." ".$row['jenis_produksi'];
   echo "<br />";
 }
?>