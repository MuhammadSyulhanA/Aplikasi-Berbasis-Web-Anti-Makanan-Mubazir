<?php
    include "../../MODEL/koneksi_db.php";
    session_start();
    $nama= $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>MINTA JEMPUT Donatur</title>
    <!-- <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    <link rel="stylesheet" type="text/css" href="../CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="../CSS/style1.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/animation21.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/1.page.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/beranda_don.css">
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
                        <li><a href="relawan_edit_profil.php">Edit Profil</a></li>
                        <li><a href="../../CONTROLLER/logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <br></br><br></br>
    <p style="margin-left: 10em; color: white; background-color: grey; width: 20%; padding: 5px 5px 5px 5px;">LIST YANG DITERIMA</p>
    <?php
        $perintah="SELECT nama_don, keterangan, gambar, alamat_jemput, jenis_makanan from list_terima inner join penjemputan on list_terima.id_jem=penjemputan.id_jemput inner join donatur on penjemputan.id_donatur=donatur.id_don";
    
        
        $result=mysqli_query($conn, $perintah);
        // $result1=mysqli_query($conn, $perintah1);

        while ($data = mysqli_fetch_assoc($result)) :
    ?>

    <div id='#kotak'>
      <div class='signup'>
           <input type="text" readonly name="nama_don" value="<?= $data['nama_don'] ?>">
           <input type="text" readonly name="alamat_jemput" value="<?= $data['alamat_jemput'] ?>">
           <input type="text" readonly name="jenis_makanan" value="<?= $data['jenis_makanan'] ?>">
           <input type="text" readonly name="keterangan"value="<?= $data['keterangan'] ?>">
      </div>
      <div class='whysign'>
        <p class="w"><a target="_blank" href="#">
            <img src="../../ASSETS/upload/<?= $data['gambar'] ?>" alt="Forest" width="300" height="170">
        </a></p>
        <p>Isi data: 
          <span class="don">Nama Donatur</span>
          <span class="don">Alamat Jemput</span>
          <span class="don">Jenis Makanan</span>
          <span class="don">Keterangan</span>
        </p>
      </div>
    </div>
    <?php endwhile ; ?>
    
    <?php
        $perintah1="SELECT nama_don, keterangan, gambar, alamat_jemput, jenis_makanan from list_tolak inner join penjemputan on list_tolak.id_jem=penjemputan.id_jemput inner join donatur on penjemputan.id_donatur=donatur.id_don";
        $result1=mysqli_query($conn, $perintah1);

        while ($data = mysqli_fetch_assoc($result1)) :
    ?>
    <div id='#kotak'>
      <div class='signup'>
           <input type="text" readonly name="nama_don" value="<?= $data['nama_don'] ?>">
           <input type="text" readonly name="alamat_jemput" value="<?= $data['alamat_jemput'] ?>">
           <input type="text" readonly name="jenis_makanan" value="<?= $data['jenis_makanan'] ?>">
           <input type="text" readonly name="keterangan"value="<?= $data['keterangan'] ?>">
           
      </div>
      <div class='whysign'>
        <p class="w"><a target="_blank" href="#">
            <img src="../../ASSETS/upload/<?= $data['gambar'] ?>" alt="Forest" width="300" height="170">
        </a>
            Isi data: 
          <span class="don">Nama Donatur</span>
          <span class="don">Alamat Jemput</span>
          <span class="don">Jenis Makanan</span>
          <span class="don">Keterangan </span>
        </p>
      </div>
      <?php endwhile ; ?>
    </div>
    
            
        

    <!-- <div>LIST YANG DITERIMA
    <?php
        $perintah="SELECT nama_don, keterangan, gambar, alamat_jemput, jenis_makanan from list_terima inner join penjemputan on list_terima.id_jem=penjemputan.id_jemput inner join donatur on penjemputan.id_donatur=donatur.id_don";
        $perintah1="SELECT nama_don, keterangan, gambar, alamat_jemput, jenis_makanan from list_tolak inner join penjemputan on list_tolak.id_jem=penjemputan.id_jemput inner join donatur on penjemputan.id_donatur=donatur.id_don";
        
        $result=mysqli_query($conn, $perintah);
        $result1=mysqli_query($conn, $perintah1);

        while ($data = mysqli_fetch_assoc($result)) :
    ?>
    <div class="img">
        <a target="_blank" href="#">
            <img src="../../ASSETS/upload/<?= $data['gambar'] ?>" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
        <div class="desc"><?= $data['nama_don'] ?></div>
        <div class="desc"><?= $data['keterangan'] ?></div>
        <div class="desc"><?= $data['alamat_jemput'] ?></div>
        <div class="desc"><?= $data['jenis_makanan'] ?></div>
    </div>
    <?php endwhile ; ?>
    </div>

    <div>LIST YANG DITOLAK
    <?php while ($data = mysqli_fetch_assoc($result1)) : ?>
    <div class="img">
        <a target="_blank" href="#">
            <img src="../../ASSETS/upload/<?= $data['gambar'] ?>" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Add a description of the image here</div>
        <div class="desc"><?= $data['nama_don'] ?></div>
        <div class="desc"><?= $data['keterangan'] ?></div>
        <div class="desc"><?= $data['alamat_jemput'] ?></div>
        <div class="desc"><?= $data['jenis_makanan'] ?></div>
    </div>
    <?php endwhile ; ?>
    </div> -->

<!--     <div class="img">
      <a target="_blank" href="../../ASSETS/IMG_8124.jpg">
        <img src="../../ASSETS/IMG_8124.jpg" alt="Northern Lights" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>

    <div class="img">
      <a target="_blank" href="../../ASSETS/IMG_8125.jpg">
        <img src="../../ASSETS/IMG_8125.jpg" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
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