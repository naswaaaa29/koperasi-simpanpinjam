<?php
include'../../koneksi.php';
$tampilkan ="select * from simpanan";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);

echo "
<html>
    <head>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F08080; 
           }
           
           table {
         
            width: 80%;
            color: #black;
            margin-right: 60px;
           }
        
           th {
            background-color: #dddddd;
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            color: #black;
           }
        </style>
    </head>
    <body>
    <form>
    
    </form>
        <table width=60% align=center >
            <tr>
                <td colspan=4><a href='../../index.php'>HOME</td>
            </tr>
            <tr>
                <td colspan=4 align=center><H2><b>DAFTAR SIMPANAN ANGGOTA</H2></b><hr></td>
            </tr>
            <tr align=center>
                <th>No Anggota</th>
                <th>Tanggal</th>
                <th>Jenis Simpanan</th>
                <th>Jumlah</th>
                <td>AKSI<br><a href ='tambahsimpanan.php'>TAMBAH DATA</a></td>
            </tr>";
        while ($hasil= mysqli_fetch_array($query_tampilkan)){
        echo"
        <tr>
            <td>$hasil[noanggota]</td>
            <td>$hasil[tgl]</td>
            <td>$hasil[jenissimpanan]</td>
            <td>$hasil[jumlah]</td>
            td align='center'><a href='ui_edit_simpan.php?noanggota=$hasil[noanggota]
            '>EDIT </a>| <a href='hapus_anggota.php?noanggota=$hasil[noanggota]'>HAPUS</a></td>

        </tr>
    </body>
</html>    
    ";
}

    echo"</table>
    ;"
?>