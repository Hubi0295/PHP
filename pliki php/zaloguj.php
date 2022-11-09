<html>
<head>
</head>
<body>
<?php 
 session_start();
?>
<form method="POST">
<label>Login <input type="text" name="login"></label>
</br>
<label>Hasło <input type="text" name="haslo"></label>
</br>
<label><input type="submit"></label>
</form>
 
<?php
 $_SESSION['login']=$_POST['login'];
 $_SESSION['haslo']=$_POST['haslo'];
?>
</body>
</html>