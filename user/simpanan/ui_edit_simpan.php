<?php
include '../../koneksi.php';
$noanggota = $_GET['noanggota'];
$tampilkan = "SELECT * from simpanan where noanggota = '$noanggota'";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);
$hasil = mysqli_fetch_array($query_tampilkan);
    echo"
    <form action='prosesedit_users.php' method='post'>
    <table width=60% align=center>
        <tr>
            <td colspan=2><a href='viewusers.php'>BATAL</a></td>
        </tr>
        <tr>
            <td colspan=2 align=center><H2>TAMBAH USER</H2><hr></td>
        </tr>
        <tr>
            <td>No Anggota</td>
            <td><input type='text' name='noanggota' value='$hasil[noanggota]'></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input type='date' name='tgl' value='$hasil[tgl]'></td>
        </tr>
        <tr>
            <td>Jenis Simpanan</td>
            <td><input type='text' name='jenis' value='$hasil[jenissimpanan]'></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type='text' name='tgl' value='$hasil[jumlah]'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='submit' value='Simpan'></td>
        </tr>
        </table></form>";

?>