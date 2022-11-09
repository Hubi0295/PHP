<html>
<head>
<link rel="Stylesheet" href="styl4.css"/>
<meta charset="UTF-8"/>
<title>
Prognoza pogody Poznań
</title>
</head>
<body>
<div id="baner1">
<p>maj, 2019r</p>
</div>
<div id="baner2">
<h2>Prognoza dla Poznania</h2>
</div>
<div id="baner3">
<img src="logo.png" alt="prognoza"/>
</div>
<div id="blok1">
<a href="kwerendy.txt">Kwerendy</a>
</div>
<div id="blok2">
<img src="obraz.jpg" alt="Polska, Poznań"/>
</div>
<div id="glowny">
<table>
<tr>
<th>Lp.</th>
	<th>DATA</th>
		<th>NOC.TEMPERATURA</th>
			<th>DZIEŃ.TEMPERATURA</th>
				<th>OPADY[mm/h]</th>
					<th>CIŚNIENIE[hPa]</th>
</tr>
<?php
	$db= mysqli_connect("localhost","root","","prognoza");
	$zapytanie= "SELECT * FROM `pogoda` WHERE miasta_id='2' ORDER BY data_prognozy DESC;";
	$query= mysqli_query($db, $zapytanie);
	while($row= mysqli_fetch_array($query)){
		echo"<tr>";
			echo"<td>";
				echo $row['id'];
			echo"</td>";
			echo"<td>";
				echo $row['data_prognozy'];
			echo"</td>";
			echo"<td>";
				echo $row['temperatura_noc'];
			echo"</td>";
			echo"<td>";
				echo $row['temperatura_dzien'];
			echo"</td>";
			echo"<td>";
				echo $row['opady'];
			echo"</td>";
			echo"<td>";
				echo $row['cisnienie'];
			echo"</td>";
		echo"</tr>";
	}
	mysqli_close($db);
?>
</table>
</div>
<div id="stopka">
<p>Stronę wykonał: 00000000000</p>
</div>

</body>
</html>