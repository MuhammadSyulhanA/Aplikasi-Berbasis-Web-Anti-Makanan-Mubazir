<?php
    include "../../MODEL/koneksi_db.php";
    session_start();
    $nama= $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Beranda Relawan</title>
    <!-- <link rel="stylesheet" type="text/css" href="../CSS/login.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/animation21.css">
    <link rel="stylesheet" type="text/css" href="../../ASSETS/CSS/1.page.css">
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
                        <li><a href="relawan_edit_profil.php">Edit Profil</a></li>
                        <li><a href="../../CONTROLLER/logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

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