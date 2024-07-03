<?php
include "koneksi.php";
$idJenis = $_GET['id_jenis'];
$query = "DELETE FROM jenis_simpan WHERE id_jenis ='$idJenis'";
$sql = mysqli_query($koneksi,$query);

if($sql){
    header("location: viewsimpanan.php");
}else {
    echo "DATA GAGAL DI DELETE <a href='uiEdit.php'>Kembali</a>";
}

?>