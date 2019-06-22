<?php
$connection = mysql_connect("dbhost", "dbuser", "dbpassword"); //sesuaikan dengan database anda
mysql_select_db("gallery");
$idFile = $_GET['id'];
 
$dataGambar = mysql_fetch_array(mysql_query("select * from pictures where id='$idFile'"));
$filename = $dataGambar['file_name'];
$mime_type = $dataGambar['mime_type'];
$filedata = $dataGambar['file_data'];
header("content-disposition: inline; filename=$filename");
header("content-type: $mime_type");
header("content-length: ".strlen($filedata));
echo ($filedata);
?> 