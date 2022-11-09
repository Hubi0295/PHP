<html>
<head>
</head>
<body>
<?php
 session_start();
	 if ($_SESSION['login'] == "login" && $_SESSION['haslo']=="haslo"){
	 echo "Witam jesteś zalogowany";
	 }
	 else {
	 echo "NIezalogowany, błędne dane";
	 }
?>
<a href="wyloguj.php"><button>Wyloguj</button></a>
</body>
</html>