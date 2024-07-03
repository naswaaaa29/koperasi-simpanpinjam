<?php
include '../../koneksi.php';
$user = $_POST['user_id'];
$pass = $_POST['password'];
$insert = "insert into users(user_id, password)values('$user',md5('$pass'));";

$insert_query = mysqli_query($koneksi,$insert);

if($insert_query){
    header("location:viewusers.php");
}else{
    echo"DATA GAGAL DISIMPAN <a href='tambahusers.php'>Kembali</a>";
}
?>