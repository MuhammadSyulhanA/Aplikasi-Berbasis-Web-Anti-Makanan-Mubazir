<?php
    include "../MODEL/koneksi_db.php";
    
    if(isset($_POST['reg_user'])){

        $username=$_POST['name_don'];
        $pass=$_POST['pass_don'];
        $email=$_POST['mail_don'];
        $alamat=$_POST['address_don'];  
        $nomer=$_POST['nomor_don']; 
        // $password=MD5($pass);   
        
        $perintah="INSERT INTO donatur(nama_don, pass_don, email_don, alamat_don, nohp_don) VALUES ('$username', '$pass', '$email', '$alamat', '$nomer')";
        $hasil=mysqli_query($conn,$perintah);
        
        if ($hasil){
            //var_dump($hasil);
            session_start();
            $_SESSION['user']=$username;
            header('location: ../index.php'); //direct ke halaman tabel_data
        }else{
            echo "error : ".$hasil.mysqli_connect_error();
            var_dump($hasil);
        }
    }
    else if(isset($_POST['reg_user_rela'])){

        $username=$_POST['name_rel'];
        $pass=$_POST['pass_rel'];
        $email=$_POST['mail_rel'];
        $alamat=$_POST['address_rel'];  
        $nomer=$_POST['nomor_rel']; 
        // $password=MD5($pass);   
        
        $perintah="INSERT INTO relawan(nama_rela, pass_rela, email_rela, alamat_rela, nohp_rela) VALUES ('$username', '$pass', '$email', '$alamat', '$nomer')";
        $hasil=mysqli_query($conn,$perintah);
        
        if ($hasil){
            //var_dump($hasil);
            session_start();
            $_SESSION['user']=$username;
            header('location: ../index.php'); //direct ke halaman tabel_data
        }else{
            echo "error : ".$hasil.mysqli_connect_error();
            var_dump($hasil);
        }
    }

?>