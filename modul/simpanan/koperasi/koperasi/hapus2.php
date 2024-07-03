<?php
include "koneksi.php";
$noAnggota = $_GET['no_anggota'];
$query = "DELETE FROM anggota WHERE noanggota ='$noAnggota'";
$sql = mysqli_query($koneksi,$query);

if($sql){
    header("location: viewanggota.php");
}else {
    echo "DATA GAGAL DI DELETE <a href='uiEdit2.php'>Kembali</a>";
}

?>