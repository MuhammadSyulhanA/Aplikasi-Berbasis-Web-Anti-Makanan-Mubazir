<?php
    include "koneksi_db.php";
    
    if(isset($_POST['login_user'])){
        $username=$_POST['user'];
        $pass=$_POST['pw'];      
        
        $perintah="SELECT * FROM admin WHERE nama_user='$username' AND passnya='$pass'";
        $perintah1="SELECT * FROM donatur WHERE nama_don='$username' AND pass_don='$pass'";
        $hasil=mysqli_query($conn,$perintah);
        $hasil1=mysqli_query($conn,$perintah1);
        
        if (mysqli_num_rows($hasil)){
            session_start();
            $_SESSION['user']=$username;
            $_SESSION['login'] = True; //menyimpan username pada session login
            header('location: ../CONTROLLER/home.php'); //direct ke halaman tabel_data
        }else if(mysqli_num_rows($hasil1)){
            session_start();
            $_SESSION['user']=$username;
            $_SESSION['login'] = True; //menyimpan username pada session login
            header('location: ../CONTROLLER/home.php'); //direct ke halaman tabel_data
        }else{
            header('location: ../index.php');
        }
    }

?>