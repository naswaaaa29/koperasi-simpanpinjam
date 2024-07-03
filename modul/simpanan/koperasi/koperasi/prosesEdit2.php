<?php
include "koneksi.php";
$noAnggota = $_POST['noanggota'];
$noidentitas = $_POST['noidentitas'];
$nama = $_POST['nama'];
$jenkel = $_POST['jk'];
$jk = "";
if($jenkel == "L"){
    $jk = "L";
} else {
    $jk = "P";
}
$tmptlahir = $_POST['tempatlahir'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];

$query = "UPDATE anggota SET namaanggota = '$nama', jk = '$jk', tempat_lahir = '$tmptlahir', tgl_lahir = '$tgllahir', alamat = '$alamat', hp = '$hp', noidentitas = '$noidentitas' WHERE noanggota = '$noAnggota'";
$sql = mysqli_query($koneksi,$query);

if($sql){
    header("location: viewanggota.php");
}else {
    echo "DATA GAGAL DI UPDATE <a href='uiEdit2.php'>Kembali</a>";
}

?>