<?php
    include '../MODEL/koneksi_db.php';

    $alamat_jemput = $_POST['alamat_jemput'];
    $jenis_makanan = $_POST['jenis_makanan'];
    $foto_makanan = $_POST['foto_makanan'];

    if(isset($_POST['mintajemput_don'])){

         $perintah = "insert into penjemputan(alamat_jemput,jenis_makanan) values ('$alamat_jemput','$jenis_makanan')";
        // $perintah="select * from penjemputan";
        $hasil=mysqli_query($conn,$perintah);
        
        echo $hasil;
        // header('location:../VIEW/DONATUR/beranda_don.php');
        var_dump($hasil);
    }
    
    echo $alamat_jemput;
    echo $jenis_makanan;
?>