<?php
include '../../koneksi.php';
$nomor = $_GET['noanggota'];
$hapus = "DELETE from anggota where noanggota = '$nomor'";
$hapus_query = mysqli_query($koneksi,$hapus);
if($hapus_query){
    header("location: viewanggota.php");
}else{
    echo"DATA GAGAL DIHAPUS <a href='tambahanggota.php'>Kembali</a>";
}

?>