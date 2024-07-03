<html>
    <link rel="stylesheet" href="styles.css">
<body>
    <style>
        td{
            font-size:1.2em;
            font-weight:bold;
        }

        select{
            font-size:1em;
            
        }

        option{
            font-size:1em;
            font-weight:bold;
        }

        input{
            font-size:1.2em;
        }
    </style>
    <form action='prosesInput3.php' method ='post'>
    <table width='60%' align='center' style="">
    <tr>
        <td colspan='4' align='center'><h2>TAMBAH USER</h2></td>
    </tr>
    <tr>
        <td colspan='4'><a href='viewanggota.php'>BATAL</a><hr></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type='text' name = 'username'></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type='text' name = 'password'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' value='Tambah'></td>
    </tr>
    </form></body>
</html>