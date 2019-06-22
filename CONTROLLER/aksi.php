<?php
	include '../MODEL/koneksi_db.php';

	$namanya = $_POST['nama'];
	$alamatnya = $_POST['alamat'];
	$emailnya = $_POST['email'];
	$nohpnya = $_POST['nohp'];

	if (isset($_POST['edit_don'])){
		$url = "location: ../VIEW/admin_edit_don.php?nama=$namanya&alamat=$alamatnya&email=$emailnya&nohp=$nohpnya";
		header($url);
	}
	else if (isset($_POST['edit_rela'])){
		$url = "location: ../VIEW/admin_edit_rela.php?nama=$namanya&alamat=$alamatnya&email=$emailnya&nohp=$nohpnya";
		header($url);
	}
	else if (isset($_POST['hapus'])){
		$query = "delete from donatur where nama_don='$namanya' and email_don='$emailnya'";
		$hasil=mysqli_query($conn, $query);
		header("location: ../VIEW/admin_data_donatur.php");
	}
?>