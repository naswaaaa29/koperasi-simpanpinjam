<html>
    <link rel="stylesheet" href="styles.css">
<body>
<?php
include "koneksi.php";
$query = "SELECT * FROM jenis_simpan";
$sql = mysqli_query($koneksi,$query);

echo "
<h2 style='text-align: center;'>DATA JENIS SIMPANAN</h2>
<a href='index.php' style=' position: relative; left:300px; font-weight:bold'>HOME</a><hr style='width:60%'>
<table width='60%' align='center' style='font-weight: bold; font-size: 20px; margin-top:40px;' border=1>
<tr align='center'>
<td> ID JENIS</td>
<td> JENIS SIMPAN</td>
<td> JUMLAH</td>
<td> AKSI <br> <a href='tambahSimpanan.php' style='font-weight:bold'>TAMBAH DATA</a></td>
</tr>";
while($hasil= mysqli_fetch_array($sql)){
    echo"
    <tr align='center'>
    <td>$hasil[id_jenis]</td>
    <td>$hasil[jenis_simpanan]</td>
    <td>$hasil[jumlah]</td>
    <td align='center'><a href='uiEdit.php?id_jenis=$hasil[id_jenis]'>EDIT</a> | <a href='hapus1.php?id_jenis=$hasil[id_jenis]'>HAPUS</a></td>
    </tr>
    ";
}
echo"</table>";
?>
</body>
</html>