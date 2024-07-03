<?php
include "koneksi.php";
$idJenis = $_POST['idJenis'];
$jenis_simpanan = $_POST['jenisSimpanan'];
$jumlah_simpanan = $_POST['jumlahSimpanan'];

$query = "UPDATE jenis_simpan SET jenis_simpanan='$jenis_simpanan',jumlah='$jumlah_simpanan' WHERE id_jenis = '$idJenis'";
$sql = mysqli_query($koneksi,$query);

if($sql){
    header("location: viewsimpanan.php");
}else {
    echo "DATA GAGAL DI UPDATE <a href='uiEdit.php'>Kembali</a>";
}

?>