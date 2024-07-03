<?php
session_start();
if(!isset($_SESSION['level'])){
    header("location:login.php");
    echo "$_SESSION[username]";
}
?>
<html>
  <head>
    <style>
      h1 {
        background-color: #FAEBD7;
        color: black;
        padding: 20px;
        border-radius: 10px;
        margin: 0 auto;
        width: 900px;
      }
      body{
        background-color: #F08080; 
        color: black;
      }
      body a{
        color: black;
        text-decoration: none;
      }
      table{
        background-color: #FFB6C1;
        width: 60%;
        margin: 0 auto;
        padding: 20px;
        }
      .dropbtn {
       background-color:transparent;
       border:none;
        color: black;
      }
      .dropdown {
        width: 72px;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff; 
        width: fit-content;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.1);
        z-index: 1;
        border-radius: 2px;
      }
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        transition: 0.03s;
      }
      .dropdown-content a:hover {
        background-color: #ea1845;
        color: #fff;
      }
      .dropdown:hover .dropdown-content{
        display: block;
      }
      .dropdown:hover .dropbtn{
        background-color: #ea1845;
      }
    </style>
  </head>
  <body>
    <h1 align="center">APLIKASI SISTEM INFORMASI KOPERASI SEDERHANA</h1>
    <hr width="100%">
    <table width="100%" align="center">
      <tr>
        <td style="font-weight: bold"><a href="indexoperator.php">HOME</a></td>
        <td></td>
        <td></td>
        <td style="font-weight: bold" align="right">HALAMAN UTAMA</td>
      </tr>
      <tr>
      <br></br>
      </tr>
      <tr align="center">
        <td>
          <div class="dropdown">
            <button class="dropbtn">Master</button>
            <div class="dropdown-content">
              <a href="anggota/viewanggota.php">Anggota</a>
              <a href="jenissimpanan/viewsimpanan.php">Jenis Pinjaman</a>
              <a href="users/viewusers.php">User</a>
            </div>
          </div>
        </td>   
        <td>
          <div class="dropdown">
            <button class="dropbtn">Transaksi</button>
            <div class="dropdown-content">
              <a href="modul/pinjaman/lookuppinjaman.php">Pinjaman</a>
              <a href="#">Bayar Pinjaman</a>
              <a href="simpanan/viewsimpan.php">Simpanan</a>
              <a href="#">Pengembalian Simpanan</a>
            </div>
          </div>
        </td>
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
        <td style="font-weight: bold">
            <a href="login.php">LOGOUT</a>
        </td>
      </tr>
      <tr>
        <td colspan="4" align="center" style="font-weight: normal">
          <hr>
          copyright@2023
        </td>
      </tr>
    </table>
</body>
</html>