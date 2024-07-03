<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Simpanan</title>
</head>
<body>
<style>
    body{
        background-color: cyan;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }

    h2{
        text-align:center;
    }

    .form-submit{
        display: block;
        position: relative;
        width:38%;
        height:150px;
        left:10%;
        top: 60px;
    }

    .data-anggota{
        display: block;
        position: relative;
        background-color:white;
        width:38%;
        height:150px;
        left:50%;
        top:-100px;
        padding-top: 30px;
        padding-left:30px;
        box-shadow:3px 3px 3px black;
    }

    .data-table table{
        position:relative;
        top:-50px;
        width: 80%;
        text-align:center;
    }
    
    .home{
        position: relative;
        left:150px;
        font-weight:bold;
    }

</style>
    <div class="container">
        <h2>DAFTAR SIMPANAN ANGGOTA</h2>
        <a href="../index.php" class="home">HOME</a><hr width="80%">
            <div class="form-submit">
            <form action="" method="post">
                    <table>
                        <tr>
                            <td>Nomor Anggota</td>
                            <td>:</td>
                            <td><input type="text" name="key" <?php
                                session_start();
                                if(isset($_POST['lookup'])){
                                $key = $_POST['key'];
                                $_SESSION['dataAnggota'] = $key;
                                echo"value=$key";}?>>
                                </td>
                            <td><input type="submit" name="lookup" value="lookup" ></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><input type="date" name="tgl"></td>
                        </tr>
                        <tr>
                            <td>Jenis Simpanan</td>
                            <td>:</td>
                            <td><select name="id_jenis" id="">
                                <option value="">-Pilih-</option>
                                <?php
                                include '../koneksi.php';
                                $viewQuery = "SELECT id_jenis,jenis_simpanan FROM jenis_simpan";
                                $view = mysqli_query($koneksi, $viewQuery);
                                while($s = mysqli_fetch_array($view)){
                                    echo "<option value='$s[id_jenis]'>$s[id_jenis] - $s[jenis_simpanan]</option>";
                                }?>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td><input type="text" name="jumlah"></td>
                        </tr>
                    </table>
                    <input type="submit" value="Simpan" name="simpan">
            </div>
            <div class="data-anggota">
                <?php
                if(isset($_POST['lookup'])){
                    if($key == null){
                        echo"PLEASE FILL NO ANGGOTA ";
                    }else{
                        $viewQuery = "SELECT * FROM anggota WHERE noanggota='$key'";
                        $view = mysqli_query($koneksi, $viewQuery);
                        $s = mysqli_fetch_array($view);
                        if($s==0){
                            echo"ANGGOTA NOT FOUND";
                        }else{
                            echo "Nomor Anggota       : $s[noanggota]
                            <br>Nama                  : $s[namaanggota]
                            <br>Jenis Kelamin        : ";if($s['jk']=='L'){echo"Laki-Laki";}else{echo"Perempuan";}echo"
                            <br>Tempat, Tanggal Lahir : $s[tempat_lahir], $s[tgl_lahir]
                            <br>Alamat                : $s[alamat]";
                        }
                    }
                }
                ?>
            </div>
            <center>
            <div class="data-table">
                <table border="1">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Simpanan</th>
                        <th>jumlah</th>
                        <th>Hapus</th>
                    </tr>
                        <?php
                            if(isset($_POST['lookup'])){
                                if($key!=null){
                                    $viewQuery = "SELECT * FROM simpanan WHERE noanggota = '$key'";
                                    $view = mysqli_query($koneksi, $viewQuery);
                                    $ind = 0;
                                    while($s = mysqli_fetch_array($view)){
                                        $ind++;
                                        $nameSimpananQuery = "SELECT jenis_simpanan FROM jenis_simpan WHERE id_jenis = $s[id_jenis]";
                                        $nameSimpanan = mysqli_query($koneksi, $nameSimpananQuery);
                                        $t = mysqli_fetch_array($nameSimpanan);
                                        echo"<tr>
                                                <td>$ind</td>
                                                <td>$s[tgl]</td>
                                                <td>$t[0]</td>
                                                <td>$s[jumlah]</td>
                                                <td><a href='simpananHapus.php?key=$s[id_simpanan]'>Hapus</a></td>
                                            </tr>";
                                    }
                                }
                            }
                        ?>
                    <tr>
                        <td colspan=3>Total</td>
                        <td> <?php 
                        if(isset($_POST['lookup'])){
                            $totalQuery = "SELECT sum(jumlah) AS total FROM simpanan WHERE noanggota='$key'";
                            $total = mysqli_fetch_array(mysqli_query($koneksi, $totalQuery));
                            if($total==0){
                                echo"0";
                            }else{
                                echo$total[0];
                            }
                        }else{
                            echo "0";
                        }
                        ?></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            </center>
        </form>
    </div>
</div>
<?php
    if(isset($_POST['simpan'])){
        $username = $_SESSION['username'];
        $tgl = $_POST['tgl'];
        $no_anggota = $_POST['key'];
        $id_jenis = $_POST['id_jenis'];
        $jumlah = $_POST['jumlah'];

        //ID_Simpanan
        $last_id_query = "SELECT MAX(id_simpanan) AS last_id FROM simpanan";
        $arr = mysqli_fetch_array(mysqli_query($koneksi,$last_id_query));
        $last_id = $arr['last_id'];
        $new_id = $last_id + 1;

        //proses input
        $insertQuery = "INSERT INTO simpanan(`id_simpanan`,`tgl`, `noanggota`, `id_jenis`, `jumlah`, `user_id`) VALUES ('$new_id','$tgl','$no_anggota',$id_jenis,$jumlah,'$username')";
        $insert = mysqli_query($koneksi,$insertQuery);
    }
?>
</body>
</html>