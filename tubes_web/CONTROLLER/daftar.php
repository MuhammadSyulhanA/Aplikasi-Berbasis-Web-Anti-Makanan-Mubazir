<html>
<head>
    <title>Halaman LOGIN</title>
    <link rel="stylesheet" href="../VIEW/CSS/style.css">
</head>
<body>

    <div class="login-page">
        <div class="form">
            <form class="regis-form" action="MODEL/register.php" method="post">
                <input type="text" name="name_rel" placeholder="Username" required="">
                <input type="password" name="pass_rel" placeholder="Password" required="">
                <input type="text" name="mail_rel" placeholder="Email" required="">
                <input type="text" name="address_rel" placeholder="Alamat" required="">
                <input type="text" name="nomor_rel" placeholder="No. HP" required="">
                <button name="reg_user_rela"><a class="link" href="#">Create</a></button>
                <p class="pesan" style="color: grey;">
                    Daftar sebagai <a href="#">DONATUR</a>
                </p>
                <p class="pesan" style="color: grey;">
                    Sudah Terdaftar? <a href="../index.php">Login</a>
                </p>
            </form>

            <form class="regis-form_don" action="../MODEL/register.php" method="post">
                <input type="text" name="name_don" placeholder="Username" required="">
                <input type="text" name="pass_don" placeholder="Password" required="">
                <input type="text" name="mail_don" placeholder="Email" required="">
                <input type="text" name="address_don" placeholder="Alamat" required="">
                <input type="text" name="nomor_don" placeholder="No. HP" required="">
                <button name="reg_user"><a class="link" href="#">Create</a></button>
                <p class="pesan" style="color: grey;">
                    Daftar sebagai <a href="#">RELAWAN</a>
                </p>
                <p class="pesan" style="color: grey;">
                    Sudah Terdaftar? <a href="../index.php">Login</a>
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