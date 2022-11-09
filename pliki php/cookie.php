<html>
<head>
</head>
<body>
<?php
if(isset($_COOKIE['login'])){
	echo"Witaj ponownie";
}
else{
	echo"Witaj po raz pierwszy";
	setcookie("login","admin",time()+3600);
}
?>
</body>
</html>