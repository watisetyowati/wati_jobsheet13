<html>
<head>
<title>Koneksi ke MySQL</title>
</head>
<body>
	<?php
	//connecting, selecting database
	$link = mysql_connect('localhost','root')
	or die('Could not connect  : '.mysql_error());
	echo "Connected succesfully";
	mysql_select_db('showroommobil') or die('Could not select database');

	//performing SQL query
	$query = 'SELECT * FROM mobil';
	$result = mysql_query($query) or die('Query failed : '.mysql_error());

	//printing result in html
	echo "<table>\n";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";

	//free resultset
	mysql_free_result($result);

	//closing connection
	mysql_close($link);
	?>
</body>
</html>