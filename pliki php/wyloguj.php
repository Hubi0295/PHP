<html>
<head>
</head>
<body>
<?php
 session_start();
 session_destroy();
 $_SESSION = [];
?>
</body>
</html>