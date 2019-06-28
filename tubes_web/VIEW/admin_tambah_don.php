<!DOCTYPE html>
<html>
<head>
	<title>Pelatihan</title>
	<link rel="stylesheet" type="text/css" href="CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
</head>
<body class="form">
	<form class="logout" method="POST" action="../PHP/keluar.php">
		<input type="submit" name="logout" class="red" value="Keluar">
	</form>
	<h1>Tambah data</h1>
	<div class="kotak_edit">
		<p class="tulisan_editn"></p>
		<form method="POST" action="../CONTROLLER/tambah.php">
			<label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama">

			<label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="Alamat">

			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email">

			<label>No. HP</label>
			<input type="text" name="nohp" class="form_login" placeholder="No.HP">

			<input type="submit" class="tombol_edit" value="Tambah data">
		</form>
		
	</div>
</body>
</html>