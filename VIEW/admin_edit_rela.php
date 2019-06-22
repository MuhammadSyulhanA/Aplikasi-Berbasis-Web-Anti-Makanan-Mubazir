<?php
	$nama= $_GET['nama'];
	$alamat= $_GET['alamat'];
	$email= $_GET['email'];
	$nohp= $_GET['nohp'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pelatihan</title>
	<link rel="stylesheet" type="text/css" href="CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
</head>
<body class="form">
	<form class="logout" method="POST" action="">
		<input type="submit" name="logout" class="red" value="Keluar">
	</form>
	<h1>Edit data</h1>
	<div class="kotak_edit">
		<p class="tulisan_editn"></p>
		<form method="POST" action="../CONTROLLER/update.php">
			<!-- <label>Nama</label> -->
			<input type="text" name="nama_lama" hidden="true" value="<?= $nama ?>">
			<!-- <label>Alamat</label> -->
			<input type="text" name="alamat_lama" hidden="true" value="<?= $alamat ?>">
			<!-- <label>Email</label> -->
			<input type="text" name="email_lama" hidden="true" value="<?= $email ?>">
			<!-- <label>No. HP</label> -->
			<input type="text" name="nohp_lama" hidden="true" value="<?= $nohp ?>">

			<label>Nama</label>
			<input type="text" name="nama_baru" class="form_login" value="">

			<label>Alamat</label>
			<input type="text" name="alamat_baru" class="form_login" value="">

			<label>Email</label>
			<input type="text" name="email_baru" class="form_login" value="">

			<label>No. HP</label>
			<input type="text" name="nohp_baru" class="form_login" value="">

			<input type="submit" name="edit_rela" class="tombol_edit" value="Edit">
		</form>
	</div>
</body>
</html>