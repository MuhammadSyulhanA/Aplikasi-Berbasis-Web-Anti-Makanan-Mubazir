<?php  
	// include '../PHP/session.php';
	include '../MODEL/koneksi_db.php';

	$perintah="SELECT nama_don, alamat_don, email_don, nohp_don FROM donatur";
	$result=mysqli_query($conn, $perintah);

?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA DONATUR</title>
	<link rel="stylesheet" type="text/css" href="../ASSETS/CSS/table_style.css">
	<link rel="stylesheet" type="text/css" href="../ASSETS/CSS/style1.css">
    <link rel="stylesheet" type="text/css" href="../ASSETS/CSS/hamburgermenu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <script type="text/javascript">
        function openSlideMenu(){
            document.getElementById("menu").style.width = "250px";
            document.getElementById("content").style.marginLeft = "250px";
        }
        function closeSlideMenu(){
            document.getElementById("menu").style.width = "0px";
            document.getElementById("content").style.marginLeft = "0px";
        }
    </script>
</head>
<body>
	<div id="content">
        <span class="slide">
            <a href="#" onclick="openSlideMenu()">
                <i class="fas fa-bars"></i>
            </a>
        </span>
        <div class="nav" id="menu">
            <a href="#" class="close" onclick="closeSlideMenu()">
                <i class="fas fa-times"></i></a>
            <a href="admin_data_donatur.php">DATA DONATUR</a>
			<a href="admin_data_relawan.php">DATA RELAWAN</a>
			<div class="dropdown"><a href="#">SHARING LIST</a>
				<div  class="dropdown-content">
					<ul>
						<li><a href="admin_list_masuk.php"> LIST DITERIMA</a> </li>
						<li><a href="admin_list_tolak.php"> LIST DITOLAK</a> </li>
					</ul>
				</div>
			</div>
        </div>
    </div>
	<form class="logout" method="POST" action="../CONTROLLER/logout.php">
		<input type="submit" name="logout" class="red" value="Keluar">
	</form>
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
		<?php $c=0; 
			while ($data = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?php echo $c=$c+1 ?></td>
			<td><?= $data['nama_don'] ?></td>
			<td><?= $data['alamat_don'] ?></td>
			<td><?= $data['email_don'] ?></td>
			<td><?= $data['nohp_don'] ?></td>
			<td>
				<form class="formSiswa" method="POST" action="../CONTROLLER/aksi.php">
					<input type="text" name="nama" hidden="true" value="<?= $data['nama_don'] ?>">
					<input type="text" name="alamat" hidden="true" value="<?= $data['alamat_don'] ?>">
					<input type="text" name="email" hidden="true" value="<?= $data['email_don'] ?>">
					<input type="text" name="nohp" hidden="true" value="<?= $data['nohp_don'] ?>">
					<input type="submit" name="edit_don" class="blue" value="Edit">
					<input type="submit" name="hapus" class="red" value="Hapus">
				</form>
			</td>
		</tr>
		<?php endwhile ; ?>
	</table>
	
</body>
</html>