<?php
	include '../../MODEL/koneksi_db.php';
	
	session_start();

	$nama= $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/animation21.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/1.page.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/edit_pro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body>
	<nav class="side-menu">
        <ul>
            <li><a href="sharinglist_relawan.php">sharing list<span><i class="fas fa-bicycle"></i></span></a></li>
        <li><a href="pickuplist_relawan.php">pickup list<span><i class="fas fa-book"></i></span></a></li>
            <li><a href="pickupreq_relawan.php">pickup request<span><i class="fas fa-compass"></i></span></a></li>
            <li><a href="#">soon..<span><i class="fas fa-bed"></i></span></a></li>
            <li><a href="#">soon..<span><i class="fas fa-map-marker"></i></span></a></li>
            <li><a href="#">soon..<span><i class="fas fa-beer"></i></span></a></li>
        </ul>
    </nav>
    <div class="menu">
   <!--      <a href="#" class="brand"><img src="https://instagram.fist1-2.fna.fbcdn.net/vp/1948e8afc57de2a50d9ddb8b19d7142c/5C3F4768/t51.2885-19/s320x320/39981138_307982913311206_7432194645188149248_n.jpg" width="100px"></a> -->
        <nav class="atas">
            <ul>
                <li><a href="beranda_relawan.php">beranda</a></li>
                <li><a href="#"><?php echo "Hai ".$_SESSION['user']; ?></a>
                    <ul>
                        <li><a href="donatur_edit_profil.php">Edit Profil</a></li>
                        <li><a href="../../CONTROLLER/logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
<br><br><br><br>

    <div class="box">
      <div id="header">
        <div id="cont-lock"><i class="material-icons lock"></i></div>
        <div id="bottom-head"><h1 id="logintoregister">Edit Profil</h1></div>
      </div> 
       <form action="../../CONTROLLER/update.php" method="post">

        <input type="text" name="nama_lama_rela" hidden="true" value="<?= $_SESSION['namar']; ?>">
            
        <input type="text" name="alamat_lama_rela" hidden="true" value="<?= $_SESSION['alamat']; ?>">
            
        <input type="text" name="email_lama_rela" hidden="true" value="<?= $_SESSION['emailr']; ?>">
        
        <input type="text" name="nohp_lama_rela" hidden="true" value="<?= $_SESSION['nohpr']; ?>">
            
        <input type="text" name="pass_lama_rela" hidden="true" value="<?= $_SESSION['passwordr']; ?>">

        <div class="group">      
          <input class="inputMaterial" type="text" name="nama_baru_rela" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Nama baru</label>
        </div>
        <div class="group">      
          <input class="inputMaterial" type="text" name="pass_baru_rela" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Password baru</label>
        </div>
        <div class="group">      
          <input class="inputMaterial" type="text" name="alamat_baru_rela" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Alamat baru</label>
        </div>
        <div class="group">      
          <input class="inputMaterial" type="text" name="email_baru_rela" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Email baru</label>
        </div>
        <div class="group">      
          <input class="inputMaterial" type="text" name="nohp_baru_rela" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>No. HP baru</label>
        </div>
        <button id="buttonlogintoregister" name="edit_profil_rela" type="submit">Edit</button>
      </form>
    </div>

	<!-- <h1>Edit data Relawan</h1>
	<div class="kotak_edit">
		<p class="tulisan_editn"></p>
		<form method="POST" action="../../CONTROLLER/update.php">
			
			<input type="text" name="nama_lama_rela" hidden="true" value="<?= $_SESSION['namar']; ?>">
			
			<input type="text" name="alamat_lama_rela" hidden="true" value="<?= $_SESSION['alamat']; ?>">
			
			<input type="text" name="email_lama_rela" hidden="true" value="<?= $_SESSION['emailr']; ?>">
		
			<input type="text" name="nohp_lama_rela" hidden="true" value="<?= $_SESSION['nohpr']; ?>">
			
			<input type="text" name="pass_lama_rela" hidden="true" value="<?= $_SESSION['passwordr']; ?>">

			<label>Nama</label>
			<input type="text" name="nama_baru_rela" class="form_login" value="">

			<label>Password baru</label>
			<input type="text" name="pass_baru_rela" class="form_login" value="">

			<label>Alamat</label>
			<input type="text" name="alamat_baru_rela" class="form_login" value="">

			<label>Email</label>
			<input type="text" name="email_baru_rela" class="form_login" value="">

			<label>No. HP</label>
			<input type="text" name="nohp_baru_rela" class="form_login" value="">

			<input type="submit" name="edit_profil_rela" class="tombol_edit" value="Edit">
		</form>
	</div> -->

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