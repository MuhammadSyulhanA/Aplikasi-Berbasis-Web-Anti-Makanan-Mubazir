<?php
	include '../MODEL/koneksi_db.php';
	session_start();
	$nama= $_POST['nama_baru'];
	$alamat= $_POST['alamat_baru'];
	$email= $_POST['email_baru'];
	$nohp= $_POST['nohp_baru'];

	$nlama= $_POST['nama_lama'];
	$alama= $_POST['alamat_lama'];
	$elama= $_POST['email_lama'];
	$nolama= $_POST['nohp_lama'];

	$nama_don= $_POST['nama_baru_don'];
	$alamat_don= $_POST['alamat_baru_don'];
	$email_don= $_POST['email_baru_don'];
	$nohp_don= $_POST['nohp_baru_don'];
	$pass_don= $_POST['pass_baru_don'];

	$id_don= $_POST['id_don'];

	$nama_rela= $_POST['nama_baru_rela'];
	$alamat_rela= $_POST['alamat_baru_rela'];
	$email_rela= $_POST['email_baru_rela'];
	$nohp_rela= $_POST['nohp_baru_rela'];
	$pass_rela= $_POST['pass_baru_rela'];

	$namal_rela= $_POST['nama_lama_rela'];
	$emaill_rela= $_POST['email_lama_rela'];

	if(isset($_POST['edit_don'])){
		if ($nama!=null && $alamat!=null && $email!=null && $nohp!=null){
			$query = "update donatur set nama_don='$nama', alamat_don='$alamat', email_don='$email', nohp_don='$nohp' where nama_don='$nlama'";
			$hasil= mysqli_query($conn, $query);

			header("location: ../VIEW/admin_data_donatur.php");
		}
	}
	else if(isset($_POST['edit_rela'])){
		if ($nama!=null && $alamat!=null && $email!=null && $nohp!=null){
			$query = "update relawan set nama_rela='$nama', alamat_rela='$alamat', email_rela='$email', nohp_rela='$nohp' where nama_rela='$nlama'";
			$hasil= mysqli_query($conn, $query);
			header("location: ../VIEW/admin_data_relawan.php");
		}
	}
	else if(isset($_POST['edit_profil_don'])){
		if ($nama_don!=null && $alamat_don!=null && $email_don!=null && $nohp_don!=null){
			$query = "update donatur set nama_don='$nama_don', alamat_don='$alamat_don', email_don='$email_don', nohp_don='$nohp_don',pass_don='$pass_don' where id='$id_don'";
			$hasil= mysqli_query($conn, $query);
			$_SESSION['user']=$nama_don;

			header("location: ../VIEW/DONATUR/beranda_don.php");
		}
	}
	else if(isset($_POST['edit_profil_rela'])){
		if ($nama_rela!=null && $alamat_rela!=null && $email_rela!=null && $nohp_rela!=null){
			$query = "update relawan set nama_rela='$nama_rela', alamat_rela='$alamat_rela', email_rela='$email_rela', nohp_rela='$nohp_rela',pass_rela='$pass_rela' where nama_rela='$namal_rela' and email_rela='$emaill_rela'";
			$hasil= mysqli_query($conn, $query);
			$_SESSION['user']=$nama_rela;

			header("location: ../VIEW/RELAWAN/beranda_relawan.php");
		}
	}
?>
