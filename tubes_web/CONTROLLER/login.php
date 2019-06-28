<?php
    include "../MODEL/koneksi_db.php";
    
    if(isset($_POST['login_user'])){
        $username=$_POST['user'];
        $pass=$_POST['pw'];      
        
        $perintah="SELECT * FROM admin WHERE nama_user='$username' AND passnya='$pass'";
        $perintah1="SELECT * FROM donatur WHERE nama_don='$username' AND pass_don='$pass'";
        $perintah2="SELECT * FROM relawan WHERE nama_rela='$username' AND pass_rela='$pass'";
        
        $hasil=mysqli_query($conn,$perintah);
        $hasil1=mysqli_query($conn,$perintah1);
        $hasil2=mysqli_query($conn,$perintah2);

        if (mysqli_num_rows($hasil)){ 
            session_start();
            $_SESSION['user']=$username;
            $_SESSION['login'] = True; //menyimpan username pada session login

            header('location: ../VIEW/admin_data_donatur.php'); //direct ke halaman tabel_data
            
        }else if(mysqli_num_rows($hasil1)){
            $row=mysqli_fetch_array($hasil1);
            session_start();
            $_SESSION['id_don']=$row['id_don'];
            $_SESSION['nama']=$row['nama_don'];
            $_SESSION['alamat']=$row['alamat_don'];
            $_SESSION['email']=$row['email_don'];
            $_SESSION['nohp']=$row['nohp_don'];
            $_SESSION['password']=$row['pass_don'];
            $_SESSION['user']=$username;
            $_SESSION['login'] = True; //menyimpan username pada session login
            header('location: ../VIEW/DONATUR/beranda_don.php'); //direct ke halaman tabel_data

        }else if(mysqli_num_rows($hasil2)){
            $row=mysqli_fetch_array($hasil2);
            session_start();
            $_SESSION['id_rela']=$row['id_rela'];
            $_SESSION['namar']=$row['nama_rela'];
            $_SESSION['alamatr']=$row['alamat_rela'];
            $_SESSION['emailr']=$row['email_rela'];
            $_SESSION['nohpr']=$row['nohp_rela'];
            $_SESSION['passwordr']=$row['pass_rela'];
            $_SESSION['user']=$username;
            $_SESSION['login'] = True; //menyimpan username pada session login
            header('location: ../VIEW/RELAWAN/beranda_relawan.php?nama=$username&password=$pass'); //direct ke halaman tabel_data
            
        }else{
            header('location: ../index.php');
        }
    }

?>