<?php
session_start();
if (isset($_POST['submit'])){
    setcookie("nama", $_POST['nama'], time()+3*30*24*3600,"/");
    
    $_SESSION['nyawa'] = 5;
    $_SESSION['skor'] = 0;
    $_SESSION['angkaA'] = rand(0,20);
    $_SESSION['angkaB'] = rand(0,20);
    header("Location: index.php");
}

?>