<?php
    include '../MODEL/koneksi_db.php';

    session_start();

    $nama= $_SESSION['user'];

    $alamat_jemput = $_POST['alamat_jemput'];
    $jenis_makanan = $_POST['jenis_makanan'];

    $file_gambar=$_FILES['gambar']['name'];
    $source=$_FILES['gambar']['tmp_name'];
    //masukin gambarnya
    $folder='../ASSETS/upload/';
    //ngambil gambarnya
    $url='../../ASSETS/upload/';
    echo $url = $url.$file_gambar;

    move_uploaded_file($source, $folder.$file_gambar);

    $perintah = "insert into penjemputan (id_donatur, alamat_jemput, jenis_makanan, gambar) values ({$_SESSION['id_don']},'$alamat_jemput','$jenis_makanan','$url')";

    $hasil=mysqli_query($conn,$perintah);
    if ($hasil) {
        
        header('location:../VIEW/DONATUR/beranda_don.php');
        echo "Berhasil";

    } else {
        echo "Gagal";
    }
    // echo $hasil;
    // var_dump($hasil);
    // echo var_dump($hasil);
  ?>