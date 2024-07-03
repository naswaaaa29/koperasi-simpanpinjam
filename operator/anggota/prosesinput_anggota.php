<?php
include '../../koneksi.php';
$no = $_POST['no'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$hp =$_POST['hp'];
$identitas =$_POST['identitas'];
$tempat_lahir = $_POST['tempat'];
$tgl = $_POST['tgl'];
$alam =$_POST['alam'];
$insert = "insert into anggota(noanggota, namaanggota, jk, hp, noidentitas, tempat_lahir, tgl_lahir, alamat)values('$no','$nama','$jk','$hp','$identitas','$tempat_lahir','$tgl','$alam');";

$insert_query = mysqli_query($koneksi,$insert);

if($insert_query){
    header("location:viewanggota.php");
}else{
    echo"DATA GAGAL DISIMPAN <a href='tambahanggota.php'>Kembali</a>";
}
?>