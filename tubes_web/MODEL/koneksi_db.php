<?php 
    $server="localhost";
    $username="root";
    $password="";
    $db="tubes_web";

    $conn=mysqli_connect($server, $username, $password, $db) or die("tidak terhubung");

    if(!$conn){
        die("Input Salah : ".mysqli_connect_error());
    }
?>