<?php
include '../../koneksi.php';
$id_jenis = $_POST['idJenis'];
$jenis_simpanan = $_POST['jenisSimpanan'];
$jumlah = $_POST['jumlah'];
$insert = "insert into jenis_simpan(id_jenis, jenis_simpanan, jumlah)values('$id_jenis','$jenis_simpanan','$jumlah');";

$insert_query = mysqli_query($koneksi,$insert);

if($insert_query){
    header("location:viewsimpanan.php");
}else{
    echo"DATA GAGAL DISIMPAN <a href='tambah.php'>Kembali</a>";
}
?>