<?php
    include '../../MODEL/koneksi_db.php';
    
    session_start();
    $nama= $_SESSION['user'];

    if(isset($_POST['terima'])){

        $perintah = "insert into penjemputan(alamat_jemput,jenis_makanan) values ('$alamat_jemput','$jenis_makanan')";
       // $perintah="select * from penjemputan";
       $hasil=mysqli_query($conn,$perintah);
       
       echo $hasil;
       // header('location:../VIEW/DONATUR/beranda_don.php');
       var_dump($hasil);
   }


?>