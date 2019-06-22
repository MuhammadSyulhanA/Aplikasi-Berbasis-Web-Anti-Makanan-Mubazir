<?php  
	// include '../PHP/session.php';
	include '../MODEL/koneksi_db.php';

	$perintah="SELECT nama_rela, alamat_rela, email_rela, nohp_rela FROM relawan";
	$result=mysqli_query($conn, $perintah);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pelatihan</title>
	<link rel="stylesheet" type="text/css" href="CSS/table_style.css">
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
</head>
<body>
	<form class="logout" method="POST" action="../CONTROLLER/logout.php">
		<input type="submit" name="logout" class="red" value="Keluar">
	</form>

	<ul>
		<li><a href="admin_data_donatur.php">Data Donatur</a></li>
		<li><a href="admin_data_relawan.php">Data Relawan</a></li>
	</ul>

	<h1>TABEL DATA</h1>
	<table class="table1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No.HP</th>
			<th id="#lol">Aksi</th>
		</tr>
		<?php while ($data = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td>1</td>
			<td><?= $data['nama_rela'] ?></td>
			<td><?= $data['alamat_rela'] ?></td>
			<td><?= $data['email_rela'] ?></td>
			<td><?= $data['nohp_rela'] ?></td>
			<td>
				<form class="formSiswa" method="POST" action="../CONTROLLER/aksi.php">
					<input type="text" name="nama" hidden="true" value="<?= $data['nama_rela'] ?>">
					<input type="text" name="alamat" hidden="true" value="<?= $data['alamat_rela'] ?>">
					<input type="text" name="email" hidden="true" value="<?= $data['email_rela'] ?>">
					<input type="text" name="nohp" hidden="true" value="<?= $data['nohp_rela'] ?>">
					<input type="submit" name="edit_rela" class="blue" value="Edit">
					<input type="submit" name="hapus" class="red" value="Hapus">
				</form>
			</td>
		</tr>
		<?php endwhile ; ?>
	</table>

	<form class="kotak" action="admin_tambah_don.php">
		<input type="submit" name="tambah" class="blue" value="Tambah Data Siswa">
	</form>
	

</body>
</html>