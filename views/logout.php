<?php

include_once '../config/config.php';
session_start();
session_unset( );
session_destroy();
header("location: ../index.php");

exit;
?>
<html>
	<head>
		<title>Logout</title>
	</head>
	<body>
	</body>
</html>