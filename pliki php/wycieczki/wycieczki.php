<html>
<head>
<link rel="Stylesheet" href="styl3.css"/>
<meta charset="UTF-8"/>
<title>
Wycieczki i Urlopy
</title>
</head>
<body>
<div id="baner">
<h1>BIURO PODRÓŻY</h1>
</div>
<div id="lewy">
<h2>KONTAKT</h2>
<a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
<p>555666777</p>
</div>
<div id="srodkowy">
<h2>GALERIA</h2>
<?php
	$db= mysqli_connect("localhost", "root", "", "egzamin3");
	$zap="SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";
	$wynik=mysqli_query($db, $zap);
	while($row= mysqli_fetch_array($wynik)){
	echo "<img src=$row[nazwaPliku] alt=$row[podpis]/>";
	}
	mysqli_close($db);
?>
</div>
<div id="prawy">
<h2>Promocje</h2>
<table>
<tr>
<td>Jesień</td><td>Grupa4+</td><td>Grupa10+</td>
</tr>
<tr>
<td>5%</td><td>10%</td><td>15%</td>
</tr>
</table>
</div>
<div id="dane">
<h2>LISTA WYCIECZEK</h2>
<?php
	$db= mysqli_connect("localhost", "root", "", "egzamin3");
	$zap="SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna=1;";
	$wynik=mysqli_query($db, $zap);
	while($row= mysqli_fetch_array($wynik)){
		echo $row['id']." ". $row['dataWyjazdu']." ". $row['cel']." ". "cena: ". $row['cena']. "<br>";
	}
	mysqli_close($db);
?>
</div>
<div id="stopka">
<p>Strone wykonał: 00000000000</p>
</div>
</body>
</html>