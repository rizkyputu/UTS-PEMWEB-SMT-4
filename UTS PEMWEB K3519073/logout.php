<?php
//session start
session_start();
//menghapus semua session
session_destroy();
//menghapus cookie
setcookie("nama", "", time()+3*30*24*3600,"/");
//kembali ke halaman login
header("Location: index.php");
?>