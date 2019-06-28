<?php
	$nama= $_GET['nama'];
	$alamat= $_GET['alamat'];
	$email= $_GET['email'];
	$nohp= $_GET['nohp'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Donatur</title>
	<link rel="stylesheet" type="text/css" href="../ASSETS/CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="../ASSETS/CSS/style1.css">
	<link rel="stylesheet" type="text/css" href="../ASSETS/CSS/beranda_admin.css">
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
	<form class="logout" method="POST" action="admin_data_donatur.php">
		<input type="submit" name="logout" class="red" value="kembali">
	</form>
	<h1>Edit Data Donatur</h1>
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
			<input type="text" name="nama_baru" class="form_login" value="<?= $nama ?>">

			<label>Alamat</label>
			<input type="text" name="alamat_baru" class="form_login" value="<?= $alamat ?>">

			<label>Email</label>
			<input type="text" name="email_baru" class="form_login" value="<?= $email ?>">

			<label>No. HP</label>
			<input type="text" name="nohp_baru" class="form_login" value="<?= $nohp ?>">

			<input type="submit" name="edit_don" class="tombol_edit" value="Edit">
		</form>
	</div>
</body>
</html>