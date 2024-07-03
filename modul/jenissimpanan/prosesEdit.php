<?php
include '../../koneksi.php';
$id_jenis       = $_POST['idJenis'];
$jenis_simpanan = $_POST['jenisSimpanan'];
$jumlah         = $_POST['jumlah'];
$edit = "UPDATE jenis_simpan SET jenis_simpanan ='$jenis_simpanan', jumlah = '$jumlah'
    where id_jenis = '$id_jenis'";

$edit_query = mysqli_query($koneksi,$edit);

if($edit_query){
    header("location: viewsimpanan.php");
}else{
    echo"DATA GAGAL DISIMPAN <a href='tambah.php'>Kembali</a>";
}

?>