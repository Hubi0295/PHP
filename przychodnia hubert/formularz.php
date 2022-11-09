<html>
<head>
<meta charset="UTF-8">
<title>Przychodnia specjalistyczna</title>
<link rel="Stylesheet" a href="przychodnia.css">
</head>
<body>
<div id="baner">
<h1>Przychodnia specjalistyczna</h1>
</div>
<div id="panel_lewy">
<h2>NASZA OFERTA</h2>
<ol>
	<li>lekarze</li>
	<li>zabiegi</li>
	<li>pielegniarki</li>
</ol>
<form method="POST">
<p><b>Dane osobowe<b></p>
<label>imie: <input type="text" name="imie"></label>
<label>nazwisko: <input type="text" name="nazwisko"></label>
<label>adres: <input type="text" name="adres"></label>
<label>telefon: <input type="number" name="telefon"></label>
<hr></hr>

<p><b>Dane logowania</b></p></br>
<label>login: <input type="text" name="login"></label></br>
<label>haslo: <input type="password" name="haslo"></label> </br>
<label>Akceptuje <a href="kwerendy.txt" target="_blank">regulamin: </a><input type="checkbox" name="akc" checked></label></br>
<label>Wyczysc: <input type="reset" name="wycysc"></label></br>
<label>Rejestruj: <input type="submit" name="submit"></label>
</form>
</div>
<div id="panel_prawy">
<h2>Przychodnia specjalistyczna</h2>
<?php
	if(isset($_POST['submit'])){
		$imie= $_POST['imie'];
		$nazwisko= $_POST['nazwisko'];
		$adres= $_POST['adres'];
		$telefon= $_POST['telefon'];
		$login= $_POST['login'];
		$haslo= $_POST['haslo'];
			$db= mysqli_connect("localhost", "root", "", "przychodnia");
			$zap="INSERT INTO pacjenci VALUES('','$nazwisko', '$imie', '$adres','$telefon','','','','','','','')";
			$zap1="INSERT INTO logowanie VALUES('$login','$haslo')";
			$query=mysqli_query($db,$zap);
			$a=mysqli_query($db,$zap1);
			if($zap){
				echo"Konto ".$imie." ".$nazwisko." zostało zarejestrowane w przychodni";
			}
			else{
			}
		mysqli_close($db);
	}
?>
</div>
</body>
</html>