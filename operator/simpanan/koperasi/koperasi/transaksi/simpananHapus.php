<?php
include "../koneksi.php";
$key = $_GET['key'];
$query = "DELETE FROM simpanan WHERE id_simpanan ='$key'";
$sql = mysqli_query($koneksi,$query);

if($sql){
    header("location: lookupsimpanan.php");
}else {
    echo "DATA GAGAL DI DELETE <a href='uiEdit3.php'>Kembali</a>";
}

?>