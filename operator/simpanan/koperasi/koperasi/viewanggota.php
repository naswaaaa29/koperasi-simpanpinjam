<html>
    <link rel="stylesheet" href="styles.css">
    <body>
    <style>
        .css-serial{
            counter-reset: serial-number;
        }

        .css-serial td:first-child:before {
            counter-increment: serial-number;
            content: counter(serial-number);
        }
    </style>  
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM anggota";
        $sql = mysqli_query($koneksi,$query);

        echo "
        <h2 style='text-align:center; padding-top:20px;'>DAFTAR ANGGOTA</h2>
        <a href='index.php' style='position: relative; left:300px; font-weight:bold'>HOME</a><hr style='width:60%'>

        <table class='css-serial' width='60%' align='center' style='font-weight: bold; font-size: 20px; margin-top:40px;' border=1>
        <thead>
        <tr align='center'>
        <th>NO</th>
        <th>NOMOR</th>
        <th>NAMA</th>
        <th>L/P</th>
        <th>HP</th>
        <th> AKSI <br> <a href = 'uitambahanggota.php'> TAMBAH DATA</a></th>
        </tr>
        </thead>";
        while($hasil= mysqli_fetch_array($sql)){
        echo"
        <tbody>
        <tr align='center'>
        <td> </td>
        <td>$hasil[noanggota]</td>
        <td>$hasil[namaanggota]</td>
        <td>$hasil[jk]</td>
        <td>$hasil[hp]</td>
        <td align='center'><a href='uiEdit2.php?no_anggota=$hasil[noanggota]'>EDIT</a> | <a href='hapus2.php?no_anggota=$hasil[noanggota]'>HAPUS</a></td>
        </tr>
        </tbody>";
        
    }
    echo"</table>";
        ?>
    </body>
</html>