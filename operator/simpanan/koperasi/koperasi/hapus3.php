<?php
include "koneksi.php";
$username = $_GET['user_id'];
$query = "DELETE FROM users WHERE user_id ='$username'";
$sql = mysqli_query($koneksi,$query);

if($sql){
    header("location: viewuser.php");
}else {
    echo "DATA GAGAL DI DELETE <a href='uiEdit3.php'>Kembali</a>";
}

?>