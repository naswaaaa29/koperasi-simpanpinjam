<?php
echo "
<form action='prosesinput_user.php' method='post'>
<table width=60% align=center>
    <tr>
        <td colspan=2><a href='viewusers.php'>BATAL</td>
    </tr>
    <tr>
        <td colspan=2 align=center><H2><b>TAMBAH USER</H2></b><hr></td>
    </tr>
    <tr>
        <td>User ID</td>
        <td><input type='text'name='user_id'></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type='password'name='password'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' name='submit' value='Simpan'></td>
    </tr>
    <table></form>
    ";
?>