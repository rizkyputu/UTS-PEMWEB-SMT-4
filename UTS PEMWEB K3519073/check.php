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
  <?php
        if (!isset($_COOKIE['nama'])){
            ?>
        <div class="container-fluid" style='text-align:center;position:absolute;top:20%;width:50%;left:25%;border:1px solid blue;border-radius:15px; padding-bottom:20px'>
    <?php
            
            echo "<p><h1>Maaf anda tidak memiliki akses ke halaman ini</h1></p>";
            echo "<h4><p>Silahkan <a href='index.php' style='color:red'>Log In</a> terlebih dahulu</p></h4>";
            exit();
        }

    ?>
    </div>
  </body>
</html>