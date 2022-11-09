<?php
$a="abcdef@gmail.com";
$b=substr($a,0,3);
$c=strlen($a);
$d=strstr($a,'c');
$e=strpos($a,'@');
$login=substr($a,0,$e);
$f=strtoUpper($a);
$g=strtolower($a);
$h=ucFirst($a);

echo "wycinek tekstu: ".$b;
	echo "<br>";
echo "Długość tekstu: ".$c;
	echo "<br>";
echo "Pokazanie tekstu od: ".$d;
	echo "<br>";
echo "Pozycja litery: ".$e;
	echo "<br>";
echo "wycinek tekstu do: ".$login;
	echo "<br>";
echo "Przekształcenie tekstu na wielkie litery: ".$f;
	echo "<br>";
echo "Przekształcenie tekstu na małe litery: ".$g;
	echo "<br>";
echo "pierwsza litera wielka: ".$h
?>