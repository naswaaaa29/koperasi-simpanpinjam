<?php
session_start();
if($_SESSION['user']==""){
    header("location:index1.php")
}
echo" Selamat datang <b> " . strtoupper($_SESSION['user']) . "
    </b> Anda login sebagai <b> " . strtoupper($_SESSION['level']) . "</b>";
if($_SESSION['level']=="admin"){
    echo"</b><br><a href=#>Link 1</a> |
                    <a href=#>Link 2</a> |
                    <a href=#>Link 3</a> |
                    <a href=#>Link 4</a> |
                    <a href=#>Link 5</a>"; 
}else if($_SESSION['level']=="operator"){
    echo"</b><br><a href=#>Link 1</a> |
                    <a href=#>Link 3</a> |
                    <a href=#>Link 5</a>"; 
}else if($_SESSION['level']=="user"){
    echo"</b><br><a href=#>Link 2</a> |
                    <a href=#>Link 4</a>"; 
}
echo"<br><a href='logout1.php'>LOGOUT</a>";
?>