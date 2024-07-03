<htmL>
    <head>
        <title>MainForm Koperasi</title>
    <style>
body{
    font-family: arial;
    font-size: 15px;
}

.dropbtn {
  background-color: cyan;
  color: black;
  padding: 16px;
  font-size: 25px;
  border: none;
}

td{
    background-color: cyan;
  color: black;
  padding: 16px;
  font-size: 25px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  font-size: 20px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: grey;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: cyan;
}
    </style>
</head>
<body style="background-color: cyan">
        <h1 align="center">Sistem Aplikasi Informasi Koperasi Sederhana</h1>
        <hr color="black" width="80%" style="border: 2px solid black">
        <?php
            session_start();
            if(!isset($_SESSION['status'])){
                header("location: uiLogin.html");
                echo "$_SESSION[username]";
            }
        ?>
        <table width=80% align="center" style="margin-top:20px; text-align:center;">
            <tr>
                <td><a href="index.php">HOME</a></td>
                <!-- 1 -->
                <td>
                <div class="dropdown">
                    <button class="dropbtn">Master</button>
                    <div class="dropdown-content">
                        <a href="viewanggota.php">Anggota</a>
                        <a href="viewsimpanan.php">Jenis Pinjaman</a>
                        <a href="viewuser.php">User</a>
                    </div>
                </div>
                </td>
                <!-- 2 -->
                <td>
                <div class="dropdown">
                    <button class="dropbtn">Transaksi</button>
                    <div class="dropdown-content">
                        <a href="#">Pinjaman</a>
                        <a href="#">Bayar Pinjaman</a>
                        <a href="transaksi/lookupsimpanan.php">Simpanan</a>
                        <a href="#">Pengembalian Simpanan</a>
                    </div>
                </div>
                </td>
                <!-- 3 -->
                <td>
                <div class="dropdown">
                    <button class="dropbtn">Laporan</button>
                    <div class="dropdown-content">
                        <a href="#">Pinjaman</a>
                        <a href="#">Anggota</a>
                        <a href="#">Simpanan</a>
                    </div>
                </div>
                </td>
                <td align="right">Halaman Utama</td>
            </tr>
        </table>
        <div class="copyright" align="center" style="position: relative; top:560px">
                    <hr width="99%" style="border: 1px solid black">
                    copyright@2023
        </div>
    </body>
</htmL>