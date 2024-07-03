<?php
include '../../koneksi.php';
$no_anggota= $_GET['noanggota'];
$tampilkan = "SELECT * from anggota where noanggota ='$no_anggota'";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);
$hasil = mysqli_fetch_array($query_tampilkan);
?>
    <form action='prosesedit_anggota.php' method='post'>
    <table width=60% align=center>
        <tr>
            <td colspan=2><a href='viewanggota.php'>BATAL</a></td>
        </tr>
        <tr>
            <td colspan=2 align=center><H2>TAMBAH ANGGOTA</H2><hr></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><input type='text' name='no' value='<?=$hasil['noanggota']?>'></td>
        </tr>
        <tr>
            <td>No. Identitas</td>
            <td><input type='text' name='identitas' value='<?=$hasil['noidentitas']?>'></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' value='<?=$hasil['namaanggota']?>'></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
            <input type='radio' name='jk' value='L'<?php if($hasil['jk'] =='L'){
                echo 'checked';
            }?>>Laki - Laki
            <input type='radio' name='jk' value='P'<?php if($hasil['jk'] =='P'){
                echo 'checked';
            }?>>Perempuan
            </td>
        </tr>
        <tr>
            <td>Tempat  Lahir</td>
            <td><input type='text' name='tempat' value='<?=$hasil['tempat_lahir']?>'></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type='date' name='tgl' value='<?=$hasil['tgl_lahir']?>'></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type='text' name='alam' value='<?=$hasil['alamat']?>'></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type='number' name='hp' value='<?=$hasil['hp']?>'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='submit' value='Simpan'></td>
        </tr>
        </table></form>
