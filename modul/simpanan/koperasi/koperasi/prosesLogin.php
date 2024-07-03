<?php
//inisialisasi
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$pass = md5($password);
$query = "SELECT * FROM users WHERE user_id ='$username' and password='$pass'";
$sql = mysqli_query($koneksi,$query);
$baris = mysqli_num_rows($sql);
$arrSql = mysqli_fetch_array($sql);

//proses
if($username == "" && $password == ""){
    echo "Username dan Password Harus Diisi!<br>
    <a href = uiLogin.html>Kembali..</a>";
} else if($baris > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "aktif";
    header("location:index.php");
} else {
    echo "Username atau Password Salah!<br>
    <a href = uiLogin.html>Kembali..</a>";
}
?>