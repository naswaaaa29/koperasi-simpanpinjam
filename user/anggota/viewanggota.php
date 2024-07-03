<?php
include'../../koneksi.php';
$tampilkan ="select * from anggota";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);

echo "
    <table width=60% align=center >
        <tr>
            <td colspan=4><a href='../indexuser.php'>HOME</td>
        </tr>
        <tr>
            <td colspan=4 align=center><H2><b>DATA ANGGOTA 2</H2></b><hr></td>
        </tr>
        <tr>
            <td>NO</td>
            <td>NAMA</td>
            <td>L/P</td>
            <td>HP</td>
        </tr>";
while ($hasil= mysqli_fetch_array($query_tampilkan)){
    echo"
    <tr>
        <td>$hasil[noanggota]</td>
        <td>$hasil[namaanggota]</td>
        <td>$hasil[jk]</td>
        <td>$hasil[hp]</td>
    </tr>
    ";
}

    echo"</table>
    ;"
?>