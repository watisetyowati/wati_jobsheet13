<?php
include "koneksi.php";
$query="select * from mobil";
$hasil=mysql_query($query);
?>
<html>
<head>
	<title>Koneksi ke MySQL</title>
</head>
<body>
	<table border="2">
		<tr>
		<td>Id Mobil</td>
		<td width="100">Merk</td>
		<td width="100">Model</td>
		<td width="100">Tipe</td>
		<td>Pintu</td>
		<td width="100">Tahun Produksi</td>
		<td>Negara Pembuat</td>
		<td width="100">Jenis Produksi</td>
		<td width="100">Ket</td>
		</tr>

		<?php
				while ($data=mysql_fetch_array($hasil))
				{
				echo ("<tr> 
   					<td>$data[id_mobil]</td> 
    				<td>$data[merk]</td> 
    				<td>$data[model]</td>
    				<td>$data[tipe]</td> 
    				<td>$data[pintu]</td> 
    				<td>$data[tahun_produksi]</td>
    				<td>$data[negara_pembuat]</td>
    				<td>$data[jenis_produksi]</td>    
					<td><a href='edit.php?id_mobil=".$data['id_mobil']."'>Edit &nbsp</a>
					<a href='delete.php?id_mobil=".$data['id_mobil']."'>Delete</a> </td>
				</tr>");
		}
		?>
	</table>	
</body>
</html>