<?php
include'../../koneksi.php';
$tampilkan ="select * from jenis_simpan";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);

echo "
    <table width=60% align=center >
        <tr>
            <td colspan=4><a href='../indexuser.php'>HOME</td>
        </tr>
        <tr>
            <td colspan=4 align=center><H2><b>DATA JENIS SIMPANAN</H2></b><hr></td>
        </tr>
        <tr>
            <td>ID JENIS</td>
            <td>JENIS SIMPANAN</td>
            <td>JUMLAH</td>
        </tr>";
while ($hasil= mysqli_fetch_array($query_tampilkan)){
    echo"
    <tr>
        <td>$hasil[id_jenis]</td>
        <td>$hasil[jenis_simpanan]</td>
        <td>$hasil[jumlah]</td>
    </tr>
    ";
}

    echo"</table>
    ;"
?>