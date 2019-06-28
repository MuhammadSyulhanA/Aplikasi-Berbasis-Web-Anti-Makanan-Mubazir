<html>
<head>
    <title>Halaman LOGIN</title>
    <link rel="stylesheet" href="ASSETS/CSS/style.css">
</head>
<body>

    <div class="login-page">
        <div class="form">
           <!--  <form class="regis-form" action="MODEL/tambah.php" method="post">
                <input type="text" name="name" placeholder="Username" required="">
                <input type="password" name="pass" placeholder="Password" required="">
                <input type="text" name="mail" placeholder="Email" required="">
                <input type="text" name="address" placeholder="Alamat" required="">
                <input type="text" name="nomor" placeholder="No. HP" required="">
                <button name="reg_user"><a class="link" href="#">Create</a></button>
                <p class="pesan">
                    Sudah Terdaftar? <a href="#">Login</a>
                </p>
            </form> -->

            <form class="login-form" action="CONTROLLER/login.php" method="post">
                <input type="text" name="user" placeholder="Username" required="">
                <input type="password" name="pw" placeholder="Password" required="">
                <button name="login_user"><a class="link" href="#">Login</a></button>
                <p class="pesan" style="color: grey;">
                    Belum Terdaftar? <a href="CONTROLLER/daftar.php">Register</a>
                </p>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    $('.pesan a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
    </script>

</body>
</html>