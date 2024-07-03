<html>
<body>
    <style>
        body{
            background-color: cyan;
            font-family: arial; 
        }
        td{
            font-size:1.2em;
            font-weight:bold;
        }

        select{
            font-size:1.2em;
        }

        option{
            font-size:1.2em;
        }

        input{
            font-size:1.2em;
        }
    </style>
<?php
include "koneksi.php";
$noanggota = $_GET['no_anggota'];
$query = "SELECT * FROM anggota WHERE noanggota = '$noanggota'";
$sql = mysqli_query($koneksi,$query);
$hasil = mysqli_fetch_array($sql);
?>
    <form action='prosesEdit2.php' method ='post'>
    <table width='60%' align='center'>
    <tr>
        <td colspan='4' align='center'><h2>EDIT ANGGOTA</h2></td>
    </tr>
    <tr>
        <td colspan='4'><a href='viewanggota.php'>BATAL</a><hr></td>
    </tr>
    <tr>
    <td>Nomor Anggota</td>
    <td><input type='text' name = 'noanggota' value='<?=$hasil['noanggota']?>'></td>
    </tr>
    <tr>
        <td>No. Identitas</td>
        <td><input type='text' name = 'noidentitas' value='<?=$hasil['noidentitas']?>'></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type='text' name = 'nama' value='<?=$hasil['namaanggota']?>'></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
        <select name="jk">
        <option <?php if ($hasil['jk'] == "L") { echo 'selected'; }?> value='L'>Laki-Laki</option>
        <option <?php if ($hasil['jk'] == "P") { echo 'selected'; }?> value='P'>Perempuan</option>
        <!-- <option <?php if ($pilihan == 2) { echo 'selected'; }?> value='Privilege 2'>Privilege 2"</option> -->
        </td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><input type='text' name = 'tempatlahir' value='<?=$hasil['tempat_lahir']?>'></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type='date' name = 'tgllahir'value='<?=$hasil['tgl_lahir']?>'></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type='text' name = 'alamat' value='<?=$hasil['alamat']?>'></td>
    </tr>
    <tr>
        <td>HP</td>
        <td><input type='text' name = 'hp' value='<?=$hasil['hp']?>'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' value='Edit'></td>
    </tr>
        </form>
</body>
</html>