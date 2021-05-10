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
    <div class="container-fluid" style='width:50%;position:absolute;top:10%;left:25%'>
    <p><h1>SELAMAT DATANG DI GAME MATEMATIKA</h1></p>
    <?php
    if(!isset($_COOKIE['nama'])){
    ?>
    <form method='post' action='login.php'>
    <p><div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nama Lengkap" name='nama'>
        </div>
        <div class="col">
            <input type="email" class="form-control" placeholder="Email" name='email'>
        </div>
    </div></p>
    <div class="row">
        <div class="col">
            <button type='submit' name='submit' class='btn btn-outline-danger btn-md'>Log In</button>
        </div>
    </div>
    </form>
    <?php
    } else {
        echo "<p><h3>Hallo {$_COOKIE['nama']}, selamat datang kembali</h3></p>";
    ?> <p><a class='btn btn-outline-danger' href='game.php'>Start Game</a></p> 
    <p>Bukan anda? <a href='logout.php' style='color:white;text-decoration:none'> Klik di sini </a></p>
        <?php
    }
    ?>
    </div>    

  </body>
</html>