<?php
include'../../koneksi.php';
$tampilkan ="select * from users ";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);

echo "
    <table width=60% align=center >
        <tr>
            <td colspan=4><a href='../indexuser.php'>HOME</td>
        </tr>
        <tr>
            <td colspan=4 align=center><H2><b>DATA USER</H2></b><hr></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>PASSWORD</td>
        </tr>";
while ($hasil= mysqli_fetch_array($query_tampilkan)){
    echo"
    <tr>
        <td>$hasil[user_id]</td>
        <td>$hasil[password]</td>
    </tr>
    ";
}

    echo"</table>
    ;"
?>