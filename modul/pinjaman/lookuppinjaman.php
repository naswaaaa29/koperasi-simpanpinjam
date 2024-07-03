<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pinjaman</title>
</head>
<body>
<style>
    body {
        background-color: #FF9B9B;
        font-size: 20px;
        font-family: 'Arial', 'Helvetica', sans-serif;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .form-submit, .data-anggota {
        display: block;
        position: relative;
        width: 40%;
        margin: 60px auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #FFF;
        border-radius: 8px;
    }

    .form-submit {
        margin-top: 20px;
    }

    .data-anggota {
        margin-top: 20px;
    }

    .data-table table {
        width: 75%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .data-table th, .data-table td {
        padding: 12px;
        border: 1px solid #ddd;
    }

    .data-table th {
        background-color: #FF6B6B;
        color: #FFF;
    }

    .home {
        display: block;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-top: 20px;
    }
</style>
    <div class="container">
        <h2>DAFTAR SIMPANAN ANGGOTA</h2>
        <a href="../../index.php" class="home">HOME</a><hr width="80%">
            <center>
            <div class="data-table">
                <table border="1">
                    <tr>
                        <th>No</th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>No.Anggota</th>
                        <th>Nama</th>
                        <th>L/P</th>
                        <th>Lama</th>
                        <th>Jumlah</th>
                        <th>Bunga</th>
                        <th>Jumlah Bayar</th>
                        <th>Jumlah Cicilan</th>
                        <th>Sisa</th>
                        <th>Hapus</th>
                    </tr>
                        <?php
                            if(isset($_POST['lookup'])||isset($_POST['simpan'])){
                                if($key!=null){
                                    if(isset($_POST['simpan'])){
                                        $username = $_SESSION['username'];
                                        $tgl = $_POST['tgl'];
                                        $no_anggota = $_POST['key'];
                                        $id_jenis = $_POST['id_jenis'];
                                        $jumlah = $_POST['jumlah'];

                                        //ID _SIMPANAN
                                        $last_id_query = "SELECT MAX(id_simpanan) AS last_id FROM simpanan";
                                        $arr = mysqli_fetch_array(mysqli_query($koneksi, $last_id_query));
                                        $last_id = $arr['last_id'];
                                        $new_id = $last_id + 1;

                                        //PROSES INPUT 
                                            $insertQuery = "INSERT INTO simpanan(`id_simpanan`,`tgl`, `noanggota`, `id_jenis`, `jumlah`, `user_id`) VALUES ('$new_id','$tgl','$no_anggota',$id_jenis,$jumlah,'$username')";
                                            $insert = mysqli_query($koneksi,$insertQuery);
                                        
                                    }
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
                                                <td><a href='hapus_simpanan.php?key=$s[id_simpanan]'>Hapus</a></td>
                                            </tr>";
                                    }
                                }
                            }
                        ?>
                    <tr>
                        <td colspan=3>Total</td>
                        <td> <?php 
                        if(isset($_POST['lookup'])||isset($_POST['simpan'])){
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
</body>
</html>