<html>
<head>
<meta charset="UTF-8"/>
<title>
Port lotniczy
</title>
<link rel="Stylesheet" type="text/css" href="styl2.css"/>
</head>
<body>
<div id="baner1">
<img src="zad5.png" alt="logo lotnisko"/>
</div>
<div id="baner2">
<h1>Przyloty</h1>
</div>
<div id="baner3">
<h3>przydatne linki</h3>
<a href="kwerendy.txt" target="_blank">Pobierz...</a>
</div>
<div id="glowny">
<table>
<tr>
<th>czas</th><th>kierunek</th><th>numer rejsu</th><th>status</th>
<?php
$db= mysqli_connect("localhost","root","","egzaminn");
$zapytanie="SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;";
$query=mysqli_query($db, $zapytanie);
while($row=mysqli_fetch_array($query)){
	echo "<tr>";
	echo "<td>";
	echo $row['czas'];
	echo "</td>";
	echo "<td>";
	echo $row['kierunek'];
	echo "</td>";
	echo "<td>";
	echo $row['nr_rejsu'];
	echo "</td>";
	echo "<td>";
	echo $row['status_lotu'];
	echo "</td>";
	echo "</tr>";
}
mysqli_close($db);
?>
</tr>
</table>
</div>
<div id="stopka1">
<?php
if(isset($_COOKIE['ciasteczko'])){
	echo "<p>";
	echo "Witaj ponownie";
	echo "</p>";
}
else{
	echo "<p>";
	echo "Witaj po raz pierwszy";
	setcookie('ciasteczko','piernik',time()+7200);
	echo "</p>";
}
?>
</div>
<div id="stopka2">
Autor: 00000000000
</div>
</body>
</html>