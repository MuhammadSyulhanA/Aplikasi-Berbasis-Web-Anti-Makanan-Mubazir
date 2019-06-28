<?php  
	// include '../PHP/session.php';
    include '../../MODEL/koneksi_db.php';

	$perintah="SELECT nama_don, nohp_don FROM donatur";
    $result=mysqli_query($conn, $perintah);
    
    $perintah1='SELECT alamat_jemput, jenis_makanan FROM penjemputan';
    $result1=mysqli_query($conn, $perintah1);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pelatihan</title>
		<link rel="stylesheet" type="text/css" href="CSS/table_style.css">
		<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	</head>
	<body>
		<form class="logout" method="POST" action="../../CONTROLLER/logout.php">
			<input type="submit" name="logout" class="red" value="Keluar">
		</form>

		<h1>TABEL DATA</h1>
		<table class="table1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>No.HP</th>
				<th>Alamat Jemput</th>
				<th>Jenis Makanan</th>
				<th>Lebih Lanjut</th>
			</tr>
			<?php while ($data = mysqli_fetch_assoc($result) & $data1 = mysqli_fetch_assoc($result1)) : ?>
				<tr>
					<td>1</td>
					<td><?= $data['nama_don'] ?></td>
					<td><?= $data['nohp_don'] ?></td>
					<td><?= $data1['alamat_jemput'] ?></td>
					<td><?= $data1['jenis_makanan'] ?></td>
					<td>
						<form class="formSiswa" method="POST" action="../../CONTROLLER/tampil.php">
							<input type="text" name="nama" hidden="true" value="<?= $data['nama_don'] ?>">
							<input type="text" name="nohp" hidden="true" value="<?= $data['nohp_don'] ?>">
							<input type="text" name="alamat_jemput" hidden="true" value="<?= $data1['alamat_jemput'] ?>">
							<input type="text" name="jenis_makanan" hidden="true" value="<?= $data1['jenis_makanan'] ?>">
                            <input type="submit" name="terima" class="blue" value="Terima">
                            <input type="submit" name="tolak" class="red" value="Tolak">    
							<input type="submit" name="lanjut" class="blue" value="Lebih Lanjut">
						</form>
					</td>
				</tr>
			<?php endwhile ; ?>
		</table>

	</body>
</html>