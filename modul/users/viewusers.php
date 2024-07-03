<?php
include'../../koneksi.php';
$tampilkan ="select * from users ";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);

echo "
    <table width=60% align=center >
        <tr>
            <td colspan=4><a href='../../index.php'>HOME</td>
        </tr>
        <tr>
            <td colspan=4 align=center><H2><b>DATA USER</H2></b><hr></td>
        </tr>
        <tr align=center>
            <td>NAMA</td>
            <td>PASSWORD</td>
            <td>AKSI<br><a href ='tambahuser.php'>TAMBAH DATA</a></td>
        </tr>";
while ($hasil= mysqli_fetch_array($query_tampilkan)){
    echo"
    <tr>
        <td>$hasil[user_id]</td>
        <td>$hasil[password]</td>
        <td align='center'><a href='uiedit_users.php?user_id=$hasil[user_id]
            '>EDIT </a>| <a href='hapus_users.php?user_id=$hasil[user_id]'>HAPUS</a></td>

    </tr>
    ";
}

    echo"</table>
    ;"
?>