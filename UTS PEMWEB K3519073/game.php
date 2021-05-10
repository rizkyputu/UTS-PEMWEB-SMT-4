<?php
include('check.php');
include('connect.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>UTS - Pemweb</title>
  </head>
  <body style='background:black;color:red;text-align:center'>
  <nav class="navbar navbar-light bg-danger">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="home.svg" alt="" width="30" height="24">
    </a>
  </div>
</nav>
    <div class="container-fluid" style='width:50%;position:absolute;top:10%;left:25%'>
        <?php
        session_start();
        $hasil = $_SESSION['angkaA'] + $_SESSION['angkaB'];
        if($_SESSION['nyawa'] > 0){
            if(!isset($_POST['submit'])){
                echo "<p><h1>Hallo {$_COOKIE['nama']} semoga beruntung ^^</h1>";
                echo "Skor : {$_SESSION['skor']} || Nyawa : {$_SESSION['nyawa']}</p><br>";

                echo "<p><h3>Berapakah {$_SESSION['angkaA']} + {$_SESSION['angkaB']}";
                echo "<form method='post'>";
                echo "<br><input type='number' class='form-control-md' name='jawaban'>";
                echo "<br><button type='submit' name='submit' class='btn btn-outline-danger btn-sm'>Jawab</button></p>";
            } else {
                $jawab = $_POST['jawaban'];
                if ($jawab == $hasil){
                    echo "<p><h1>Selamat {$_COOKIE['nama']} jawaban anda benar</h1></p>";
                    echo "<p style='color:white'>Anda mendapatkan 10 tambahan skor</p>";
                    $_SESSION['skor'] += 10;
                    echo "Skor : {$_SESSION['skor']} || Nyawa : {$_SESSION['nyawa']}</p><br>";
                    echo "<a href='game.php' class='btn btn-danger btn-sm'>Soal Selanjutnya</a>";
                } else {
                    echo "<p><h1>Sayang sekali {$_COOKIE['nama']} jawaban anda salah</h1></p>";
                    echo "<p style='color:white'>Anda mendapatkan pengurangan 2 skor<br>";
                    echo "Anda mendapatkan pengurangan 1 nyawa</p>";
                    $_SESSION['skor'] -= 2;
                    $_SESSION['nyawa'] -= 1;
                    echo "Skor : {$_SESSION['skor']} || Nyawa : {$_SESSION['nyawa']}</p><br>";
                    echo "<a href='game.php' class='btn btn-danger btn-sm'>Soal Selanjutnya</a>";
                }
                $_SESSION['angkaA'] = rand(0,20);
                $_SESSION['angkaB'] = rand(0,20);

            }
        } else {
            echo "<p><h1>Sayang sekali kesempatan bermain Anda telah habis</h1> <br><h3 style='color:white'> Semoga beruntung di lain waktu ^^</h3></p>";
            score ($host, $user, $pass, $db, $_COOKIE['nama'], $_SESSION['skor']);
            echo  "<h4 class='btn btn-outline-danger disabled'>Skor Anda : {$_SESSION['skor']}</h4>";
            $_SESSION['nyawa'] = 5;
            $_SESSION['skor'] = 0;
            echo "<p><a href='game.php' class='btn btn-danger btn-sm'>Mulai lagi</a></p>";
            echo "<p>";
            rank($host, $user, $pass, $db);
            echo "</p>";
        }
        ?>
    </div>


  </body>
</html>