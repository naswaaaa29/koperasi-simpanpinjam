<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$ubah = md5($password);
$login = mysqli_query ($koneksi, "SELECT * FROM users where user_id='$username' and password='$ubah'");
$cek = mysqli_num_rows($login);
$hasil = mysqli_fetch_array($login);
if ($username= "" && $ubah= ""){
    echo"Username atau Password Harus diisi";
    echo"<a href='login.php'>Kembali</a>";
}else if ($cek > 0){
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['level']="aktif";
    header("location: index.php");
}else{
    echo"Login Gagal";
    echo "<br><a href='login.php'>ulangi</a>";
}
?>