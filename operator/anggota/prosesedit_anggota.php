<?php
include '../../koneksi.php';
$nomor       = $_POST['no'];
$nama        = $_POST['nama'];
$jk          = $_POST['jk'];
$hp          = $_POST['hp'];
$identitas   =$_POST['identitas'];
$tempat_lahir = $_POST['tempat'];
$tgl = $_POST['tgl'];
$alam =$_POST['alam'];
$edit = "UPDATE anggota SET namaanggota ='$nama', jk = '$jk', hp = '$hp', noidentitas = '$identitas', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl', alamat = '$alam'
    WHERE noanggota = '$nomor'";

$edit_query = mysqli_query($koneksi,$edit);

if($edit_query){
    header("location: viewanggota.php");
}else{
    echo"DATA GAGAL DISIMPAN <a href='tambahanggota.php'>Kembali</a>";
}

?>