<?php 
        include "koneksi.php";
        $query = "SELECT * FROM mobil WHERE id_mobil= '".$_GET['id_mobil']."'"; 
        $hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
?>
<html>
<html>
<head>
	<title>Form Edit Data</title>
</head>
<body>
<center><h3> Silahkan Edit Data Anda</h3></center>
<center>
	<form action="editt.php" method="post">
	<table>
		<tr><td>Id Mobil </td><td><input type="text" name="id_mobil"  value='<?php echo $data['id_mobil'];?>' ></td></tr>
		<tr><td>Merk </td><td><input type="text" name="merk" value='<?php echo $data['merk'];?>' ></td></tr>
		<tr><td>Model </td><td><input type="text" name="model" value='<?php echo $data['model'];?>' ></td></tr>
		<tr><td>Tipe </td><td><input type="text" name="tipe" value='<?php echo $data['tipe'];?>' ></td></tr>
		<tr><td>Pintu </td><td><input type="text" name="pintu" value='<?php echo $data['pintu'];?>' ></td></tr>
		<tr><td>Tahun Produksi </td><td><input type="text" name="tahun_produksi" value='<?php echo $data['tahun_produksi'];?>' ></td></tr>
		<tr><td>Negara Pembuat </td><td><input type="text" name="negara_pembuat" value='<?php echo $data['negara_pembuat'];?>' ></td></tr>
		<tr><td>Jenis Produksi </td><td><input type="text" name="jenis_produksi" value='<?php echo $data['jenis_produksi'];?>' ></td></tr>
		<tr><td></td><td><input name="submit" type="submit" value="EDIT" class="alt_btn"></td></tr>
			</table>
			</form>
</center>

</body>
</html>
