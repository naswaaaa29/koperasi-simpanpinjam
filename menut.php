<?php
session_start();
echo"Selamat datang<b>". $_SESSION['user'] . "</b> Anda login sebagai <b>" . $_SESSION['level']."</b>";
if($_SESSION['level']=="admin"){
    echo"<br><a href='operator/anggota/viewanggota.php'>Anggota</a> |
    <a href='#'>operator/anggota/viewsimpanan.php>Simpanan</a> |
    <a href='#'>LINK 3</a> |";
}else if($_SESSION['level']=="operator"){
    echo"<br><a href='#'>LINK 1</a> |
    <a href='#'>LINK 3</a> |
    <a href='#'>LINK 5</a> |";
}else if($_SESSION['level']=="user"){
    echo"<br><a href='#'>LINK 2</a> |
    <a href='#'>LINK 4</a> |";
}
echo"<br><a href='logout1.php'>LOGOUT</a>
        <a href='tambah1.php'>TAMBAH</a>
        <a href='logout1.php'>EDIT</a>
        <a href='logout1.php'>DELETE</a>";
?>