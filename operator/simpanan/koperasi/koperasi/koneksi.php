<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "koperasi";
$koneksi = mysqli_connect($host,$username,$password,$database);

if(!$koneksi){
    echo"Koneksi Gagal!";
}
?>