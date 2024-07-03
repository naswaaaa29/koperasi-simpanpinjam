<?php
include '../../koneksi.php';
$id_jenis = $_GET['id_jenis'];
$hapus = "DELETE from jenis_simpan where id_jenis = '$id_jenis'";
$hapus_query = mysqli_query($koneksi,$hapus);
if($hapus_query){
    header("location: viewsimpanan.php");
}else{
    echo"DATA GAGAL DIHAPUS <a href='tambah.php'>Kembali</a>";
}

?>