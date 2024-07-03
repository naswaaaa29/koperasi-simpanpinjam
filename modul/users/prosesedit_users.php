<?php
include '../../koneksi.php';
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$edit = "UPDATE users SET password =md5('$password') where user_id = '$user_id'";

$edit_query = mysqli_query($koneksi,$edit);

if($edit_query){
    header("location: viewusers.php");
}else{
    echo"DATA GAGAL DISIMPAN <a href='tambahuser.php'>Kembali</a>";
}

?>