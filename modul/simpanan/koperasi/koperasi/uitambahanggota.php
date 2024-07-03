<html>
    <link rel="stylesheet" href="styles.css">
<body>
    <style>
        td{
            font-size:1.2em;
            font-weight:bold;
        }

        select{
            font-size:1em;
            
        }

        option{
            font-size:1em;
            font-weight:bold;
        }

        input{
            font-size:1.2em;
        }
    </style>
    <form action='prosesInput2.php' method ='post'>
    <table width='60%' align='center' style="">
    <tr>
        <td colspan='4' align='center'><h2>TAMBAH ANGGOTA</h2></td>
    </tr>
    <tr>
        <td colspan='4'><a href='viewanggota.php'>BATAL</a><hr></td>
    </tr>
    <tr>
        <td>Nomor Anggota</td>
        <td><input type='text' name = 'noanggota'></td>
    </tr>
    <tr>
        <td>No. Identitas</td>
        <td><input type='text' name = 'noidentitas'></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type='text' name = 'nama'></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <select name="jk">
                <option>-- PILIH -- </option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><input type='text' name = 'tempatlahir'></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type='date' name = 'tgllahir'></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type='text' name = 'alamat'></td>
    </tr>
    <tr>
        <td>HP</td>
        <td><input type='text' name = 'hp'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' value='Tambah'></td>
    </tr>
    </form></body>
</html>