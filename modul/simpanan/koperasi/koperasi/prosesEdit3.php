<?php
include "koneksi.php";
$username = $_POST['username'];
$pass = $_POST['password'];
$encrypt = md5($pass);
$query1 = "UPDATE users SET password='$encrypt' WHERE user_id='$username'";
$sql = mysqli_query($koneksi,$query1);

if($sql){
    header("location: viewuser.php");
}else {
    echo "DATA GAGAL DI UPDATE <a href='uiEdit3.php'>Kembali</a>";
}

?>