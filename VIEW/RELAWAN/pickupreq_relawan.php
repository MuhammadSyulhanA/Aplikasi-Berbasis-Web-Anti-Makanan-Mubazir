<?php
    include "../../MODEL/koneksi_db.php";
    session_start();
    $nama= $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>PickUp Request Relawan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/animation21.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/1.page.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/pickreq.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    

    
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
    <br><br><br><br>

    <?php
        $perintah="SELECT * FROM penjemputan";
        $result=mysqli_query($conn, $perintah);
        
        $row=mysqli_fetch_array($result);
        
        $_SESSION['gambar']=$row['gambar'];

        while ($data = mysqli_fetch_assoc($result)) :
    ?>

    <form method="post" action="../../CONTROLLER/acc_dec.php">
        <div class="gridnya">
            <div><img src="../../ASSETS/upload/<?= $data['gambar'] ?>" width="300" height="200"></div>
            <div>
                <label style="font-size: 14px">ID Jemput</label>
                <input type="text" name="id_jemput" readonly value="<?= $data['id_jemput'] ?>" ><br>
                <label style="font-size: 14px">ID Donatur</label>
                <input type="text" name="id_donatur" readonly value="<?= $data['id_donatur'] ?>" >
                <label style="font-size: 14px">Alamat Jemput</label>
                <input type="text" name="alamat_jemput" readonly value="<?= $data['alamat_jemput'] ?>" >
                <label style="font-size: 14px">Jenis Makanan</label>
                <input type="text" name="jenis_makanan" readonly value="<?= $data['jenis_makanan'] ?>" >

                <label style="font-size: 14px">Keterangan :</label>
                <input type="text" name="keterangan" placeholder="Diisi oleh Relawan" value="" >

                <button type="submit" name="terima" class="tombol_edit">Terima</button>
                <button type="submit" name="tolak" class="tombol_tolak">Tolak</button>
            </div>
        </div>
        <br></br>
    </form>
    <?php endwhile ; ?>

<!--     <?php
        $perintah="SELECT * FROM penjemputan";
        $result=mysqli_query($conn, $perintah);
        
        $row=mysqli_fetch_array($result);
        
        $_SESSION['gambar']=$row['gambar'];

        while ($data = mysqli_fetch_assoc($result)) :
    ?>
        <div class="img">
            <a target="_blank" href="#">
                <img src="../../ASSETS/upload/<?= $data['gambar'] ?>" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
            <form method="post" action="../../CONTROLLER/acc_dec.php">
                <input type="text" name="id_jemput" readonly value="<?= $data['id_jemput'] ?>" >
                <input type="text" name="id_donatur" readonly value="<?= $data['id_donatur'] ?>" >
                <input type="text" name="alamat_jemput" readonly value="<?= $data['alamat_jemput'] ?>" >
                <input type="text" name="jenis_makanan" readonly value="<?= $data['jenis_makanan'] ?>" >
                
                <label>Keterangan :</label>
                <input type="text" name="keterangan" placeholder="Diisi oleh Relawan" value="" >

                <button type="submit" name="terima" class="tombol_edit">Terima</button>
                <button type="submit" name="tolak" class="tombol_tolak">Tolak</button>
            </form>
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