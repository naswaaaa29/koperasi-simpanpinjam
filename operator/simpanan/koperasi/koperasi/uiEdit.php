<html>
<body>
<?php
include "koneksi.php";
$idJenis = $_GET['id_jenis'];
$query = "SELECT * FROM jenis_simpan WHERE id_jenis = $idJenis";
$sql = mysqli_query($koneksi,$query);
$hasil = mysqli_fetch_array($sql);
    echo "<link rel='stylesheet' href='style.css'>
    <form action='prosesEdit1.php' method ='post'>
    <table width='60%' align='center'>
    <tr>
        <td colspan='4' align='center'><h2>EDIT JENIS SIMPANAN</h2></td>
    </tr>
    <tr>
        <td colspan='4'><a href='viewsimpanan.php'>BATAL</a><hr></td>
    </tr>
    <tr>
        <td>ID JENIS</td>
        <td><input type='text' name = 'idJenis' value='$hasil[id_jenis]'></td>
    </tr>
    <tr>
        <td>JENIS SIMPANAN</td>
        <td><input type='text' name = 'jenisSimpanan'  value='$hasil[jenis_simpanan]'></td>
    </tr>
    <tr>
        <td>JUMLAH</td>
        <td><input type='text' name = 'jumlahSimpanan'  value='$hasil[jumlah]'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' value='Tambah'></td>
    </tr>
    </form>";
?>
</body>
</html>