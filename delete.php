<?php 
 
include "koneksi.php"; 
 
$id_mobil= $_GET['id_mobil']; 

$query = "DELETE FROM mobil WHERE id_mobil='$id_mobil'"; 
$hasil = mysql_query($query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="Praktek13-Soal.php";</script>';

?>