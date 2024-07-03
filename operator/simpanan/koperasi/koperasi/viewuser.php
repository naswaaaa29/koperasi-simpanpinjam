<html>
    <link rel="stylesheet" href="styles.css">
    <body>
    <style>
        .css-serial{
            counter-reset: serial-number;
        }

        .css-serial td:first-child:before {
            counter-increment: serial-number;
            content: counter(serial-number);
        }
    </style>  
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM users";
        $sql = mysqli_query($koneksi,$query);

        echo "
        <h2 style='text-align:center; padding-top:20px;'>DAFTAR USER</h2>
        <a href='index.php' style='position: relative; left:300px; font-weight:bold'>HOME</a><hr style='width:60%'>

        <table class='css-serial' width='60%' align='center' style='font-weight: bold; font-size: 20px; margin-top:40px;' border=1>
        <thead>
        <tr align='center'>
        <th>NO</th>
        <th>User ID</th>
        <th>Password</th>
        <th> AKSI <br> <a href = 'uitambahuser.php'>TAMBAH DATA</a></th>
        </tr>
        </thead>";
        while($hasil= mysqli_fetch_array($sql)){
        echo"
        <tbody>
        <tr align='center'>
        <td> </td>
        <td>$hasil[user_id]</td>
        <td>$hasil[password]</td>
        <td align='center'><a href='uiEdit3.php?user_id=$hasil[user_id]'>EDIT</a> | <a href='hapus3.php?user_id=$hasil[user_id]'>HAPUS</a></td>
        </tr>
        </tbody>";
        
    }
    echo"</table>";
        ?>
    </body>
</html>