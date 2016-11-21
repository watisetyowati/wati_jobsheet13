<?php 
include "koneksi.php"; 
$mobil=$_POST['id_mobil'];
$merk=$_POST['merk'];
$model=$_POST['model'];
$tipe=$_POST['tipe'];
$pintu=$_POST['pintu'];
$tahun_produksi=$_POST['tahun_produksi'];
$negara_pembuat=$_POST['negara_pembuat'];
$jenis_produksi=$_POST['jenis_produksi'];

$query = "UPDATE mobil SET merk='$merk', model='$model', tipe='$tipe', pintu ='$pintu', tahun_produksi='$tahun_produksi', negara_pembuat='$negara_pembuat', jenis_produksi='$jenis_produksi' WHERE id_mobil='$mobil'"; 
$hasil = mysql_query($query);
 
if ($hasil) echo '<script language="javascript">alert("Anda berhasil mengedit data !"); document.location="Praktek13-Soal.php";</script>';
else echo "Pengeditan data gagal"; 

?>