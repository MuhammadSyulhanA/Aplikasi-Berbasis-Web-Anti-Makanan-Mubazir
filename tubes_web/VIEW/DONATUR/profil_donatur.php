<?php
    include "../../MODEL/koneksi_db.php";
    session_start();
    $nama= $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Beranda Donatur</title>
    <!-- <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    <link rel="stylesheet" type="text/css" href="../CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="../CSS/style1.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/animation21.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/1.page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body>
    
    <div class="navbar">
        <div class="container">
            <ul>
                <li class="logo"><a href="#">HOME</a></li>
                <li><a href="mintajemput_don.php">PICK UP</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SERVICE</a></li>

                <li class="dropdown"><a href="#"><?php echo "Hai ".$_SESSION['user']; ?></a>     
                    <ul class="isi_dropdown">
                        <li><a href="donatur_edit_profil.php">Edit Profil</a>
                       
                        </li>
                        <li><a href="../../CONTROLLER/logout.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

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
		</tr>
		<?php endwhile ; ?>
	</table>

    <ul id="footer">
        <li class="item"><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li class="item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="item"><a href="#"><i class="fab fa-google-plus"></i></a></li>
        <li class="item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
        <li class="item"><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>

</body>
</html>