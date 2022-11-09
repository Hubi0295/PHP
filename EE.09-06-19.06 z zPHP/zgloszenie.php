<?php
if(isset($_POST['zglos'])){
	$zespol= $_POST['zespol'];
	$dyspozytor= $_POST['dyspozytor'];
	$adres=$_POST['adres'];
	$czas= date("h:i:s");
	$db= mysqli_connect("localhost", "root", "", "ratownictwo");
	$sql= "INSERT INTO zgloszenia VALUES('',$zespol,$dyspozytor,'$adres',0,'$czas')";
	$query= mysqli_query($db, $sql);
	if($query){
		echo"Dodano zgłoszenie!";
	}
	else{
		echo"Nie udało się dodać zgłoszenia!";
	}
	mysqli_close($db);
}

?>
<label>Numer zespołu ratownicego:<br> <input type="number" name="zespol"/></label><br>
<label>Numer dyspozytora: <br> <input type="number" name="dyspozytor"/></label><br>
<label>Adres: <br> <input type="text" name="adres" max='100'/></label>