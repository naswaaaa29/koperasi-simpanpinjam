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

$insert = "INSERT INTO anggota VALUES ('$noAnggota','$nama','$jk','$tmptlahir','$tgllahir','$alamat','$hp','$noidentitas','NULL')";
$sql = mysqli_query($koneksi,$insert);

if($sql){
    header("location:viewanggota.php");
} else {
    echo "DATA GAGAL DISIMPAN <a href='uitambahanggota.php'>Kembali</a>";
}

?>