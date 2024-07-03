<?php
$user=$_POST['username'];
$pass=$_POST['password'];
$dblevel = "admin";
$dbuser = "zhafirahnaswa";
$dbpass = "12345";
$aktif = "1";
if($user==$dbuser && $pass==$dbpass && $aktif==1){
    session_start();
    $_SESSION['user'] = $dbuser;
    $_SESSION['level'] = $dblevel;
    header("location:menu1.php");
}else{
    echo"<scrip type=tex/javascript>
            alert('Username atau password anda salah atau akun anda sudah tidak aktif');
            window.location='index1.php';
            </script>";
}
?>