<?php
include '../../koneksi.php';
$user = $_GET['user_id'];
$hapus = "DELETE from users where user_id = '$user'";
$hapus_query = mysqli_query($koneksi,$hapus);
if($hapus_query){
    header("location: viewusers.php");
}else{
    echo"DATA GAGAL DIHAPUS <a href='tambahusers.php'>Kembali</a>";
}

?>