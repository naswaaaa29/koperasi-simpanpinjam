<?php
include '../../koneksi.php';
$user_id = $_GET['user_id'];
$tampilkan = "SELECT * from users where user_id = '$user_id'";
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
            <td>USER ID</td>
            <td><input type='text' name='user_id' value='$hasil[user_id]'></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type='text' name='password' value='$hasil[password]'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='submit' value='Simpan'></td>
        </tr>
        </table></form>";

?>