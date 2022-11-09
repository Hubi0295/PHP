<html>
<head>
<meta charset="UTF-8"/>
<title>
rozgrywki futbolowe
</title>
<link rel="Stylesheet" type="text/css" href="styl.css"/>
</head>
<body>
<div id="baner">
<h2>Światowe rozgrywki piłkarskie</h2>
<img src="obraz1.jpg" alt="boisko"/>
</div>
<div id="mecze">
<?php
		$db=mysqli_connect('localhost','root','','egzamin1');
		$zapytanie="SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1='EVG';";
		$query=mysqli_query($db, $zapytanie);
		while($row=mysqli_fetch_array($query)){
			echo "<div id='inf'>";
			echo "<h3>".$row['zespol1']."-".$row['zespol2']."</h3>";
			echo "<h4>".$row['wynik']."</h4>";
			echo "<p>w dniu: " .$row['data_rozgrywki']."</p>";
			echo "</div>";
		}
		mysqli_close($db);
?>
</div>
<div id="glowny">
<h2>Reprezentacja Polski</h2>
</div>
<div id="lewy">
<p>Podaj pozycje zawodników(1-bramkarze, 2-obroncy, 3-pomocnicy, 4-napastnicy)</p>
<form method="POST">
<label>Podaj pozycje: <input type="text" name="pozycja"/></label>
<input type="submit" value="Spawdź" name="wyslij"/>
</form>
<ul>
<?php
		if(isset($_POST['wyslij'])){
		$numer= $_POST['pozycja'];
		
		$db=mysqli_connect('localhost','root','','egzamin1');
		$zapytanie="SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id='$numer'";
		$query=mysqli_query($db, $zapytanie);
		while($row=mysqli_fetch_array($query)){
			echo "<li>";
			echo "<p>".$row['imie']."</p>";
			echo "<p>".$row['nazwisko']."</p>";
			echo "</li>";
		}
		mysqli_close($db);
		}
?>
</ul>
</div>
<div id="prawy">
<img src="zad1.png" alt="piłkarz"/>
<p>Autor:00000000000</p>
</div>
</body>
</html>