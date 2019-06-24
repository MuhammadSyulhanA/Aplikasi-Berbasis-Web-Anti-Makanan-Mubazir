<?php
	include '../MODEL/koneksi_db.php';

	$namanya = $_POST['nama'];
	$alamatnya = $_POST['alamat'];
	$emailnya = $_POST['email'];
	$nohpnya = $_POST['nohp'];
	$keterangannya = $_POST['keterangan'];
	$jenisnya = $_POST['jenis'];

	if (isset($_POST['edit_don'])){
		$url = "location: ../VIEW/admin_edit_don.php?nama=$namanya&alamat=$alamatnya&email=$emailnya&nohp=$nohpnya";
		header($url);
	}
	else if (isset($_POST['edit_rela'])){
		$url = "location: ../VIEW/admin_edit_rela.php?nama=$namanya&alamat=$alamatnya&email=$emailnya&nohp=$nohpnya";
		header($url);
	}
	else if (isset($_POST['edit_list_terima'])){
		$url = "location: ../VIEW/admin_edit_list_terima.php?keterangan=$keterangannya&alamat=$alamatnya&jenis=$jenisnya";
		header($url);
	}
	else if (isset($_POST['edit_list_tolak'])){
		$url = "location: ../VIEW/admin_edit_list_tolak.php?keterangan=$keterangannya&alamat=$alamatnya&jenis=$jenisnya";
		header($url);
	}
	else if (isset($_POST['hapus'])){
		$query = "delete from donatur where nama_don='$namanya' and email_don='$emailnya'";
		$hasil=mysqli_query($conn, $query);
		header("location: ../VIEW/admin_data_donatur.php");
	}
	else if (isset($_POST['hapus_terima'])){
		$query = "delete from penjemputan where alamat_jemput='$alamatnya' and jenis_makanan='$jenisnya'";
		$hasil=mysqli_query($conn, $query);
		$query1 = "delete from list_terima where keterangan='$keterangannya'";
		$hasil1=mysqli_query($conn, $query1);
		header("location: ../VIEW/admin_list_masuk.php");
	}
	else if (isset($_POST['hapus_tolak'])){
		$query = "delete from penjemputan where alamat_jemput='$alamatnya' and jenis_makanan='$jenisnya'";
		$hasil=mysqli_query($conn, $query);
		$query1 = "delete from list_tolak where keterangan='$keterangannya'";
		$hasil1=mysqli_query($conn, $query1);
		header("location: ../VIEW/admin_list_masuk.php");
	}
?>