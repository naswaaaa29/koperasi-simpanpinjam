<?php
include "koneksi.php";
$idJenis = $_POST['idJenis'];
$jenis_simpanan = $_POST['jenisSimpanan'];
$jumlah_simpanan = $_POST['jumlahSimpanan'];

$insert = "INSERT INTO jenis_simpan VALUES ('$idJenis','$jenis_simpanan','$jumlah_simpanan')";
$sql = mysqli_query($koneksi,$insert);

if($sql){
    header("location:viewsimpanan.php");
} else {
    echo "DATA GAGAL DISIMPAN <a href='tambahSimpanan'>Kembali</a>";
}

?>