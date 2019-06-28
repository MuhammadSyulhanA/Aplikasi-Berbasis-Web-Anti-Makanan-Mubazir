<?php
    include "../../MODEL/koneksi_db.php";
    session_start();
    $nama= $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pick Up Donatur</title>
<!--     <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/login.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/style1.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/animation21.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/1.page.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/beranda_don.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
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
    <br></br><br></br>
    
    <div id='#kotak'>
      <div class='signup'>
         <form method="POST" action="../../CONTROLLER/pickup_don.php" enctype="multipart/form-data">
           <input type="text" name="alamat_jemput" placeholder='Alamat Penjemputan:' value="">
           <input type="text" name="jenis_makanan" placeholder='Jenis Makanan:' value="">
           <input type="text" readonly placeholder='Gambar:' value="">
           <input type="file" name="gambar" placeholder='Gambar:' value="">
           <button type="submit" name="jemput_don">MINTA JEMPUT</button>
         </form>
      </div>
      <div class='whysign'>
        <h1 class="q">Meminta Penjemputan</h1>
        <p class="w">Donatur dapat meminta penjemputan makanan oleh Relawan dengan jenis makanan apapun, dan dimanapun Donatur berada!</p>
        <p>Harus diisi: 
          <span class="don">Alamat Penjemputan</span>
          <span class="don">Jenis Makanan</span>
          <span class="don">Gambar</span>
          <br>
        </p>
      </div>
    </div>

    <!-- <div class="kotak_edit">
		<p class="tulisan_editn"></p>
		<form method="POST" action="../../CONTROLLER/pickup_don.php" enctype="multipart/form-data">
			<label>Alamat Penjemputan</label>
			<input type="text" name="alamat_jemput" class="form_login" value="">

			<label>Jenis Makanan</label>
			<input type="text" name="jenis_makanan" class="form_login" value="">

            <label>Gambar Makanan</label>
            <input type="file" name="gambar" class="form_login" value="">

			<button type="submit" name="jemput_don" class="tombol_edit">MINTA JEMPUT</button>
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
//ganti gambar
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