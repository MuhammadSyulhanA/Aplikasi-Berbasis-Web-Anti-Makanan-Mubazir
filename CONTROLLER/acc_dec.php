<?php
    include "../MODEL/koneksi_db.php";
    session_start();

    $nama= $_SESSION['user'];

    $id_jemput=$_POST['id_jemput'];
	$id_donatur=$_POST['id_donatur'];
	$keterangan=$_POST['keterangan'];
	$lol=$_SESSION['gambar'];

	if(isset($_POST['terima'])){
		if ($keterangan!=null){
			$query = "insert into list_terima (id_relawan, id_jem, keterangan) values ({$_SESSION['id_rela']},'$id_jemput','$keterangan')";
			$hasil= mysqli_query($conn, $query);
			//var_dump($hasil);
			header("location: ../VIEW/RELAWAN/beranda_relawan.php");
		}
	}
	else if(isset($_POST['tolak'])){
		if ($keterangan!=null){
			$query = "insert into list_tolak (id_relawan, id_jem, keterangan) values ({$_SESSION['id_rela']},'$id_jemput','$keterangan')";
			$hasil= mysqli_query($conn, $query);
			//var_dump($hasil);

			header("location: ../VIEW/RELAWAN/beranda_relawan.php");
		}
	}

    // if (isset($_POST['terima'])) {
    // 	echo $_SESSION['id_rela'];
    // 	echo "lol";
    // }
  
?>