<?php
    include "../../MODEL/koneksi_db.php";
    session_start();
    $nama= $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>PickUp List Relawan</title>
   <!--  <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    <link rel="stylesheet" type="text/css" href="../CSS/form_edit.css">
	<link rel="stylesheet" type="text/css" href="../CSS/style1.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/animation21.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/1.page.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/picklist.css">
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

    <?php
        $perintah="SELECT nama_don, keterangan, gambar, alamat_jemput, jenis_makanan from list_terima inner join penjemputan on list_terima.id_jem=penjemputan.id_jemput inner join donatur on penjemputan.id_donatur=donatur.id_don";
        $result=mysqli_query($conn, $perintah);

        while ($data = mysqli_fetch_assoc($result)) :
    ?>

    <div class="isini">
        <div class="cardnya">
            <div class="isinya">
              <img src="../../ASSETS/upload/<?= $data['gambar'] ?>" alt="Forest" width="600" height="400">
            </div>
            <div class="teksnya">
              <p class="tag"><?= $_SESSION['namar'] ?></p>
              <h2>List Jemput ke- </h2>
              <p class="text">Nama Donatur : <?= $data['nama_don'] ?> <br> Alamat Jemput : <?= $data['alamat_jemput'] ?> <br> Jenis Makanan : <?= $data['jenis_makanan'] ?> <br> Keterangan : <?= $data['keterangan'] ?>  </p>
            </div>
        </div>
    </div>

    <?php endwhile ; ?> -->

    <!-- <?php
        $perintah="SELECT nama_don, keterangan, gambar, alamat_jemput, jenis_makanan from list_terima inner join penjemputan on list_terima.id_jem=penjemputan.id_jemput inner join donatur on penjemputan.id_donatur=donatur.id_don";
        $result=mysqli_query($conn, $perintah);

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