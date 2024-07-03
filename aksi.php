<?php
include "koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];
$ubah = md5($pass);
$query = mysqli_query($koneksi, "SELECT * FROM users where user_id='$user' and password='$ubah'");
$result =  mysqli_num_rows($query);
$hasil = mysqli_fetch_array($query);
print_r($hasil);
if ($user= "" && $ubah= ""){
    echo"Username atau Password Harus diisi";
    echo"<a href='login.php'>Kembali</a>";
}
echo $result;

if($result > 0 ){
    session_start();
    $dblevel = $hasil['level'];
    $dbuser = $hasil['username'];
    $dbpass = $hasil['password'];
    $aktif = $hasil['hak_akses'];
    $_SESSION['user'] = $dbuser;
    $_SESSION['level'] = $dblevel;
    if($dblevel=='admin'){
        header("location:index.php");
    }else if($dblevel=='operator'){
        header("location:operator/indexoperator.php");
    }else if($dblevel=='user'){
        header("location:user/indexuser.php");
    }
}
?>