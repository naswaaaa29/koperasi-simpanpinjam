<?php
include "koneksi.php";
$username = $_POST['username'];
$pass = $_POST['password'];
$encrypt = md5($pass);

$insert = "INSERT INTO users VALUES ('$username','$encrypt')";
$sql = mysqli_query($koneksi,$insert);

if($sql){
    header("location:viewuser.php");
} else {
    echo "DATA GAGAL DISIMPAN <a href='uitambahuser.php'>Kembali</a>";
}

?>