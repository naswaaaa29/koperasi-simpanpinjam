<?php
include'../../koneksi.php';
$tampilkan ="select * from jenis_simpan";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);

echo "
    <table width=60% align=center >
        <tr>
            <td colspan=4><a href='../../index.php'>HOME</td>
        </tr>
        <tr>
            <td colspan=4 align=center><H2><b>DATA JENIS SIMPANAN</H2></b><hr></td>
        </tr>
        <tr align=center>
            <td>ID JENIS</td>
            <td>JENIS SIMPANAN</td>
            <td>JUMLAH</td>
            <td>AKSI<br><a href ='tambah.php'>TAMBAH DATA</a></td>
        </tr>";
while ($hasil= mysqli_fetch_array($query_tampilkan)){
    echo"
    <tr>
        <td>$hasil[id_jenis]</td>
        <td>$hasil[jenis_simpanan]</td>
        <td>$hasil[jumlah]</td>
        <td align='center'><a href='ui_edit.php?id_jenis=$hasil[id_jenis]
            '>EDIT </a>| <a href='hapus.php?id_jenis=$hasil[id_jenis]'>HAPUS</a></td>

    </tr>
    ";
}

    echo"</table>
    ;"
?>