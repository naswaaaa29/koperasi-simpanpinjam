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
$userid = $_GET['user_id'];
$query = "SELECT * FROM users WHERE user_id = '$userid'";
$sql = mysqli_query($koneksi,$query);
$hasil = mysqli_fetch_array($sql);
?>
    <form action="prosesEdit3.php" method ='post'>
    <table width='60%' align='center'>
    <tr>
        <td colspan='4' align='center'><h2>EDIT USER</h2></td>
    </tr>
    <tr>
        <td colspan='4'><a href='viewuser.php'>BATAL</a><hr></td>
    </tr>
    <tr>
    <td>Username</td>
    <td><input type='text' name ='username' value='<?=$hasil['user_id']?>'></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type='text' name ='password' value='<?=$hasil['password']?>'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' value='Edit'></td>
    </tr>
    </form>
    </table>
</body>
</html>