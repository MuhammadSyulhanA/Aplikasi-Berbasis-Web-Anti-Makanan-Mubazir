<?php
	include "../../MODEL/koneksi_db.php";
	session_start();
	$nama= $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil Relawan</title>
<!--     <link rel="stylesheet" type="text/css" href="../CSS/login.css">
	<link rel="stylesheet" type="text/css" href="../CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="../CSS/style1.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/animation21.css">
	<link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/1.page.css">
	<link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/profil_rela.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<style>
		div.img {
			margin: 5px;
			border: 1px solid #ccc;
			float: left;
			width: 180px;
		}

		div.img:hover {
			border: 1px solid #777;
		}

		div.img img {
			width: 100%;
			height: auto;
		}

		div.desc {
			padding: 15px;
			text-align: center;
		}
	</style>        
</head>
<body>
	
<nav class="side-menu">
		<ul>
			<li><a href="pickup_donatur.php">pickup<span><i class="fas fa-bicycle"></i></span></a></li>
		<li><a href="profilrela_donatur.php">profil relawan<span><i class="fas fa-book"></i></span></a></li>
			<li><a href="#">soon..<span><i class="fas fa-map-marker"></i></span></a></li>
			<li><a href="#">soon..<span><i class="fas fa-bed"></i></span></a></li>
			<li><a href="#">soon..<span><i class="fas fa-compass"></i></span></a></li>
			<li><a href="#">soon..<span><i class="fas fa-beer"></i></span></a></li>
		</ul>
	</nav>
	<div class="menu">
   <!--      <a href="#" class="brand"><img src="https://instagram.fist1-2.fna.fbcdn.net/vp/1948e8afc57de2a50d9ddb8b19d7142c/5C3F4768/t51.2885-19/s320x320/39981138_307982913311206_7432194645188149248_n.jpg" width="100px"></a> -->
		<nav class="atas">
			<ul>
				<li><a href="beranda_don.php">beranda</a></li>
				<li><a href="#"><?php echo "Hai ".$_SESSION['user']; ?></a>
					<ul>
						<li><a href="donatur_edit_profil.php">Edit Profil</a></li>
						<li><a href="../../CONTROLLER/logout.php">Keluar</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
	<br></br><br></br><br></br><br></br>

	<?php
		$perintah="SELECT * FROM relawan";
		$result=mysqli_query($conn, $perintah);

		while ($data = mysqli_fetch_assoc($result)) :
	?>
	<div class="accordion">

		<!-- BOX 1 -->
		<div class="box a1">
			<div class="image_1">
				<div class="text">
					<h2><?php echo "Relawan ".$data['nama_rela']; ?></h2>
					<p>
					  <!--   Nama : <?= $data['nama_rela'] ?> -->
						Daerah :<?= $data['alamat_rela'] ?>
						No. Telepon : <?= $data['nohp_rela'] ?>
						Riwayat Distribusi :
						<?php 
							$perintah1="SELECT * FROM list_terima,penjemputan
								WHERE list_terima.id_jem = penjemputan.id_jemput";
							$result1=mysqli_query($conn, $perintah1);                
							
							while($data1 = mysqli_fetch_assoc($result1)) :    
						?>
						<?= $data1['id_jemput'] ?>
						<?= $data1['alamat_jemput'] ?>
						<?= $data1['jenis_makanan'] ?>
						<?php endwhile ; ?>
					</p>
				</div>
			</div>
		</div>
			
		<?php endwhile ; ?>

		

	</div>
	<!-- <?php
		$perintah="SELECT * FROM relawan";
		$result=mysqli_query($conn, $perintah);

		while ($data = mysqli_fetch_assoc($result)) :
	?>
	<div class="img">

		Nama :
		<div class="desc"><?= $data['nama_rela'] ?></div>
		Daerah :
		<div class="desc"><?= $data['alamat_rela'] ?></div>
		No. Telepon : 
		<div class="desc"><?= $data['nohp_rela'] ?></div>
		Riwayat Distribusi :
		<?php 
			$perintah1="SELECT * FROM list_terima,penjemputan
				WHERE list_terima.id_jem = penjemputan.id_jemput";
			$result1=mysqli_query($conn, $perintah1);                
			
			while($data1 = mysqli_fetch_assoc($result1)) :    
		?>
			<div class="desc"><?= $data1['id_jemput'] ?></div>
			<div class="desc"><?= $data1['alamat_jemput'] ?></div>
			<div class="desc"><?= $data1['jenis_makanan'] ?></div>
		<?php endwhile ; ?>
	<?php endwhile ; ?> -->

	<footer class="footer">
		<ul id="footer">
			<li class="item"><a href="#"><i class="fab fa-facebook"></i></a></li>
			<li class="item"><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="item"><a href="#"><i class="fab fa-google-plus"></i></a></li>
			<li class="item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
			<li class="item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		</ul>
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	  $(document).ready(function() {
		$(".pesan").hide();
		$(".baca_selengkapnya").click(function(){
		  $(".pesan").slideDown('slow');
		  $(this).hide();
		})
	  });

	  $(document).ready(function(){
		var bg=[0,1,2,3,4];
		var index=0;
		setInterval(function(){
		index=(index + 1) % bg.length;
		$('body').css('background-image','url("../../ASSETS/images/bg'+index+'.jpg")');
		},5000);
		});
	</script>

</body>
</html>