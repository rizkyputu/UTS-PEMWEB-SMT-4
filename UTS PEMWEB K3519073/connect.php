<?php
$host = 'sql210.epizy.com';
$user = 'epiz_28585480';
$pass = '6wHtZ9h0drp';
$db = 'epiz_28585480_rank';



function score ($host, $user, $pass, $db, $nama, $skor){
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    $query = "INSERT INTO rank (nama, skor) VALUES ('$nama', '$skor')";
    $result = (mysqli_query($mysqli, $query));
    mysqli_close($mysqli);
}

function rank($host, $user, $pass, $db){
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    $query = "SELECT * FROM rank ORDER BY skor DESC LIMIT 10";
    $index = 1;
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) > 0) {

        echo "<table border='1' class='table table-info table-bordered border-dark caption-top'>";
        echo "<tr class='table-dark'>";
        echo "<th>No.</th>";
        echo "<th>Nama Player</th>";
        echo "<th>Score</th>";
        echo "</tr>";

        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td>$index</td>";
            echo"<td>{$row['nama']}</td>";
            echo"<td>{$row['skor']}</td>";
            $index += 1;
        }
       
        echo"</table>";
        
    }
    mysqli_close($mysqli);
}

?>