<html>
<head>
</head>
<body>
<?php
	$txt = 'Ala ma kota';
	$reg = '/[A-Z]+/';
		if (preg_match($reg, $txt)){
		echo "OK";
		}
			else{
			echo "brak wzorca";
			}
?>
</body>
</html>