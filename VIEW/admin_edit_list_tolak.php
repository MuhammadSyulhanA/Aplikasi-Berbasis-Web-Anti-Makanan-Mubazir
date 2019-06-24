<?php
	// $nama= $_GET['nama'];
	
    $keterangan= $_GET['keterangan'];
	$alamat= $_GET['alamat'];
    $jenis= $_GET['jenis'];
?>
<!DOCTYPE html>
<html>
<head>
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
<body class="form">
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
			<a href="admin_list_masuk.php">SHARING LIST</a>
        </div>
    </div>
	<form class="logout" method="POST" action="../CONTROLLER/logout.php">
		<input type="submit" name="logout" class="red" value="Keluar">
	</form>
	<h1>Edit data</h1>
	<div class="kotak_edit">
		<p class="tulisan_editn"></p>
		<form method="POST" action="../CONTROLLER/update.php">
			<!-- <label>Nama</label>
			<input type="text" name="nama_lama" hidden="true" value="<?= $nama ?>"> -->
			<!-- <label>Alamat</label> -->
			<input type="text" name="alamat_jemput_lama" hidden="true" value="<?= $alamat ?>">
			<!-- <label>Email</label> -->
			<input type="text" name="keterangan_lama" hidden="true" value="<?= $keterangan ?>">
			<!-- <label>No. HP</label> -->
			<input type="text" name="jenis_lama" hidden="true" value="<?= $jenis ?>">

			<label>Nama</label>
			<input type="text" name="nama" class="form_login" readonly value="">

			<label>Alamat Jemput</label>
			<input type="text" name="alamat_jemput_baru" class="form_login" value="">

			<label>Keterangan</label>
			<input type="text" name="keterangan_baru" class="form_login" value="">

			<label>Jenis Makanan</label>
			<input type="text" name="jenis_baru" class="form_login" value="">

			<input type="submit" name="edit_list_tolak" class="tombol_edit" value="Edit">
		</form>
	</div>
</body>
</html>