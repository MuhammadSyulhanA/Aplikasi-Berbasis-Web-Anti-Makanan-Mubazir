<?php
 $server="localhost";
    $username="root";
    $password="";
    $db="tubes_web";

    $conn=mysqli_connect($server, $username, $password, $db) or die("tidak terhubung"); //sesuaikan dengan database anda
	mysqli_select_db("gallery");
 
if($_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0){
  $fileName = $_FILES['gambar']['name'];
  $mimeType = $_FILES['gambar']['type'];
  $tmpFile = fopen($_FILES['gambar']['tmp_name'], 'rb'); // (fileName, mode)
  $fileData = fread($tmpFile, filesize($_FILES['gambar']['tmp_name']));
  $fileData = addslashes($fileData);
  
  $query = "insert into pictures set file_name='$fileName',mime_type='$mimeType', file_data='$fileData'";
  mysql_query($query) or die("Upload Gambar Gagal: ".mysql_error());
  echo "Gambar telah disimpan";
}
?>