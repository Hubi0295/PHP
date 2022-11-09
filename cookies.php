<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
session_start();

if (!isset($_SESSION['count'])) { 
    $_SESSION['count'] = 0;       
} else {                          
    $_SESSION['count']++;         
}

echo 'Strona odczytana '.$_SESSION['count'].' razy w ciągu tej sesji';

?>