<html>
<head>
<meta charset="UTF-8"/>
<title>
Twoje BMI
</title>
<link rel="Stylesheet" type="text/css" href="styl3.css"/>
</head>
<body>
<div id="logo">
<img src="wzor.png" alt="wzor BMI"/>
</div>
<div id="baner">
<h1>OBLICZ SWOJE BMI</h1>
</div>
<div id="glowny">
<table>
<tr>
<th>Interpretacja BMI</th><th>Wartość minimalna</th><th>Wartość maksymalna</th>
</tr>
<?php
		$db= mysqli_connect("localhost","root","","bmi");
		$zapytanie="SELECT informacja, wart_min, wart_max FROM bmi;";
		$query= mysqli_query($db,$zapytanie);
		while($row=mysqli_fetch_row($query)){
			echo"<tr>";
			echo"<td>";
			echo $row[0];
			echo"</td>";
			echo"<td>";
			echo $row[1];
			echo"</td>";
			echo"<td>";
			echo $row[2];
			echo"</td>";
			echo"</tr>";
		}
		mysqli_close($db);
?>	
</table>
</div>
<div id="lewy">
<h2>Podaj wzrost i wagę</h2>
<form method="POST">
<label>Waga: <input type="number" name="waga" min="1"/></label><br>
<label>Wzrost: <input type="number" name="wzrost" min="1"/></label><br>
<input type="submit" value="oblicz i zapamiętaj wynik" name="oblicz"/>
</form>
<?php
	if(isset($_POST['oblicz'])){
		$waga = $_POST['waga'];
		$wzrost = $_POST['wzrost'];
		$data = date("Y-m-d");
		if($waga AND $wzrost){
			$bmi = ($waga/($wzrost*$wzrost))*10000;
			echo"twoja waga: ".$waga." twój wzrost: ".$wzrost;
			echo"<br>";
			echo"BMI wynosi: ".$bmi;
				if($bmi>0 AND $bmi<=18){
					$bmi_id='1';
					echo "<br>";
					echo $bmi_id;
				}
				else if($bmi>=19 AND $bmi<=25){
					$bmi_id='2';
					echo "<br>";
					echo $bmi_id;
				}
				else if($bmi>=26 AND $bmi<=30){
					$bmi_id='3';
					echo "<br>";
					echo $bmi_id;
				}
				else if($bmi>=31 AND $bmi<=100){
					$bmi_id='4';
					echo "<br>";
					echo $bmi_id;
				}
					$db= mysqli_connect("localhost","root","","bmi");
					$zapytanie="INSERT INTO `wynik`(`id`, `bmi_id`, `data_pomiaru`, `wynik`) VALUES (NULL,$bmi_id,'$data',$bmi)";
					$query= mysqli_query($db, $zapytanie);
					if($query){
						echo"Dodano rekord!";
					}
					else{
						echo"nie dodano rekordu";
					}
		}
		else{
			echo"nie podano wszytkich pól";
		}
		
		
	}
?>
</div>
<div id="prawy">
<img src="rys1.png" alt="ćwiczenia"/>
</div>
<div id="stopka">
<p>Autor: 00000000000</p>
<a href="kwerendy.txt">Zobacz kwerendy</a>
</div>
</body>
</html>