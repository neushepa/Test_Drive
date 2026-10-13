<?php
    include "koneksi.php";
    $sql = "SELECT * FROM users";
    $hasil = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <center><h1>Data User</h1></center>
    <table border="1" align="center">
    <a href="register.php"><button>Tambah Data</button></a>    
        <tr>
            <th>No</th>
            <th>id</th>
            <th>Nama</th>
            <th>Username</th>
        </tr>
        <?php
            $no = 1;
            while ($row = $hasil->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "</tr>";
                $no++;
            }
        ?>
</body>
</html>

