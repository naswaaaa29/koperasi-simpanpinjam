<html>
    <link rel="stylesheet" href="styles.css">
<body>
    <style>
        td{
            font-size:1.2em;
            font-weight:bold;
        }

        input{
            font-size:1.2em;
        }
    </style>
    <form action='prosesInput1.php' method ='post'>
    <table width='60%' align='center'>
    <tr>
        <td colspan='4' align='center'><h2>TAMBAH JENIS SIMPANAN</h2></td>
    </tr>
    <tr>
        <td colspan='4'><a href='viewsimpanan.php'>BATAL</a><hr></td>
    </tr>
    <tr>
        <td>ID JENIS</td>
        <td><input type='text' name = 'idJenis'></td>
    </tr>
    <tr>
        <td>JENIS SIMPANAN</td>
        <td><input type='text' name = 'jenisSimpanan'></td>
    </tr>
    <tr>
        <td>JUMLAH</td>
        <td><input type='text' name = 'jumlahSimpanan'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' value='Tambah'></td>
    </tr>
    </form></body>
</html>