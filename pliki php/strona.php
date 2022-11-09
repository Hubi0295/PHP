<html>
<head>
</head>
<body>
<?php
 session_start();
	 if ($_SESSION['login'] == "login" && $_SESSION['haslo']=="haslo"){
	 echo "Zalogowany, Witaj na stronie";
	 }
	 else {
	 echo "NIezalogowany, błędne dane";
	 }
?>
<a href="wyloguj.php"><button>Wyloguj</button></a>
</body>
</html>