<?php 
	//kenapa include database, di database udh dbikinin query
	include '../MODEL/koneksi_db.php';
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email= $_POST['email'];
	$nohp= $_POST['nohp'];

	//query tambah data
	$perintah = "insert into donatur (nama_don, alamat_don, email_don, nohp_don) values ('$nama','$alamat','$email','$nohp')";
	$result = mysqli_query($conn, $perintah);
	
	header("location: ../VIEW/admin_data_donatur.php");
	// if ($result){
 //        header("location: ../index.html");
 //    }
?>