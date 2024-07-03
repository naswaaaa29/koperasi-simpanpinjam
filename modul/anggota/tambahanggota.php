<?php
echo "
<form action='prosesinput_anggota.php' method='post'>
<table width=60% align=center>
    <tr>
        <td colspan=2><a href='viewanggota.php'>BATAL</td>
    </tr>
    <tr>
        <td colspan=2 align=center><H2><b>TAMBAH ANGGOTA</H2></b><hr></td>
    </tr>
    <tr>
        <td>Nomor</td>
        <td><input type='text'name='no'></td>
    </tr>
    <tr>
        <td>No. Identitas</td>
        <td><input type='text'name='identitas'></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type='text'name='nama'></td>
    </tr>
    <tr>
            <td>JENIS KELAMIN</td>
            <td><input type='radio' name='jk' value='L'
            <?php if(checked=='L'){
                echo 'Laki - Laki';
            }
            ?>Laki - Laki
            <input type='radio' name='jk' value='P'
            <?php if(checked=='P'){
                echo 'Perempuan';
            }
            ?>Perempuan</td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><input type='text'name='tempat'></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type='date'name='tgl'></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type='text'name='alam'></td>
    </tr>
    <tr>
        <td>HP</td>
        <td><input type='number'name='hp'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' name='submit' value='Simpan'></td>
    </tr>
    <table></form>
    ";
?>