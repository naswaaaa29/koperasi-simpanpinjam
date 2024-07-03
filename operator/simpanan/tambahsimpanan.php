<?php
echo "
<form action='prosesinput_simpanan.php' method='post'>
<html>
    <head>
        <style>
        
        h2 {
        background-color: #FAEBD7;
        color: black;
        padding: 20px;
        border-radius: 10px;
        margin: 0 auto;
        width: 900px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #F08080; 
           }
           
           table {
            width: 50%;
            color: #black;
           }
        </style>
    </head>
    <body>
        <form>
            <table width=50% align=center >
                <tr>
                    <td colspan=2><a href='viewsimpan.php'>BATAL</td>
                </tr>
                 <tr>
                    <td colspan=4 align=center>
                    <H2><b>TAMBAH SIMPANAN ANGGOTA</H2></b><hr></td>
                </tr>
                <tr>
                    <td>No Anggota</td>
                    <td><input type='text' name='noanggota'</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type='date' name='tgl'</td>
                </tr>
                <tr>
                    <td>Jenis Simpanan</td>
                    <td><input type='text' name='jenis'</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type='text' name='jml'</td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type='submit' value='simpan'>Simpan</button><button type='submit' value='baru'>Baru</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>";
?>