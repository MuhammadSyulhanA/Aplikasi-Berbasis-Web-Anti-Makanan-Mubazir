<html>
	<head>
		 <title>Selamat datang</title>
	</head>
	<body>
		<?php session_start();echo "Hai ".$_SESSION['user']; ?>
	</body>
</html>