<?php  
	// include '../PHP/session.php';
    include '../MODEL/koneksi_db.php';
    
    session_start();
    $nama = $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>SHARING LIST</title>
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
    LIST DITERIMA
	<table class="table1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat Jemput</th>
			<th>Jenis Makanan</th>
			<th>Keterangan</th>
			<th id="#lol">Aksi</th>
		</tr>
		<?php
            $perintah="SELECT nama_don, keterangan, gambar, alamat_jemput, jenis_makanan from list_terima inner join penjemputan on list_terima.id_jem=penjemputan.id_jemput inner join donatur on penjemputan.id_donatur=donatur.id_don";
            
            $result=mysqli_query($conn, $perintah);
  
            $c = 0;

            while ($data = mysqli_fetch_assoc($result)) :
        ?>
		<tr>
			<td><?= $c+1 ?></td>
			<td><?= $data['nama_don'] ?></td>
			<td><?= $data['alamat_jemput'] ?></td>
			<td><?= $data['jenis_makanan'] ?></td>
			<td><?= $data['keterangan'] ?></td>
			<td>
				<form class="formSiswa" method="POST" action="../CONTROLLER/aksi.php">
					<input type="text" name="nama" hidden="true" value="<?= $data['nama_don'] ?>">
					<input type="text" name="alamat" hidden="true" value="<?= $data['alamat_jemput'] ?>">
					<input type="text" name="jenis" hidden="true" value="<?= $data['jenis_makanan'] ?>">
					<input type="text" name="keterangan" hidden="true" value="<?= $data['keterangan'] ?>">
					<input type="submit" name="edit_list_terima" class="blue" value="Edit">
					<input type="submit" name="hapus_terima" class="red" value="Hapus">
				</form>
			</td>
		</tr>
		<?php endwhile ; ?>
    </table>

</body>
</html>